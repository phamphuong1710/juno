<div class="info_product">
	<div class="info_img">
		<img src="<?php echo $info[0]->anhsanpham ?>" alt="">
	</div>
	<div class="infomation">
		<div class="info_price">
			<b><?php echo $info[0]->tensanpham; ?></b>
			<p>Mã SP: <?php echo $info[0]->masanpham; ?></p>
			<b>
				<?php echo number_format($info[0]->giaban); ?><sup>đ</sup>
			</b>
		</div>
		<div class="buy">
			<a href="<?php echo base_url().'Product/insert_Cart/'.$info[0]->id; ?>">MUA NGAY <br>Mua online gia hàng tận nơi</a>
		</div>
	</div>
</div>