
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('site/head.php'); ?>
<body>
	<div class="header">
		<div class="hidden-sm hidden-sx">
				<div class="row">
					<div class="col-md-6" >
						<div class="col-md-4">
							<div class="logo">
								<a href="<?php echo base_url().'Product/getProduct' ?>"><img src="https://theme.hstatic.net/1000003969/1000323463/14/logo.png" ></a>
							</div>
						</div>
					
						<div class="col-md-8">
							<form action="" method="POST" class="seach">
								<input type="text" name="seach" placeholder="Bạn cần tìm gì?" class="input">
								<button type="submit" name="submit" class="submit"><span class="glyphicon glyphicon-search" ></span></button>
							</form>
						</div>
					</div>
					<div class="col-md-6 ">
						<div class="col-md-4">
							<div class="phone">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								<span>Bán hàng: <b>1800 1162</b></span>
							</div>
						</div>
						<div class="col-md-5">
							<div class="address">
								
								<a href="">
									<i class="fa fa-building"></i>
									<span>Xem hệ thống <b>67</b> cửa hàng</span>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="cart">
								<i class="fa fa-shopping-bag"></i>
								<a href="<?php echo base_url().'Product/Cart' ?>">
									<span>
										<?php $this->load->view('site/toltal.php') ?>
										Sản Phẩm
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="navigation">
		<div class="container">
			<ul>
				<li class="menu">
					<a href="<?php echo base_url().'Product/product_Nav/'.'1' ?>" class="dropbtn">Túi Sách</a>
					<div class="menu-content">
				      <a href="">Túi Cỡ Lớn</a>
				      <a href="">Túi cỡ Trung</a>
				      <a href="">Túi nhỏ</a>
				      <a href="">Ví cầm tay</a>
				      <a href="">Ba lô thời trang</a>
				    </div>
				</li>
				<li class="menu">
					<a href="<?php echo base_url().'Product/product_Nav/'.'2'?>" class="dropbtn">Giày Cao Gót</a>
					<div class="menu-content">
					<a href="#">Cao 5cm</a>
					<a href="#">Cao 7cm</a>
					<a href="#">Cao 9cm</a>
					<a href="#">Cao 11cm</a>
					</div>
				</li>
				<li class="menu">
					<a href="<?php echo base_url().'Product/product_Nav/'.'3' ?>" class="dropbtn">Giày Xăng Đan</a>
					<div class="menu-content">
						<a href="#">Cao 5cm</a>
						<a href="#">Cao 7cm</a>
						<a href="#">Cao 9cm</a>
						<a href="#">Cao 11cm</a>
						<a href="">Sandal đế xuồng</a>
					</div>
				</li>
				<li class="menu">
				    <a href="<?php echo base_url().'Product/product_Nav/'.'4' ?>" class="dropbtn">Giày Búp Bê</a>
				    <div class="menu-content">
				      <a href="">Mũi tròn</a>
				      <a href="">Mũi nhọn</a>
				      <a href="">Giày có trang trí</a>
				    </div>
				</li>
				<li class="menu">
					<a href="" class="dropbtn">Dép Guốc</a>
				</li>
				<li class="menu">
					<a href="" class="dropbtn">Giày Sneaker</a>
				</li>
			    <li class="menu">
				    <a href="" class="dropbtn">Giày Boots</a>
			  	</li>
			    <li class="menu">
				    <a href="" class="dropbtn">Bộ Sưu Tập Mới</a>
			  	</li>
			    <li class="menu">
				    <a href="" class="dropbtn">Đại tiệc combo</a>
			  	</li>
				<li class="menu">
					<a href="" class="dropbtn">Tin Thời Trang</a>
				</li>
			</ul>
		</div>
	</div>
	
