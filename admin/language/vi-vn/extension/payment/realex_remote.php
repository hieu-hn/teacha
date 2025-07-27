<?php
// Tiêu đề
$_['heading_title'] = 'Realex Remote';

// Văn bản
$_['text_extension'] = 'Tiện ích mở rộng';
$_['text_success'] = 'Thành công: Bạn đã cập nhật chi tiết tài khoản Realex!';
$_['text_edit'] = 'Chỉnh sửa Realex Remote';
$_['text_card_type'] = 'Loại thẻ';
$_['text_enabled'] = 'Đã bật';
$_['text_use_default'] = 'Dùng mặc định';
$_['text_merchant_id'] = 'Mã thương gia';
$_['text_subaccount'] = 'Tài khoản phụ';
$_['text_secret'] = 'Mã bí mật chia sẻ';
$_['text_card_visa'] = 'Visa';
$_['text_card_master'] = 'Mastercard';
$_['text_card_amex'] = 'American Express';
$_['text_card_switch'] = 'Switch/Maestro';
$_['text_card_laser'] = 'Laser';
$_['text_card_diners'] = 'Diners';
$_['text_capture_ok'] = 'Thu tiền thành công';
$_['text_capture_ok_order'] = 'Thu tiền thành công, trạng thái đơn hàng đã cập nhật sang thành công - đã thanh toán';
$_['text_rebate_ok'] = 'Hoàn tiền thành công';
$_['text_rebate_ok_order'] = 'Hoàn tiền thành công, trạng thái đơn hàng đã cập nhật là đã hoàn tiền';
$_['text_void_ok'] = 'Hủy thành công, trạng thái đơn hàng đã cập nhật là đã hủy';
$_['text_settle_auto'] = 'Tự động';
$_['text_settle_delayed'] = 'Trì hoãn';
$_['text_settle_multi'] = 'Nhiều lần';
$_['text_ip_message'] = 'Bạn phải cung cấp địa chỉ IP máy chủ cho quản lý tài khoản Realex trước khi đưa vào hoạt động';
$_['text_payment_info'] = 'Thông tin thanh toán';
$_['text_capture_status'] = 'Đã thu tiền';
$_['text_void_status'] = 'Đã hủy thanh toán';
$_['text_rebate_status'] = 'Đã hoàn tiền';
$_['text_order_ref'] = 'Mã đơn hàng';
$_['text_order_total'] = 'Tổng số được ủy quyền';
$_['text_total_captured'] = 'Tổng số đã thu';
$_['text_transactions'] = 'Giao dịch';
$_['text_confirm_void'] = 'Bạn có chắc chắn muốn hủy thanh toán này không?';
$_['text_confirm_capture'] = 'Bạn có chắc chắn muốn thu tiền thanh toán này không?';
$_['text_confirm_rebate'] = 'Bạn có chắc chắn muốn hoàn tiền thanh toán này không?';
$_['text_realex_remote'] = '<a target="_BLANK" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"><img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_void'] = 'Hủy';
$_['text_payment'] = 'Thanh toán';
$_['text_rebate'] = 'Hoàn tiền';

// Cột
$_['text_column_amount'] = 'Số tiền';
$_['text_column_type'] = 'Loại';
$_['text_column_date_added'] = 'Ngày tạo';

// Mục nhập
$_['entry_merchant_id'] = 'Mã thương gia';
$_['entry_secret'] = 'Mã bí mật chia sẻ';
$_['entry_rebate_password'] = 'Mật khẩu hoàn tiền';
$_['entry_total'] = 'Tổng cộng';
$_['entry_sort_order'] = 'Thứ tự sắp xếp';
$_['entry_geo_zone'] = 'Khu vực địa lý';
$_['entry_status'] = 'Trạng thái';
$_['entry_debug'] = 'Ghi nhật ký gỡ lỗi';
$_['entry_auto_settle'] = 'Loại thanh toán';
$_['entry_tss_check'] = 'Kiểm tra TSS';
$_['entry_card_data_status'] = 'Ghi nhật ký thông tin thẻ';
$_['entry_3d'] = 'Bật 3D Secure';
$_['entry_liability_shift'] = 'Chấp nhận tình huống không chuyển trách nhiệm';
$_['entry_status_success_settled'] = 'Thành công - đã thanh toán';
$_['entry_status_success_unsettled'] = 'Thành công - chưa thanh toán';
$_['entry_status_decline'] = 'Từ chối';
$_['entry_status_decline_pending'] = 'Từ chối - xác thực ngoại tuyến';
$_['entry_status_decline_stolen'] = 'Từ chối - thẻ bị mất hoặc đánh cắp';
$_['entry_status_decline_bank'] = 'Từ chối - lỗi ngân hàng';
$_['entry_status_void'] = 'Đã hủy';
$_['entry_status_rebate'] = 'Đã hoàn tiền';

// Trợ giúp
$_['help_total'] = 'Tổng đơn hàng phải đạt giá trị này trước khi phương thức thanh toán này được kích hoạt';
$_['help_card_select'] = 'Yêu cầu người dùng chọn loại thẻ của họ trước khi được chuyển hướng';
$_['help_notification'] = 'Bạn cần cung cấp URL này cho Realex để nhận thông báo thanh toán';
$_['help_debug'] = 'Bật gỡ lỗi sẽ ghi dữ liệu nhạy cảm vào tệp nhật ký. Bạn nên tắt trừ khi có yêu cầu khác.';
$_['help_liability'] = 'Chấp nhận trách nhiệm nghĩa là bạn vẫn sẽ chấp nhận thanh toán nếu người dùng thất bại khi xác thực 3D secure.';
$_['help_card_data_status'] = 'Ghi nhật ký 4 số cuối của thẻ, ngày hết hạn, tên, loại và thông tin ngân hàng phát hành';

// Tab
$_['tab_api'] = 'Chi tiết API';
$_['tab_account'] = 'Tài khoản';
$_['tab_order_status'] = 'Trạng thái đơn hàng';
$_['tab_payment'] = 'Cài đặt thanh toán';

// Nút
$_['button_capture'] = 'Thu tiền';
$_['button_rebate'] = 'Hoàn tiền / hoàn lại';
$_['button_void'] = 'Hủy';

// Lỗi
$_['error_merchant_id'] = 'Yêu cầu nhập mã thương gia';
$_['error_secret'] = 'Yêu cầu nhập mã bí mật chia sẻ';
