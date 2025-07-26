<?php
// Heading
$_['heading_title']				= 'Thanh toán eWAY';

// Text
$_['text_extension']			= 'Tiện ích';
$_['text_success']				= 'Thành công: Bạn đã sửa đổi chi tiết eWAY của mình!';
$_['text_edit']					= 'Chỉnh sửa eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Ủy quyền';
$_['text_sale']					= 'Bán hàng';
$_['text_transparent']			= 'Chuyển hướng trong suốt (biểu mẫu thanh toán trên trang web)';
$_['text_iframe']				= 'IFrame (biểu mẫu thanh toán trong cửa sổ)';
$_['text_connect_eway']	        = 'eWAY giúp các doanh nghiệp xử lý an toàn tất cả các thẻ tín dụng chính, với tính năng ngăn chặn gian lận tích hợp, hỗ trợ kỹ thuật 24/7 và nhiều hơn nữa. <a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf">Nhấp vào đây</a>';
$_['text_eway_image']	        = '<a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf"><img src="view/image/payment/eway_connect.png" alt="eWAY" title="eWAY" class="img-fluid" /></a>';

// Entry
$_['entry_paymode']				= 'Chế độ thanh toán';
$_['entry_test']				= 'Chế độ thử nghiệm';
$_['entry_order_status']		= 'Trạng thái đơn hàng';
$_['entry_order_status_refund'] = 'Trạng thái đơn hàng đã hoàn tiền';
$_['entry_order_status_auth']	= 'Trạng thái đơn hàng đã ủy quyền';
$_['entry_order_status_fraud']	= 'Trạng thái đơn hàng nghi ngờ gian lận';
$_['entry_status']				= 'Trạng thái';
$_['entry_username']			= 'Khóa API eWAY';
$_['entry_password']			= 'Mật khẩu eWAY';
$_['entry_payment_type']		= 'Loại thanh toán';
$_['entry_geo_zone']			= 'Khu vực địa lý';
$_['entry_sort_order']			= 'Thứ tự sắp xếp';
$_['entry_transaction_method']	= 'Phương thức giao dịch';

// Error
$_['error_permission']			= 'Cảnh báo: Bạn không có quyền sửa đổi mô-đun thanh toán eWAY';
$_['error_username']			= 'Yêu cầu Khóa API eWAY!';
$_['error_password']			= 'Yêu cầu mật khẩu eWAY!';
$_['error_payment_type']		= 'Yêu cầu ít nhất một loại thanh toán!';

// Help hints
$_['help_testmode']				= 'Đặt thành Có để sử dụng Sandbox của eWAY.';
$_['help_username']				= 'Khóa API eWAY của bạn từ tài khoản MYeWAY.';
$_['help_password']				= 'Mật khẩu API eWAY của bạn từ tài khoản MYeWAY.';
$_['help_transaction_method']	= 'Ủy quyền chỉ khả dụng cho các ngân hàng Úc';

// Order page - payment tab
$_['text_payment_info']			= 'Thông tin thanh toán';
$_['text_order_total']			= 'Tổng số đã ủy quyền';
$_['text_transactions']			= 'Giao dịch';
$_['text_column_transactionid'] = 'ID giao dịch eWAY';
$_['text_column_amount']		= 'Số tiền';
$_['text_column_type']			= 'Loại';
$_['text_column_created']		= 'Đã tạo';
$_['text_total_captured']		= 'Tổng số đã ghi nhận';
$_['text_capture_status']		= 'Thanh toán đã được ghi nhận';
$_['text_void_status']			= 'Thanh toán đã bị hủy';
$_['text_refund_status']		= 'Thanh toán đã được hoàn lại';
$_['text_total_refunded']		= 'Tổng số đã hoàn lại';
$_['text_refund_success']		= 'Hoàn tiền thành công!';
$_['text_capture_success']		= 'Ghi nhận thành công!';
$_['text_refund_failed']		= 'Hoàn tiền không thành công: ';
$_['text_capture_failed']		= 'Ghi nhận không thành công: ';
$_['text_unknown_failure']		= 'Đơn hàng hoặc số tiền không hợp lệ';
$_['text_refund']               = 'Hoàn tiền';

$_['text_confirm_capture']		= 'Bạn có chắc chắn muốn ghi nhận thanh toán không?';
$_['text_confirm_release']		= 'Bạn có chắc chắn muốn giải phóng thanh toán không?';
$_['text_confirm_refund']		= 'Bạn có chắc chắn muốn hoàn lại tiền thanh toán không?';

$_['text_empty_refund']			= 'Vui lòng nhập số tiền để hoàn lại';
$_['text_empty_capture']		= 'Vui lòng nhập số tiền để ghi nhận';

$_['btn_refund']				= 'Hoàn tiền';
$_['btn_capture']				= 'Ghi nhận';

// Validation Error codes
$_['text_card_message_V6000']	= 'Lỗi xác thực không xác định';
$_['text_card_message_V6001'] 	= 'IP khách hàng không hợp lệ';
$_['text_card_message_V6002'] 	= 'DeviceID không hợp lệ';
$_['text_card_message_V6011'] 	= 'Số tiền không hợp lệ';
$_['text_card_message_V6012'] 	= 'Mô tả hóa đơn không hợp lệ';
$_['text_card_message_V6013'] 	= 'Số hóa đơn không hợp lệ';
$_['text_card_message_V6014'] 	= 'Tham chiếu hóa đơn không hợp lệ';
$_['text_card_message_V6015'] 	= 'Mã tiền tệ không hợp lệ';
$_['text_card_message_V6016'] 	= 'Yêu cầu thanh toán';
$_['text_card_message_V6017'] 	= 'Yêu cầu mã tiền tệ thanh toán';
$_['text_card_message_V6018'] 	= 'Mã tiền tệ thanh toán không xác định';
$_['text_card_message_V6021'] 	= 'Yêu cầu tên chủ thẻ';
$_['text_card_message_V6022'] 	= 'Yêu cầu số thẻ';
$_['text_card_message_V6023'] 	= 'Yêu cầu CVN';
$_['text_card_message_V6031'] 	= 'Số thẻ không hợp lệ';
$_['text_card_message_V6032'] 	= 'CVN không hợp lệ';
$_['text_card_message_V6033'] 	= 'Ngày hết hạn không hợp lệ';
$_['text_card_message_V6034'] 	= 'Số phát hành không hợp lệ';
$_['text_card_message_V6035'] 	= 'Ngày bắt đầu không hợp lệ';
$_['text_card_message_V6036'] 	= 'Tháng không hợp lệ';
$_['text_card_message_V6037'] 	= 'Năm không hợp lệ';
$_['text_card_message_V6040'] 	= 'Id khách hàng mã thông báo không hợp lệ';
$_['text_card_message_V6041'] 	= 'Yêu cầu khách hàng';
$_['text_card_message_V6042'] 	= 'Yêu cầu tên khách hàng';
$_['text_card_message_V6043'] 	= 'Yêu cầu họ khách hàng';
$_['text_card_message_V6044'] 	= 'Yêu cầu mã quốc gia khách hàng';
$_['text_card_message_V6045'] 	= 'Yêu cầu danh xưng khách hàng';
$_['text_card_message_V6046'] 	= 'Yêu cầu ID khách hàng mã thông báo';
$_['text_card_message_V6047'] 	= 'Yêu cầu URL chuyển hướng';
$_['text_card_message_V6051'] 	= 'Tên không hợp lệ';
$_['text_card_message_V6052'] 	= 'Họ không hợp lệ';
$_['text_card_message_V6053'] 	= 'Mã quốc gia không hợp lệ';
$_['text_card_message_V6054'] 	= 'Email không hợp lệ';
$_['text_card_message_V6055'] 	= 'Điện thoại không hợp lệ';
$_['text_card_message_V6056'] 	= 'Di động không hợp lệ';
$_['text_card_message_V6057'] 	= 'Fax không hợp lệ';
$_['text_card_message_V6058'] 	= 'Danh xưng không hợp lệ';
$_['text_card_message_V6059'] 	= 'URL chuyển hướng không hợp lệ';
$_['text_card_message_V6060'] 	= 'URL chuyển hướng không hợp lệ';
$_['text_card_message_V6061'] 	= 'Tham chiếu không hợp lệ';
$_['text_card_message_V6062'] 	= 'Tên công ty không hợp lệ';
$_['text_card_message_V6063'] 	= 'Mô tả công việc không hợp lệ';
$_['text_card_message_V6064'] 	= 'Địa chỉ 1 không hợp lệ';
$_['text_card_message_V6065'] 	= 'Địa chỉ 2 không hợp lệ';
$_['text_card_message_V6066'] 	= 'Thành phố không hợp lệ';
$_['text_card_message_V6067'] 	= 'Tiểu bang không hợp lệ';
$_['text_card_message_V6068'] 	= 'Mã bưu chính không hợp lệ';
$_['text_card_message_V6069'] 	= 'Email không hợp lệ';
$_['text_card_message_V6070'] 	= 'Điện thoại không hợp lệ';
$_['text_card_message_V6071'] 	= 'Di động không hợp lệ';
$_['text_card_message_V6072'] 	= 'Bình luận không hợp lệ';
$_['text_card_message_V6073'] 	= 'Fax không hợp lệ';
$_['text_card_message_V6074'] 	= 'Url không hợp lệ';
$_['text_card_message_V6075'] 	= 'Tên địa chỉ giao hàng không hợp lệ';
$_['text_card_message_V6076'] 	= 'Họ địa chỉ giao hàng không hợp lệ';
$_['text_card_message_V6077'] 	= 'Địa chỉ 1 giao hàng không hợp lệ';
$_['text_card_message_V6078'] 	= 'Địa chỉ 2 giao hàng không hợp lệ';
$_['text_card_message_V6079'] 	= 'Thành phố giao hàng không hợp lệ';
$_['text_card_message_V6080'] 	= 'Tiểu bang giao hàng không hợp lệ';
$_['text_card_message_V6081'] 	= 'Mã bưu chính giao hàng không hợp lệ';
$_['text_card_message_V6082'] 	= 'Email giao hàng không hợp lệ';
$_['text_card_message_V6083'] 	= 'Điện thoại giao hàng không hợp lệ';
$_['text_card_message_V6084'] 	= 'Quốc gia giao hàng không hợp lệ';
$_['text_card_message_V6091'] 	= 'Mã quốc gia không xác định';
$_['text_card_message_V6100'] 	= 'Tên thẻ không hợp lệ';
$_['text_card_message_V6101'] 	= 'Tháng hết hạn thẻ không hợp lệ';
$_['text_card_message_V6102'] 	= 'Năm hết hạn thẻ không hợp lệ';
$_['text_card_message_V6103'] 	= 'Tháng bắt đầu thẻ không hợp lệ';
$_['text_card_message_V6104'] 	= 'Năm bắt đầu thẻ không hợp lệ';
$_['text_card_message_V6105'] 	= 'Số phát hành thẻ không hợp lệ';
$_['text_card_message_V6106'] 	= 'CVN thẻ không hợp lệ';
$_['text_card_message_V6107'] 	= 'Mã truy cập không hợp lệ';
$_['text_card_message_V6108'] 	= 'Địa chỉ Host khách hàng không hợp lệ';
$_['text_card_message_V6109'] 	= 'UserAgent không hợp lệ';
$_['text_card_message_V6110'] 	= 'Số thẻ không hợp lệ';
$_['text_card_message_V6111'] 	= 'Truy cập API không được phép, tài khoản chưa được chứng nhận PCI';
$_['text_card_message_V6112'] 	= 'Chi tiết thẻ thừa ngoài năm và tháng hết hạn';
$_['text_card_message_V6113'] 	= 'Giao dịch không hợp lệ để hoàn tiền';
$_['text_card_message_V6114'] 	= 'Lỗi xác thực cổng thanh toán';
$_['text_card_message_V6115'] 	= 'Yêu cầu hoàn tiền trực tiếp không hợp lệ, ID giao dịch';
$_['text_card_message_V6116'] 	= 'Dữ liệu thẻ không hợp lệ trên TransactionID gốc';
$_['text_card_message_V6124'] 	= 'Các mặt hàng trong dòng không hợp lệ. Các mặt hàng trong dòng đã được cung cấp tuy nhiên tổng số không khớp với trường TotalAmount';
$_['text_card_message_V6125'] 	= 'Loại thanh toán đã chọn không được bật';
$_['text_card_message_V6126'] 	= 'Số thẻ được mã hóa không hợp lệ, giải mã không thành công';
$_['text_card_message_V6127'] 	= 'CVN được mã hóa không hợp lệ, giải mã không thành công';
$_['text_card_message_V6128'] 	= 'Phương thức không hợp lệ cho loại thanh toán';
$_['text_card_message_V6129'] 	= 'Giao dịch chưa được ủy quyền để ghi nhận/hủy bỏ';
$_['text_card_message_V6130'] 	= 'Lỗi thông tin khách hàng chung';
$_['text_card_message_V6131'] 	= 'Lỗi thông tin giao hàng chung';
$_['text_card_message_V6132'] 	= 'Giao dịch đã được hoàn thành hoặc bị hủy, hoạt động không được phép';
$_['text_card_message_V6133'] 	= 'Thanh toán không khả dụng cho loại thanh toán';
$_['text_card_message_V6134'] 	= 'ID giao dịch ủy quyền không hợp lệ để ghi nhận/hủy';
$_['text_card_message_V6135'] 	= 'Lỗi xử lý hoàn tiền của PayPal';
$_['text_card_message_V6140'] 	= 'Tài khoản người bán bị tạm ngưng';
$_['text_card_message_V6141'] 	= 'Chi tiết tài khoản PayPal hoặc chữ ký API không hợp lệ';
$_['text_card_message_V6142'] 	= 'Ủy quyền không khả dụng cho Ngân hàng/Chi nhánh';
$_['text_card_message_V6150'] 	= 'Số tiền hoàn lại không hợp lệ';
$_['text_card_message_V6151'] 	= 'Số tiền hoàn lại lớn hơn giao dịch ban đầu';
$_['text_card_message_D4406'] 	= 'Lỗi không xác định';
$_['text_card_message_S5010'] 	= 'Lỗi không xác định';
