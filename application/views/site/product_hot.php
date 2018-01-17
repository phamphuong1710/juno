<div class="product_hot">	
	<div class="container">
		<div class="row">
			<h3>TOP 05 SẢN PHẨM HOT NHẤT TUẦN</h3>
			<div class="col-md-4 col-md-offset-5">
				<hr>
			</div>
		</div>
		<div class="top_hot">
			<div class="row no-padding">
				<?php foreach ($product_hot as $key => $value) {?>
					<div class="hot">
						<a href="<?php echo base_url().'Product/infoProduct/'.$value->id ?>">
							<img src="<?php echo $value->anhsanpham ?>" alt="">	
							<p><?php echo $value->masanpham; ?></p>
						</a>
						
						<b><?php echo number_format($value->giaban); ?><sup>đ</sup></b>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="see_more">
			Mời bạn <b><a href="">xem thêm sản phẩm hot </a></b>khác
		</div>
	</div>
</div>