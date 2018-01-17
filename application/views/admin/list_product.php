<?php 
	$this->load->view('admin/layouts/header_admin.php');
	$this->load->view('admin/layouts/side_bar.php');
	// var_dump($product);
 ?>
 <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-md-offset-2">
 	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Tên SP</th>
				<th>Mã SP</th>
				<th>Ảnh SP</th>
				<th>Giá nhập</th>
				<th>Kiểu dáng</th>
				<th>Chất liệu</th>
				<th>Màu Sắc</th>
				<th>Kích cỡ</th>
				<th>ID DM</th>
				<th>ID nhà CC</th>
				<th>Giá bán</th>
				<th>Top</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($product as $key => $value) {?>
				<tr>
					<td><?php echo $value->tensanpham; ?></td>
					<td><?php echo $value->masanpham; ?></td>
					<td>
						<img src="<?php echo $value->anhsanpham; ?>">
					</td>
					<td><?php echo $value->gianhap; ?></td>
					<td><?php echo $value->kieudang; ?></td>
					<td><?php echo $value->chatlieu; ?></td>
					<td><?php echo $value->mausac; ?></td>
					<td><?php echo $value->kichco; ?></td>
					<td><?php echo $value->id_danhmucsanpham; ?></td>
					<td><?php echo $value->idnhacungcap; ?></td>
					<td><?php echo $value->giaban; ?></td>
					<td><?php echo $value->top; ?></td>
					<td>
						<a href="<?php echo base_url().'Admin/editProduct/'.$value->id ?>">
							<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						</a>
					</td>
					<td>
						<a href="<?php echo base_url().'Admin/deleteProduct/'.$value->id ?>">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
 </div>
