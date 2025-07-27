<?php
/**
 * Script so sánh key ngôn ngữ giữa file tiếng Anh và tiếng Việt
 * Sử dụng: php compare_language_keys.php
 */

// Đường dẫn đến thư mục ngôn ngữ

$en_path = '/workspaces/teacha/catalog/language/en-gb/';
$vi_path = '/workspaces/teacha/catalog/language/vi-vn/';
/*
$en_path = '/workspaces/teacha/admin/language/en-gb/';
$vi_path = '/workspaces/teacha/admin/language/vi-vn/';
*/
// Hàm lấy tất cả các key từ file PHP
function getLanguageKeys($file) {
    $keys = array();
    $content = file_get_contents($file);
    preg_match_all('/\$_\[\'(.*?)\'\]/', $content, $matches);
    return $matches[1];
}

// Hàm so sánh hai file
function compareFiles($en_file, $vi_file) {
    echo "So sánh file: " . basename($en_file) . "\n";
    
    if (!file_exists($vi_file)) {
        echo "THIẾU FILE: $vi_file\n";
        return;
    }
    
    $en_keys = getLanguageKeys($en_file);
    $vi_keys = getLanguageKeys($vi_file);
    
    // Tìm key có trong tiếng Anh nhưng không có trong tiếng Việt
    $missing_keys = array_diff($en_keys, $vi_keys);
    if (!empty($missing_keys)) {
        echo "Keys thiếu trong file tiếng Việt:\n";
        foreach ($missing_keys as $key) {
            echo "- $key\n";
        }
    }
    
    // Tìm key có trong tiếng Việt nhưng không có trong tiếng Anh
    $extra_keys = array_diff($vi_keys, $en_keys);
    if (!empty($extra_keys)) {
        echo "Keys thừa trong file tiếng Việt:\n";
        foreach ($extra_keys as $key) {
            echo "- $key\n";
        }
    }
}

// Hàm quét thư mục đệ quy
function scanDirectory($en_path, $vi_path) {
    $files = glob($en_path . '*.php');
    foreach ($files as $file) {
        $relative_path = str_replace($en_path, '', $file);
        $vi_file = $vi_path . $relative_path;
        compareFiles($file, $vi_file);
    }
    
    // Quét các thư mục con
    $dirs = glob($en_path . '*', GLOB_ONLYDIR);
    foreach ($dirs as $dir) {
        $relative_dir = str_replace($en_path, '', $dir);
        scanDirectory($en_path . $relative_dir . '/', $vi_path . $relative_dir . '/');
    }
}

// Bắt đầu quét
echo "Bắt đầu so sánh key ngôn ngữ...\n";
scanDirectory($en_path, $vi_path);
echo "Hoàn thành so sánh.\n";
