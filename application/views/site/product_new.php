<div class="product_new">	
	<div class="container">
		<div class="row">
			<h3>TOP SẢN PHẨM MỚI NHẤT TUẦN NÀY</h3>
			<div class="col-md-4 col-md-offset-5">
				<hr>
			</div>
		</div>
		<div class="top_new">
			<div class="row no-padding">
				<?php foreach ($product_new as $key => $value) {?>
					<div class="new">
						<a href="<?php echo base_url().'Product/infoProduct/'.$value->id ?>">
							<img src="<?php echo base_url().'image/'.$value->masanpham.'/'.$value->anhsanpham ?>" alt="">
							<span class="tooltiptext">
								<?php echo $value->tensanpham ?>
							</span>	
							<p><?php echo $value->masanpham; ?></p>
						</a>
						
						<b><?php echo number_format($value->giaban); ?><sup>đ</sup></b>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="see_more">
			Mời bạn <b><a href="">xem thêm các mẫu mới khác </a></b>khác
		</div>
	</div>
</div>