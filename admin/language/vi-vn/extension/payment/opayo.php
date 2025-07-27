<?php
// Tiêu đề
$_['heading_title']						= 'Opayo';

// Văn bản
$_['text_opayo']	  					= '<img src="view/image/payment/opayo.png" alt="Opayo" title="Opayo" />';
$_['text_extensions']     				= 'Tiện ích mở rộng';
$_['text_edit']          				= 'Chỉnh sửa Opayo';
$_['text_tab_general']				 	= 'Chung';
$_['text_tab_cron']						= 'Cron';
$_['text_test']				  			= 'Thử nghiệm';
$_['text_live']				  			= 'Hoạt động';
$_['text_defered']			  			= 'Trì hoãn';
$_['text_authenticate']		  			= 'Xác thực';
$_['text_payment']		  				= 'Thanh toán';
$_['text_payment_info']		  			= 'Thông tin thanh toán';
$_['text_release_status']	  			= 'Thanh toán đã phát hành';
$_['text_void_status']		 			= 'Thanh toán đã hủy';
$_['text_rebate_status']	  			= 'Thanh toán đã hoàn tiền';
$_['text_order_ref']		  			= 'Mã đơn hàng';
$_['text_order_total']		  			= 'Tổng số được ủy quyền';
$_['text_total_released']	  			= 'Tổng số đã phát hành';
$_['text_transactions']		  			= 'Giao dịch';
$_['text_column_amount']	  			= 'Số tiền';
$_['text_column_type']		  			= 'Loại';
$_['text_column_date_added']  			= 'Ngày tạo';
$_['text_confirm_void']		  			= 'Bạn có chắc chắn muốn hủy thanh toán này không?';
$_['text_confirm_release']	  			= 'Bạn có chắc chắn muốn phát hành thanh toán này không?';
$_['text_confirm_rebate']	  			= 'Bạn có chắc chắn muốn hoàn tiền thanh toán này không?';

// Mục nhập
$_['entry_vendor']			  			= 'Nhà cung cấp (Vendor)';
$_['entry_environment']			  		= 'Môi trường';
$_['entry_transaction_method']		  	= 'Phương thức giao dịch';
$_['entry_total']             			= 'Tổng cộng';
$_['entry_order_status']	  			= 'Trạng thái đơn hàng';
$_['entry_geo_zone']		  			= 'Khu vực địa lý';
$_['entry_status']			  			= 'Trạng thái';
$_['entry_sort_order']		  			= 'Thứ tự sắp xếp';
$_['entry_debug']			  			= 'Ghi nhật ký gỡ lỗi';
$_['entry_card_save']			  		= 'Lưu thẻ';
$_['entry_cron_token']	  				= 'Mã bảo mật';
$_['entry_cron_url']	  				= 'URL';
$_['entry_cron_last_run']	 			= 'Lần chạy gần nhất:';

// Trợ giúp
$_['help_total']			  			= 'Tổng giá trị đơn hàng phải đạt trước khi phương thức thanh toán này được kích hoạt.';
$_['help_debug']			  			= 'Bật gỡ lỗi sẽ ghi dữ liệu nhạy cảm vào tệp nhật ký. Bạn nên tắt trừ khi được yêu cầu khác.';
$_['help_transaction_method']  			= 'Phương thức giao dịch PHẢI được đặt là Thanh toán để cho phép thanh toán định kỳ.';
$_['help_card_save']			  		= 'Để người mua có thể lưu thông tin thẻ cho các lần thanh toán tiếp theo, bạn phải đăng ký MID TOKEN. Hãy liên hệ với bộ phận hỗ trợ khách hàng Opayo để bật hệ thống token cho tài khoản của bạn.';
$_['help_cron_token']	  				= 'Hãy đặt mã này dài và khó đoán.';
$_['help_cron_url']		  				= 'Đặt cron để gọi URL này.';

// Nút
$_['button_release']		  			= 'Phát hành';
$_['button_rebate']			  			= 'Hoàn tiền / giảm giá';
$_['button_void']			  			= 'Hủy';
$_['button_enable_recurring']			= 'Bật thanh toán định kỳ';
$_['button_disable_recurring']			= 'Tắt thanh toán định kỳ';

// Thành công
$_['success_save']		 				= 'Thành công: Bạn đã cập nhật Opayo!';
$_['success_release_ok']		  		= 'Thành công: Phát hành thành công!';
$_['success_release_ok_order']	  		= 'Thành công: Phát hành thành công, trạng thái đơn hàng đã cập nhật thành công - đã thanh toán!';
$_['success_rebate_ok']		  			= 'Thành công: Hoàn tiền thành công!';
$_['success_rebate_ok_order']	  		= 'Thành công: Hoàn tiền thành công, trạng thái đơn hàng đã cập nhật là đã hoàn tiền!';
$_['success_void_ok']			  		= 'Thành công: Hủy thành công, trạng thái đơn hàng đã cập nhật là đã hủy!';
$_['success_enable_recurring']			= 'Thành công: Thanh toán định kỳ đã được bật!';
$_['success_disable_recurring']			= 'Thành công: Thanh toán định kỳ đã được tắt!';

// Lỗi
$_['error_warning']          			= 'Cảnh báo: Vui lòng kiểm tra kỹ biểu mẫu để tìm lỗi!';
$_['error_permission']		  			= 'Cảnh báo: Bạn không có quyền chỉnh sửa phương thức thanh toán Opayo!';
$_['error_vendor']			  			= 'Yêu cầu nhập ID nhà cung cấp!';
