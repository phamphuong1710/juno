<?php 
	$this->load->view('site/header.php');
	// echo "<pre>";
	// var_dump($danhmuc);
?>
<div class="product_nav">
	<div class="container">
		<?php foreach ($product as $key => $value) {?>
			<div class="product">
				<a href="<?php echo base_url().'Product/infoProduct/'.$value->id ?>">
					<img src="<?php echo $value->anhsanpham ?>" alt="">	
					<p><?php echo $value->masanpham; ?></p>
				</a>
				
				<b><?php echo number_format($value->giaban); ?><sup>đ</sup></b>
			</div>
		<?php } ?>
	</div>
</div>
<?php 
	$this->load->view('site/testimonials.php'); 
	$this->load->view('site/footer.php');
?>