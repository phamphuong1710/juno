<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {
		public function index()
		{
			$this->load->view('admin/login/form_login.php');
		}
		public function myAdmin()
		{	
			
			$this->load->view('admin/home_admin.php');

		}
		public function form_add()
		{
			$this->load->view('admin/layouts/form_add.php');
		}
		public function login()
		{  
			
			$this->load->model('Admin_model');
			if ($_SERVER["REQUEST_METHOD"]==="POST"){
				$name=$_POST['name'];
				$password=$_POST['password'];
				$user=new Admin_model();
				$checkLogin=$user->checkLogin($name,$password);
				if (!$checkLogin) {
					$error="Đăng nhập lỗi, tài khoản học mật khẩu không đúng";
					redirect('Admin/index');
				}
				else{
					$this->session;
					$_SESSION['username'] = $username;
					$_SESSION['current_user'] = $checkLogin;
					redirect('Admin/myAdmin');  
			
				}
			}
		}

		public function addProduct()
		{
			$this->load->model("Admin_model");

				if($_FILES['upload']['error'] >0){
					echo "upload file bị lỗi";
					redirect('Admin/form_add');
				}
				else{
					if($_FILES['upload']['type'] == "image/jpeg" || $_FILES['upload']['type'] =="image/png"){
						move_uploaded_file($_FILES['upload']['tmp_name'],'./image/'.$_FILES['upload']['name']);
						$img=base_url().'image/'.$_FILES['upload']['name'];
						echo "<img src= '$img' >";
						var_dump($_FILES['upload']);
					}
				}
			$product=[
				'tensanpham'=>$_POST['tensanpham'],
				'masanpham'=>$_POST['masanpham'],
				'id_danhmucsanpham'=>$_POST['id_danhmucsanpham'],
				'gianhap'=>$_POST['gianhap'],
				'kieudang'=>$_POST['kieudang'],
				'mausac'=>$_POST['mausac'],
				'chatlieu'=>$_POST['chatlieu'],
				'kichco'=>$_POST['kichco'],
				'idnhacungcap'=>$_POST['idnhacungcap'],
				'giaban'=>$_POST['giaban'],
				'top'=>isset($_POST['top']) ? $_POST['top'] : '',
				'anhsanpham'=>$img
			];
			$this->Admin_model->add_Product($product);
			redirect('Admin/listProduct');
		}
		public function listProduct()
		{	
			
				$this->load->model('Admin_model');
				$all=$this->Admin_model->getAllProduct();
				$data['product']=$all;
				$this->load->view('admin/list_product',$data);
		}
		public function deleteProduct($id)
		{
			$this->load->model('Admin_model');
			$this->Admin_model->deleteProduct($id);
			redirect('Admin/listProduct');
		}
		public function editProduct($id)
		{
			$this->load->model('Admin_model');
			$data['product']=$this->Admin_model->getProduct($id);
			// var_dump($data);
			$this->load->view('admin/form_edit.php',$data);
		}
		public function updateProduct($id)
		{
			$this->load->model('Admin_model');
			if($_FILES['upload']['error'] >0){
					echo "upload file bị lỗi";
					redirect('Admin/form_add');
				}
				else{
					if($_FILES['upload']['type'] == "image/jpeg" || $_FILES['upload']['type'] =="image/png"){
						move_uploaded_file($_FILES['upload']['tmp_name'],'./image/'.$_FILES['upload']['name']);
						$img=base_url().'image/'.$_FILES['upload']['name'];
						echo "<img src= '$img' >";
						var_dump($_FILES['upload']);
					}
				}
			$product=[
				'tensanpham'=>$_POST['tensanpham'],
				'masanpham'=>$_POST['masanpham'],
				'id_danhmucsanpham'=>$_POST['id_danhmucsanpham'],
				'gianhap'=>$_POST['gianhap'],
				'kieudang'=>$_POST['kieudang'],
				'mausac'=>$_POST['mausac'],
				'chatlieu'=>$_POST['chatlieu'],
				'kichco'=>$_POST['kichco'],
				'idnhacungcap'=>$_POST['idnhacungcap'],
				'giaban'=>$_POST['giaban'],
				'top'=>isset($_POST['top']) ? $_POST['top'] : '',
				'anhsanpham'=>$img
			];

			$this->Admin_model->updateProduct($product,$id);
			redirect('Admin/listProduct');
		}
		public function listProvider()
		{
			$this->load->model('Admin_model');
			$data['product']=$this->Admin_model->getAllProvider();
			// var_dump($data);
			$this->load->view('admin/list_provider.php',$data);
		}
		public function deleteProvider($id)
		{
			$this->load->model('Admin_model');
			$this->Admin_model->deleteProvider($id);
			redirect('Admin/listProvider');
		}
		public function editProvider($id)
		{
			
			$this->load->model('Admin_model');
			$data['provi']=$this->Admin_model->getProvider($id);
			$this->load->view('admin/edit_provi.php',$data);
		}
		public function updateProvider($id)
		{
			$this->load->model('Admin_model');
			$provi=[
				'tennhacungcap'=>$_POST['tennhacungcap'],
				'diachi'=>$_POST['diachi'],
				'sodienthoai'=>$_POST['sodienthoai'],
					];
			$this->Admin_model->updateProvider($provi,$id);
			redirect('Admin/listProvider');	
		}
		public function add_provider()
		{
			$this->load->view('admin/add_provider.php');
		}
		public function addProvider()
		{
			$this->load->model("Admin_model");
			$provi=[
				'tennhacungcap'=>$_POST['tennhacungcap'],
				'diachi'=>$_POST['diachi'],
				'sodienthoai'=>$_POST['sodienthoai'],
					];
			$this->Admin_model->addProvider($provi);
			redirect('Admin/listProvider');
		}
	}
?>
