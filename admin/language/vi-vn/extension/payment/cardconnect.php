<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Cài đặt';
$_['tab_order_status']              = 'Trạng thái đơn hàng';

// Text
$_['text_extension']                = 'Tiện ích';
$_['text_success']                  = 'Thành công: Bạn đã sửa đổi mô-đun thanh toán CardConnect!';
$_['text_edit']                     = 'Sửa CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Thanh toán';
$_['text_refund']                   = 'Hoàn tiền';
$_['text_authorize']                = 'Ủy quyền';
$_['text_live']                     = 'Trực tiếp';
$_['text_test']                     = 'Thử nghiệm';
$_['text_no_cron_time']             = 'Cron chưa được thực thi';
$_['text_payment_info']             = 'Thông tin thanh toán';
$_['text_payment_method']           = 'Phương thức thanh toán';
$_['text_card']                     = 'Thẻ';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Tham chiếu';
$_['text_update']                   = 'Cập nhật';
$_['text_order_total']              = 'Tổng đơn hàng';
$_['text_total_captured']           = 'Tổng đã ghi nhận';
$_['text_capture_payment']          = 'Ghi nhận thanh toán';
$_['text_refund_payment']           = 'Hoàn tiền thanh toán';
$_['text_void']                     = 'Hủy';
$_['text_transactions']             = 'Giao dịch';
$_['text_column_type']              = 'Loại';
$_['text_column_reference']         = 'Tham chiếu';
$_['text_column_amount']            = 'Số tiền';
$_['text_column_status']            = 'Trạng thái';
$_['text_column_date_modified']     = 'Ngày sửa đổi';
$_['text_column_date_added']        = 'Ngày thêm';
$_['text_column_update']            = 'Cập nhật';
$_['text_column_void']              = 'Hủy';
$_['text_confirm_capture']          = 'Bạn có chắc chắn muốn ghi nhận thanh toán không?';
$_['text_confirm_refund']           = 'Bạn có chắc chắn muốn hoàn lại tiền thanh toán không?';
$_['text_inquire_success']          = 'Yêu cầu thành công';
$_['text_capture_success']          = 'Yêu cầu ghi nhận thành công';
$_['text_refund_success']           = 'Yêu cầu hoàn tiền thành công';
$_['text_void_success']             = 'Yêu cầu hủy thành công';

// Entry
$_['entry_merchant_id']             = 'Merchant ID';
$_['entry_api_username']            = 'Tên người dùng API';
$_['entry_api_password']            = 'Mật khẩu API';
$_['entry_token']                   = 'Mã bí mật';
$_['entry_transaction']             = 'Giao dịch';
$_['entry_environment']             = 'Môi trường';
$_['entry_site']                    = 'Trang web';
$_['entry_store_cards']             = 'Lưu trữ thẻ';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Tổng cộng';
$_['entry_geo_zone']                = 'Khu vực địa lý';
$_['entry_status']                  = 'Trạng thái';
$_['entry_logging']                 = 'Ghi nhật ký gỡ lỗi';
$_['entry_sort_order']              = 'Thứ tự sắp xếp';
$_['entry_cron_url']                = 'URL Cron Job';
$_['entry_cron_time']               = 'Cron Job chạy lần cuối';
$_['entry_order_status_pending']    = 'Đang chờ xử lý';
$_['entry_order_status_processing'] = 'Đang xử lý';

// Help
$_['help_merchant_id']              = 'Merchant ID tài khoản CardConnect cá nhân của bạn.';
$_['help_api_username']             = 'Tên người dùng của bạn để truy cập API CardConnect.';
$_['help_api_password']             = 'Mật khẩu của bạn để truy cập API CardConnect.';
$_['help_token']                    = 'Nhập một mã thông báo ngẫu nhiên để bảo mật hoặc sử dụng mã được tạo.';
$_['help_transaction']              = 'Chọn \'Thanh toán\' để ghi nhận thanh toán ngay lập tức hoặc \'Ủy quyền\' để phải phê duyệt nó.';
$_['help_site']                     = 'Điều này xác định phần đầu tiên của URL API. Chỉ thay đổi nếu được hướng dẫn.';
$_['help_store_cards']              = 'Liệu bạn có muốn lưu trữ thẻ bằng cách mã hóa hay không.';
$_['help_echeck']                   = 'Liệu bạn có muốn cung cấp khả năng thanh toán bằng eCheck hay không.';
$_['help_total']                    = 'Tổng số tiền thanh toán mà đơn hàng phải đạt được trước khi phương thức thanh toán này được kích hoạt. Phải là một giá trị không có ký hiệu tiền tệ.';
$_['help_logging']                  = 'Bật gỡ lỗi sẽ ghi dữ liệu nhạy cảm vào tệp nhật ký. Bạn nên luôn tắt trừ khi được hướng dẫn khác.';
$_['help_cron_url']                 = 'Đặt một công việc cron để gọi URL này để các đơn hàng được tự động cập nhật. Nó được thiết kế để chạy vài giờ sau lần ghi nhận cuối cùng của một ngày làm việc.';
$_['help_cron_time']                = 'Đây là lần cuối cùng URL công việc cron được thực thi.';
$_['help_order_status_pending']     = 'Trạng thái đơn hàng khi đơn hàng phải được người bán ủy quyền.';
$_['help_order_status_processing']  = 'Trạng thái đơn hàng khi đơn hàng được tự động ghi nhận.';

// Button
$_['button_inquire_all']            = 'Yêu cầu tất cả';
$_['button_capture']                = 'Ghi nhận';
$_['button_refund']                 = 'Hoàn tiền';
$_['button_void_all']               = 'Hủy tất cả';
$_['button_inquire']                = 'Yêu cầu';
$_['button_void']                   = 'Hủy';

// Error
$_['error_permission']              = 'Cảnh báo: Bạn không có quyền sửa đổi thanh toán CardConnect!';
$_['error_merchant_id']             = 'Yêu cầu Merchant ID!';
$_['error_api_username']            = 'Yêu cầu Tên người dùng API!';
$_['error_api_password']            = 'Yêu cầu Mật khẩu API!';
$_['error_token']                   = 'Yêu cầu Mã bí mật!';
$_['error_site']                    = 'Yêu cầu Trang web!';
$_['error_amount_zero']             = 'Số tiền phải lớn hơn không!';
$_['error_no_order']                = 'Không có thông tin đơn hàng phù hợp!';
$_['error_invalid_response']        = 'Phản hồi nhận được không hợp lệ!';
$_['error_data_missing']            = 'Thiếu dữ liệu!';
$_['error_not_enabled']             = 'Mô-đun chưa được bật!';
