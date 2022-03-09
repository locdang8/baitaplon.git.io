<?php 


	if(isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
		echo "Bạn đã đặt đơn hàng thành công!!";	
	} else {
		echo "Đặt hàng không thành công";
	}
	
?>