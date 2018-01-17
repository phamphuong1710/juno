<?php 
	$this->load->view('admin/layouts/header_admin.php');
	$this->load->view('admin/layouts/side_bar.php');
	// var_dump($product);
 ?>
 <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-md-offset-2">
 	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Tên nhà cung cấp</th>
				<th>Địa chỉ</th>
				<th>Số điện thoại</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($product as $key => $value) {?>
				<tr>
					<td><?php echo $value->tennhacungcap; ?></td>
					<td><?php echo $value->diachi; ?></td>
					<td><?php echo $value->sodienthoai; ?></td>
					<td>
						<a href="<?php echo base_url().'Admin/editProvider/'.$value->id ?>">
							<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						</a>
					</td>
					<td>
						<a href="<?php echo base_url().'Admin/deleteProvider/'.$value->id ?>">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
				
			<?php } ?>
			<tr>
					<td  colspan="5">
						<a href="<?php echo base_url().'Admin/add_provider' ?>">Thêm nhà cung cấp</a>
					</td>
				</tr>
		</tbody>
	</table>
 </div>
