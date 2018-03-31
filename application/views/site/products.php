<!-- <?php var_dump($info); ?> -->
<div class="info_product">
	<div class="info_img">
		<img src="<?php echo base_url().'image/'.$info[0]->masanpham.'/'.$img1[0]->name ?>" alt="" class='img' id='img'>
		<ul>
			<?php foreach ($img1 as $key => $value) {?>
				<li  onclick="getElementById('img').src = '<?php echo base_url().'image/'.$info[0]->masanpham.'/'.$value->name; ?>' ; ">
					<img src="<?php echo base_url().'image/'.$info[0]->masanpham.'/'.$value->name ?>" >
				</li>
			<?php } ?>
		</ul>
	</div>
	<div class="infomation">
		
		<div class="info_price">
			<b><?php echo $info[0]->tensanpham; ?></b>
			<p>Mã SP: <?php echo $info[0]->masanpham; ?></p>
			<p style="color: #e74446; font-size:18px; ">
				<?php echo number_format($info[0]->giaban); ?><sup>đ</sup>
			</p>
			<table>
				<tr>
					<td>Kiểu dáng</td>
					<td><?php echo $info[0]->kieudang ?></td>
				</tr>
				<tr>
					<td>Chất liệu</td>
					<td><?php echo $info[0]->chatlieu ?></td>
				</tr>
				<tr>
					<td>Màu sắc</td>
					<td><?php echo $info[0]->kichco ?></td>
				</tr>
				<tr>
					<td>Kích cỡ</td>
					<td><?php echo $info[0]->mausac ?></td>
				</tr>
			</table>
			<p>Mời bạn chọn màu yêu thích</p>
			<ul>

				<?php for($i=1;$i<=$j;$i++) { ?>
					<?php $x='img'.$i; ?>
					<li onclick="getElementById('img').src = '<?php echo base_url().'image/'.$info[0]->masanpham.'/'.$$x[0]->name ?>'">
					
						<img src="<?php echo base_url().'image/'.$info[0]->masanpham.'/'.$$x[1]->name ?>" alt="">
					</li>
				<?php } ?>
			</ul>
			
		</div>
		<div class="buy">
			<a href="<?php echo base_url().'Product/insert_Cart/'.$info[0]->id; ?>">
				<span> MUA NGAY </span><br>Mua online gia hàng tận nơi</a>
		</div>
	</div>
</div>
<div class="more_product">
	<h3>Gợi ý các sản phẩm nên mua cùng bộ</h3>
	<?php foreach ($more as $key => $value) {?>
		<div class="more" >
			<a href="<?php echo base_url().'Product/infoProduct/'.$value->id ?>">
				<img src="<?php echo base_url().'image/'.$value->masanpham.'/'.$value->anhsanpham ?>" alt="">
				<p></p>	
				<span class="tooltiptext">
					<?php echo $value->tensanpham ?>
				</span>
				<p><?php echo $value->masanpham; ?></p>
			</a>
			
			<b><?php echo number_format($value->giaban); ?><sup>đ</sup></b>
		</div>
	<?php } ?>
</div>
<!-- <?php var_dump($more); ?> -->