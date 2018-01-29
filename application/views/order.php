<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JUNO-Thanh toán</title>
	<link rel="stylesheet" href="<?php echo base_url().'public/css/order.css' ?>">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="left">
			<div class="header">
				<h2>JUNO</h2>
				<a href="<?php echo base_url().'Product/Cart' ?>">
					Giỏ hàng
				</a>
				
			</div>	
			<div class="form_content">
				<form action="<?php echo base_url().'Product/hoadon' ?>" method="POST" role="form">
					<h3>Thông tin giao hàng</h3>
					<input type="text" class="form-control input-lg"  placeholder="Họ và tên" name="name">
					<input type="email" class="form-control input-lg email" placeholder="Email" name="email" >
					<input type="tel" class="form-control input-lg mobile" placeholder="Số điện thoại" name="mobile" >
					<input type="text" class="form-control input-lg" placeholder="Địa chỉ" name="address">
					<input type="text" class="form-control input-lg province" placeholder="Tỉnh" name="province">
					<input type="text" class="form-control input-lg county" placeholder="Quận/Huyện" name="county">
					<input type="text" class="form-control input-lg ward " placeholder="Phường/Xã" name="ward">
					<span>Phương thức vận chuyển</span>	
					<div class="radio">
						<input type="radio" name='transport' checked="checked">Miễn phí vận chuyển toàn quốc</p>
					</div>
					<span>Phương thức Thanh toán</span>
					<div class="radio">
						<input type="radio" name='pay' value="cod" checked="checked">
						Thanh toán khi nhận hàng (COD)
					</div>
					<div class="radio">
						<input type="radio" name='pay' value="atm">
							Thanh toán online qua cổng Napas bằng thẻ ATM nội địa
					</div>
					<div class="radio">
						<input type="radio" name='pay' value="cart">
							Thanh toán online qua cổng Napas bằng thẻ Visa/Master Card
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
				
			
		</div>
		<div class="right">
			
		</div>
	</div>
</body>
</html>