 <?php 	$this->load->view('admin/layouts/header_admin.php') ?>
<?php $this->load->view('admin/layouts/side_bar.php');  ?> 
<div class="container">
	<div class="col-md-7 col-md-offset-3">
		<form action="<?php echo base_url().'Admin/updateProduct/'.$product[0]->id ?>" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">
			<legend>Thông tin Sản Phẩm</legend>
		
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Tên sản Phẩm
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Tên sản Phẩm" name="tensanpham" value="<?php echo $product[0]->tensanpham; ?>">
				</div>
			</div>
		
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Mã sản Phẩm
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Mã sản Phẩm" name="masanpham" value="<?php echo $product[0]->masanpham; ?>">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					ID danh mục sản phẩm
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="ID danh mục sản phẩm" name="id_danhmucsanpham" value="<?php echo $product[0]->id_danhmucsanpham; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">	
					Giá nhập
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Giá nhập" name="gianhap" value="<?php echo $product[0]->gianhap; ?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Kiểu dáng
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Kiểu dáng" name="kieudang" value="<?php echo $product[0]->kieudang; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Chất liệu
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Chất liệu" name="chatlieu" value="<?php echo $product[0]->chatlieu; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Màu sắc
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Màu sắc" name="mausac" value="<?php echo $product[0]->mausac; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Kích cỡ
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Kích cỡ" name="kichco" value="<?php echo $product[0]->kichco; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">ID nhà cung cấp</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="ID nhà cung cấp" name="idnhacungcap" value="<?php echo $product[0]->idnhacungcap; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Giá bán
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Giá bán" name="giaban" value="<?php echo $product[0]->giaban; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Top
				</label>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control"  placeholder="Top" name="top" value="<?php echo $product[0]->top; ?>">
				</div>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-3">
				<input type="file" name="upload" class="btn btn-danger">
			</div>
			
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
				<button type="submit" class="btn btn-primary" name="submit">ADD</button>
			</div>
			
		</form>
	</div>
</div>
</body>
</html>