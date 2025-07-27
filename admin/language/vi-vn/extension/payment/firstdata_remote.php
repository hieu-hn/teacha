<?php
// Heading
$_['heading_title']					 = 'API Dịch vụ Web First Data EMEA';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Tiện ích';
$_['text_success']					 = 'Thành công: Bạn đã sửa đổi chi tiết tài khoản First Data!';
$_['text_edit']                      = 'Sửa API Dịch vụ Web First Data EMEA';
$_['text_card_type']				 = 'Loại thẻ';
$_['text_enabled']					 = 'Đã bật';
$_['text_merchant_id']				 = 'ID cửa hàng';
$_['text_subaccount']				 = 'Tài khoản phụ';
$_['text_user_id']					 = 'ID người dùng';
$_['text_capture_ok']				 = 'Ghi nhận thành công';
$_['text_capture_ok_order']			 = 'Ghi nhận thành công, trạng thái đơn hàng đã được cập nhật thành công - đã thanh toán';
$_['text_refund_ok']				 = 'Hoàn tiền thành công';
$_['text_refund_ok_order']			 = 'Hoàn tiền thành công, trạng thái đơn hàng đã được cập nhật thành đã hoàn tiền';
$_['text_void_ok']					 = 'Hủy thành công, trạng thái đơn hàng đã được cập nhật thành đã hủy';
$_['text_settle_auto']				 = 'Bán hàng';
$_['text_settle_delayed']			 = 'Ủy quyền trước';
$_['text_mastercard']				 = 'Mastercard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Thông tin thanh toán';
$_['text_capture_status']			 = 'Thanh toán đã được ghi nhận';
$_['text_void_status']				 = 'Thanh toán đã bị hủy';
$_['text_refund_status']			 = 'Thanh toán đã được hoàn lại';
$_['text_order_ref']				 = 'Tham chiếu đơn hàng';
$_['text_order_total']				 = 'Tổng số đã ủy quyền';
$_['text_total_captured']			 = 'Tổng số đã ghi nhận';
$_['text_transactions']				 = 'Giao dịch';
$_['text_column_amount']			 = 'Số tiền';
$_['text_column_type']				 = 'Loại';
$_['text_column_date_added']		 = 'Đã tạo';
$_['text_confirm_void']				 = 'Bạn có chắc chắn muốn hủy thanh toán không?';
$_['text_confirm_capture']			 = 'Bạn có chắc chắn muốn ghi nhận thanh toán không?';
$_['text_confirm_refund']			 = 'Bạn có chắc chắn muốn hoàn lại tiền thanh toán không?';
$_['text_void']                      = 'Hủy';
$_['text_payment']                   = 'Thanh toán';
$_['text_refund']                    = "Hoàn tiền";

// Entry
$_['entry_certificate_path']		 = 'Đường dẫn chứng chỉ';
$_['entry_certificate_key_path']	 = 'Đường dẫn khóa riêng';
$_['entry_certificate_key_pw']		 = 'Mật khẩu khóa riêng';
$_['entry_certificate_ca_path']		 = 'Đường dẫn CA';
$_['entry_merchant_id']				 = 'ID cửa hàng';
$_['entry_user_id']					 = 'ID người dùng';
$_['entry_password']				 = 'Mật khẩu';
$_['entry_total']					 = 'Tổng cộng';
$_['entry_sort_order']				 = 'Thứ tự sắp xếp';
$_['entry_geo_zone']				 = 'Khu vực địa lý';
$_['entry_status']					 = 'Trạng thái';
$_['entry_debug']					 = 'Ghi nhật ký gỡ lỗi';
$_['entry_auto_settle']				 = 'Loại thanh toán';
$_['entry_status_success_settled']	 = 'Thành công - đã thanh toán';
$_['entry_status_success_unsettled'] = 'Thành công - chưa thanh toán';
$_['entry_status_decline']			 = 'Từ chối';
$_['entry_status_void']				 = 'Đã hủy';
$_['entry_status_refund']			 = 'Đã hoàn tiền';
$_['entry_enable_card_store']		 = 'Bật mã thông báo lưu trữ thẻ';
$_['entry_cards_accepted']			 = 'Các loại thẻ được chấp nhận';

// Help
$_['help_total']					 = 'Tổng số tiền thanh toán mà đơn hàng phải đạt được trước khi phương thức thanh toán này được kích hoạt';
$_['help_certificate']				 = 'Chứng chỉ và khóa riêng nên được lưu trữ bên ngoài các thư mục web công cộng của bạn';
$_['help_card_select']				 = 'Yêu cầu người dùng chọn loại thẻ của họ trước khi họ được chuyển hướng';
$_['help_notification']				 = 'Bạn cần cung cấp URL này cho First Data để nhận thông báo thanh toán';
$_['help_debug']					 = 'Bật gỡ lỗi sẽ ghi dữ liệu nhạy cảm vào tệp nhật ký. Bạn nên luôn tắt trừ khi được hướng dẫn khác.';
$_['help_settle']					 = 'Nếu bạn sử dụng ủy quyền trước, bạn phải hoàn thành một hành động sau ủy quyền trong vòng 3-5 ngày, nếu không giao dịch của bạn sẽ bị hủy';

// Tab
$_['tab_account']					 = 'Thông tin API';
$_['tab_order_status']				 = 'Trạng thái đơn hàng';
$_['tab_payment']					 = 'Cài đặt thanh toán';

// Button
$_['button_capture']				 = 'Ghi nhận';
$_['button_refund']					 = 'Hoàn tiền';
$_['button_void']					 = 'Hủy';

// Error
$_['error_merchant_id']				 = 'Yêu cầu ID cửa hàng';
$_['error_user_id']					 = 'Yêu cầu ID người dùng';
$_['error_password']				 = 'Yêu cầu mật khẩu';
$_['error_certificate']				 = 'Yêu cầu đường dẫn chứng chỉ';
$_['error_key']						 = 'Yêu cầu khóa chứng chỉ';
$_['error_key_pw']					 = 'Yêu cầu mật khẩu khóa chứng chỉ';
$_['error_ca']						 = 'Yêu cầu Cơ quan cấp chứng chỉ (CA)';
