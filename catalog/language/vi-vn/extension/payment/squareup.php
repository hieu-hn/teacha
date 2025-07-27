<?php
// Text
$_['text_title'] = 'Thẻ tín dụng / Thẻ ghi nợ (Square)';
$_['text_new_card'] = '+ Thêm thẻ mới';
$_['text_loading'] = 'Đang tải...';
$_['text_card_details'] = 'Chi tiết thẻ';
$_['text_saved_card'] = 'Sử dụng thẻ đã lưu:';
$_['text_card_ends_in'] = 'Thanh toán bằng thẻ %s hiện có kết thúc bằng XXXX XXXX XXXX %s';
$_['text_card_number'] = 'Số thẻ:';
$_['text_card_expiry'] = 'Hết hạn (MM/YY):';
$_['text_card_cvc'] = 'Mã bảo mật thẻ (CVC):';
$_['text_card_zip'] = 'Mã ZIP thẻ:';
$_['text_card_save'] = 'Lưu thẻ để sử dụng sau?';
$_['text_trial'] = '%s mỗi %s %s cho %s khoản thanh toán sau đó ';
$_['text_recurring'] = '%s mỗi %s %s';
$_['text_length'] = ' cho %s khoản thanh toán';
$_['text_cron_subject'] = 'Tóm tắt công việc Square CRON';
$_['text_cron_message'] = 'Đây là danh sách tất cả các tác vụ CRON được thực hiện bởi Square:';
$_['text_squareup_profile_suspended'] = ' Các khoản thanh toán định kỳ của bạn đã bị tạm dừng. Vui lòng liên hệ với chúng tôi để biết thêm chi tiết.';
$_['text_squareup_trial_expired'] = ' Thời gian dùng thử của bạn đã hết hạn.';
$_['text_squareup_recurring_expired'] = 'Các khoản thanh toán định kỳ của bạn đã hết hạn. Đây là khoản thanh toán cuối cùng của bạn.';
$_['text_cron_message_category'] = 'Có %d đơn hàng được làm mới danh mục';
$_['text_cron_message_customer'] = 'Có %d khách hàng hết hạn đã bị xóa';
$_['text_cron_message_customer_count'] = 'Có %d khách hàng hết hạn được cập nhật';
$_['text_cron_message_recurring'] = 'Có %d hồ sơ thanh toán định kỳ được cập nhật';
$_['text_cron_message_outstanding'] = 'Có %d đơn hàng chưa thanh toán được thử xử lý';
$_['text_success_action'] = 'Thành công';
$_['text_error_generic'] = 'Đã xảy ra lỗi khi xử lý yêu cầu của bạn. Vui lòng thử lại sau.';

// Entry
$_['entry_card'] = 'Thẻ mới hoặc hiện có';
$_['entry_card_existing'] = 'Thẻ hiện có';
$_['entry_card_new'] = 'Thẻ mới';
$_['entry_card_save'] = 'Ghi nhớ chi tiết thẻ';
$_['entry_card_nickname'] = 'Tên thẻ';
$_['entry_card_type'] = 'Loại thẻ';
$_['entry_card_number'] = 'Số thẻ';
$_['entry_card_expiry'] = 'Ngày hết hạn';
$_['entry_card_cvv'] = 'CVV';
$_['entry_card_choice'] = 'Chọn thẻ';

// Error
$_['error_card_number'] = 'Số thẻ không hợp lệ.';
$_['error_card_expired'] = 'Thẻ đã hết hạn.';
$_['error_card_invalid'] = 'Thẻ không hợp lệ.';
$_['error_card_cvv'] = 'CVV không hợp lệ.';
$_['error_card_zip'] = 'Mã ZIP không hợp lệ.';
$_['error_card_invalid_payment'] = 'Số thẻ không hợp lệ hoặc không được hỗ trợ.';
$_['error_declined'] = 'Thẻ bị từ chối. Vui lòng liên hệ với ngân hàng phát hành thẻ để biết chi tiết.';
$_['error_address_mismatch'] = 'Địa chỉ thanh toán không khớp với địa chỉ thẻ của bạn.';
$_['error_expired'] = 'Thẻ đã hết hạn.';
$_['error_generic_decline'] = 'Thanh toán không thành công. Vui lòng thử lại hoặc sử dụng một phương thức thanh toán khác.';

$_['text_cron_summary_token_heading']   = 'Làm mới mã truy cập:';
$_['text_cron_summary_token_updated']   = 'Mã truy cập đã được cập nhật thành công!';
$_['text_cron_summary_error_heading']   = 'Lỗi giao dịch:';
$_['text_cron_summary_fail_heading']    = 'Giao dịch thất bại (Hồ sơ bị tạm ngưng):';
$_['text_cron_summary_success_heading'] = 'Giao dịch thành công:';
$_['text_cron_fail_charge']             = 'Không thể tính phí hồ sơ <strong>#%s</strong> với số tiền <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Đã tính phí hồ sơ <strong>#%s</strong> với số tiền <strong>%s</strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Thẻ Tín dụng / Ghi nợ';
$_['text_token_issue_customer_error']   = 'Chúng tôi đang gặp sự cố kỹ thuật với hệ thống thanh toán. Vui lòng thử lại sau.';
$_['text_token_revoked_subject']        = 'Mã truy cập Square của bạn đã bị thu hồi!';
$_['text_token_revoked_message']        = "Quyền truy cập của tiện ích thanh toán Square vào tài khoản Square của bạn đã bị thu hồi thông qua Bảng điều khiển Square. Bạn cần xác minh thông tin xác thực ứng dụng trong phần cài đặt tiện ích và kết nối lại.";
$_['text_token_expired_subject']        = 'Mã truy cập Square của bạn đã hết hạn!';
$_['text_token_expired_message']        = "Mã truy cập kết nối tiện ích thanh toán Square với tài khoản Square của bạn đã hết hạn. Bạn cần xác minh thông tin xác thực ứng dụng và thiết lập tác vụ CRON trong phần cài đặt tiện ích, sau đó kết nối lại.";

// Error
$_['error_browser_not_supported']       = 'Lỗi: Trình duyệt của bạn không còn được hệ thống thanh toán hỗ trợ. Vui lòng cập nhật hoặc sử dụng trình duyệt khác.';
$_['error_card_invalid']                = 'Lỗi: Thẻ không hợp lệ!';
$_['error_squareup_cron_token']         = 'Lỗi: Không thể làm mới mã truy cập. Vui lòng kết nối tiện ích thanh toán Square của bạn thông qua bảng quản trị OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Cảnh báo: Đang bật chế độ Sandbox! Các giao dịch sẽ được hiển thị như đã hoàn tất, nhưng không có khoản phí thực sự nào được thực hiện.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Giao dịch thẻ đã được ủy quyền nhưng chưa được thu tiền.';
$_['squareup_status_comment_captured']      = 'Giao dịch thẻ đã được ủy quyền và sau đó đã được thu tiền (hoàn tất).';
$_['squareup_status_comment_voided']        = 'Giao dịch thẻ đã được ủy quyền và sau đó bị hủy (đã bị hủy bỏ).';
$_['squareup_status_comment_failed']        = 'Giao dịch thẻ thất bại.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Quốc gia của địa chỉ thanh toán không hợp lệ. Vui lòng chỉnh sửa và thử lại.';
$_['squareup_override_error_shipping_address.country']      = 'Quốc gia của địa chỉ giao hàng không hợp lệ. Vui lòng chỉnh sửa và thử lại.';
$_['squareup_override_error_email_address']                 = 'Địa chỉ email của bạn không hợp lệ. Vui lòng chỉnh sửa và thử lại.';
$_['squareup_override_error_phone_number']                  = 'Số điện thoại của bạn không hợp lệ. Vui lòng chỉnh sửa và thử lại.';
$_['squareup_error_field']                                  = ' Trường: %s';
