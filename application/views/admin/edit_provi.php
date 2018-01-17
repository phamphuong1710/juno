 <?php 	$this->load->view('admin/layouts/header_admin.php') ?>
<?php $this->load->view('admin/layouts/side_bar.php'); ?> 
<div class="container">
	<div class="col-md-7 col-md-offset-3">
		<form action="<?php echo base_url().'Admin/updateProvider/'.$provi[0]->id ?>" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">
			<legend>Thông tin nhà cung cấp</legend>
		
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Tên nhà cung cấp
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Tên nhà cung cấp" name="tennhacungcap" value="<?php echo $provi[0]->tennhacungcap; ?>">
				</div>
			</div>
		
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Địa chỉ
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Địa chỉ" name="diachi" value="<?php echo $provi[0]->diachi; ?>">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Số điện thoại
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Số điện thoại" name="sodienthoai" value="<?php echo $provi[0]->sodienthoai; ?>">
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
				<button type="submit" class="btn btn-primary" name="submit">Update</button>
			</div>
			
		</form>
	</div>
</div>
</body>
</html>