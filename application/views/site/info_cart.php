<div class="info_cart">
	<div class="container">
		<div class="row">
			<h4>BẠN ĐANG CÓ <?php $this->load->view('site/toltal.php') ?> SẢN PHẨM TRONG GIỎ</h4>
		</div>
		<div class="row">
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 no-padding">
				<form action="<?php echo base_url().'Product/update' ?>" method="POST" role="form">
					<?php $price=0 ?>
					<?php if (isset($cart)&& $cart!=NULL) {?>
						<?php foreach ($cart as $key => $value) {?>
							<div class="product_cart">
								<div class="col-xs-2 col-sm-2 col-md-2 no-padding">
									<img src="<?php echo $value->anhsanpham; ?>" alt="">
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 no-padding">
									<b><?php echo $value->tensanpham; ?></b>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 no-padding">
									<input type="text" name="quantity[<?php echo $key; ?>]" value="<?php echo $value->quantity; ?>">
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 no-padding">
									<b class="text-danger">
										<?php 
											$price=$value->giaban*$value->quantity;
											echo number_format($price);
											
										 ?><sup>đ</sup>
											
									</b>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
									<a href="<?php echo base_url().'Product/delete_Product/'.$value->id; ?>">
										<span class="glyphicon glyphicon-remove" aria-hidden="true">	
										</span>
									</a>
								</div>
							</div>
						<?php }  ?>
						<button type="submit" class="btn btn-danger " name="submit">
							Update
						</button>
					<?php }  ?>
					
				</form>
			</div>
			<?php $tol_price=0; ?>
			<?php if (isset($cart) && $cart!=NULL){ ?>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="toltal_price">
						<b>Tổng cộng: </b> 
						<b class="text-danger">
							
							<?php 
								foreach ($cart as $key => $value) {
									$tol_price=$value->quantity*$value->giaban+$tol_price;
								 } 
								 echo number_format($tol_price);
							?>
							<sup>đ</sup>
						</b>
					</div>
					<div class="pay">
						<a href="<?php echo base_url().'Product/checkouts' ?>">THANH TOÁN</a>
					</div>
				</div>	
			<?php } ?>
		</div>
	</div>
</div>