# Chi tiết Hệ thống

## 1. Database Schema

### Bảng chính và mối quan hệ

#### User Management
```
oc_user
├── user_id (PK)
├── user_group_id (FK -> oc_user_group)
├── username
├── password
└── status

oc_user_group
├── user_group_id (PK)
├── name
└── permission (JSON)

oc_customer
├── customer_id (PK)
├── customer_group_id (FK -> oc_customer_group)
├── email
├── telephone
└── status
```

#### Product Management
```
oc_product
├── product_id (PK)
├── model
├── sku
├── quantity
├── stock_status_id
├── manufacturer_id (FK -> oc_manufacturer)
└── price

oc_product_description
├── product_id (FK -> oc_product)
├── language_id
├── name
└── description

oc_category
├── category_id (PK)
├── parent_id (Self-referencing)
├── sort_order
└── status

oc_product_to_category
├── product_id (FK -> oc_product)
└── category_id (FK -> oc_category)
```

#### Order Management
```
oc_order
├── order_id (PK)
├── customer_id (FK -> oc_customer)
├── payment_address_id
├── shipping_address_id
├── total
└── order_status_id

oc_order_product
├── order_id (FK -> oc_order)
├── product_id (FK -> oc_product)
├── quantity
└── price

oc_order_history
├── order_id (FK -> oc_order)
├── order_status_id
└── date_added
```

## 2. Flow xử lý chức năng chính

### 2.1 Quy trình đặt hàng
1. **Thêm vào giỏ hàng**
   ```php
   catalog/controller/checkout/cart
   ├── add() // Thêm sản phẩm
   ├── update() // Cập nhật số lượng
   └── remove() // Xóa sản phẩm
   ```

2. **Checkout Process**
   ```
   Checkout Flow:
   1. Login/Register → controller/checkout/login
   2. Billing Details → controller/checkout/payment_address
   3. Shipping Details → controller/checkout/shipping_address
   4. Shipping Method → controller/checkout/shipping_method
   5. Payment Method → controller/checkout/payment_method
   6. Confirm Order → controller/checkout/confirm
   ```

3. **Order Processing**
   ```php
   // controller/checkout/confirm
   public function index() {
     // 1. Validate order data
     // 2. Save order to database
     // 3. Process payment
     // 4. Clear cart
     // 5. Send confirmation email
   }
   ```

### 2.2 Product Management Flow
```
Admin Product Management:
1. List Products → controller/catalog/product/list
2. Add/Edit Product
   ├── Basic Info
   ├── Data (price, stock)
   ├── Links (categories, related)
   ├── Attribute
   ├── Option
   └── Image
3. Save Product → model/catalog/product/addProduct
```

## 3. Cấu trúc File Config

### 3.1 config.php (Root)
```php
// Database
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'user');
define('DB_PASSWORD', 'pass');
define('DB_DATABASE', 'db_name');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// HTTP
define('HTTP_SERVER', 'http://your-domain.com/');
define('HTTP_IMAGE', 'http://your-domain.com/image/');

// HTTPS
define('HTTPS_SERVER', 'https://your-domain.com/');
define('HTTPS_IMAGE', 'https://your-domain.com/image/');

// DIR
define('DIR_APPLICATION', '/path/to/catalog/');
define('DIR_SYSTEM', '/path/to/system/');
define('DIR_IMAGE', '/path/to/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');
```

### 3.2 admin/config.php
```php
// Thêm các cấu hình đặc thù cho admin
define('DIR_ADMIN', '/path/to/admin/');
define('DIR_CATALOG', '/path/to/catalog/');
```

## 4. Cấu trúc Theme

### 4.1 Tổ chức thư mục theme
```
catalog/view/theme/default/
├── stylesheet/
│   ├── stylesheet.css
│   └── responsive.css
├── javascript/
│   └── common.js
└── template/
    ├── common/
    │   ├── header.twig
    │   └── footer.twig
    ├── product/
    │   ├── category.twig
    │   └── product.twig
    └── account/
        ├── login.twig
        └── register.twig
```

### 4.2 Theme Inheritance
```
Base Theme (default)
└── Custom Theme
    ├── Kế thừa templates
    ├── Override templates
    └── Custom styles
```

### 4.3 Template Engine (Twig)
```twig
{# Layout Example - header.twig #}
<!DOCTYPE html>
<html dir="{{ direction }}" lang="{{ lang }}">
<head>
  <title>{{ title }}</title>
  <base href="{{ base }}" />
  {% for style in styles %}
    <link href="{{ style.href }}" rel="stylesheet" />
  {% endfor %}
</head>
<body>
  {{ content }}
</body>
</html>
```

### 4.4 Theme Configuration
```php
// system/config/default.php
$_['theme_default_directory'] = 'default';
$_['theme_default_product_limit'] = 15;
$_['theme_default_status'] = 1;

// Customizing in admin
admin/controller/appearance/theme
```

## 5. Extensions và Modules

### 5.1 Cấu trúc Extension
```
extension_name/
├── admin/
│   ├── controller/extension/module/name.php
│   ├── language/en-gb/extension/module/name.php
│   ├── model/extension/module/name.php
│   └── view/template/extension/module/name.twig
└── catalog/
    ├── controller/extension/module/name.php
    ├── language/en-gb/extension/module/name.php
    ├── model/extension/module/name.php
    └── view/template/extension/module/name.twig
```

### 5.2 Event System
```php
// Đăng ký event
$this->load->model('setting/event');
$this->model_setting_event->addEvent('my_event', 'catalog/model/account/customer/addCustomer/after', 'extension/module/my_module/eventHandler');

// Event handler
public function eventHandler(&$route, &$args, &$output) {
    // Xử lý logic
}
```

## 6. Security Features

### 6.1 Permission System
```php
// Check permission
if (!$this->user->hasPermission('modify', 'catalog/product')) {
    $this->error['warning'] = $this->language->get('error_permission');
}
```

### 6.2 CSRF Protection
```php
// Generate token
$this->session->data['token'] = token(32);

// Validate token
if (!isset($this->session->data['token']) || !isset($this->request->get['token']) || ($this->session->data['token'] != $this->request->get['token'])) {
    $this->response->redirect($this->url->link('common/login', '', true));
}
```

## 7. Logging và Debug

### 7.1 Error Logging
```php
// system/library/log.php
public function write($message) {
    $file = DIR_LOGS . $this->filename;
    $handle = fopen($file, 'a+');
    fwrite($handle, date('Y-m-d G:i:s') . ' - ' . print_r($message, true) . "\n");
    fclose($handle);
}
```

### 7.2 Debug Mode
```php
// config.php
define('DEBUG', true);

// Using in code
if (defined('DEBUG') && DEBUG) {
    $this->log->write('Debug message');
}
```
