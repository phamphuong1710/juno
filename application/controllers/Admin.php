<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {
		public function index()
		{
			$this->myAdmin();
		}
		public function myAdmin()
		{	
			
			$this->load->view('admin/myAdmin.php');
		}
		public function form_add()
		{	
			$this->session;
			if(! $this->session->userdata('validated')){
            	redirect('Login');
        	}else{
				$this->load->model('Admin_model');
				$data['provider']=$this->Admin_model->getAllProvider();
				$data['category']=$this->Admin_model->getAllCategory();
				$this->load->view('admin/addProduct.php',$data);
			}
		}
		

		public function addProduct()
		{

				$this->load->model("Admin_model");
				$img['masp']=$this->input->post('masanpham');
				 $dir = "./image/";
				 if (!is_dir($dir.$img['masp']))
		        {
		            mkdir($dir.$img['masp'].'/');
		        } 
				foreach ($_FILES['anhsanpham']['name'] as $key => $value) {
					
					$lenght= stripos($_FILES['anhsanpham']['name'][$key], "_") ;
					$img['color']=substr($_FILES['anhsanpham']['name'][$key], 0,$lenght);
						
					$source_img = $_FILES['anhsanpham']['tmp_name'][$key];
	        	 	$path_img = $dir.$img['masp'].'/'.$_FILES['anhsanpham']['name'][$key]; 
	                move_uploaded_file($source_img,$path_img);
	                echo $img['name']=$_FILES['anhsanpham']['name'][$key];
	                $img['type']=$_FILES['anhsanpham']['type'][$key];
	                ($key==0) ? $img['active']=1 && $anh=$img['name'] : $img['active']=0 ;
	               $this->Admin_model->add_Image($img);
	               	
					
				}
				foreach ($_FILES['image']['name'] as $key => $value) {
					
					$lenght= stripos($_FILES['image']['name'][$key], "_") ;
					$img['color']=substr($_FILES['image']['name'][$key], 0,$lenght);
						
					$source_img = $_FILES['image']['tmp_name'][$key];
	        	 	$path_img = $dir.$img['masp'].'/'.$_FILES['image']['name'][$key]; 
	                move_uploaded_file($source_img,$path_img);
	                echo $img['name']=$_FILES['image']['name'][$key];
	                $img['type']=$_FILES['image']['type'][$key];
	                $img['active']=0 ;
	               $this->Admin_model->add_Image($img);
	               	
					
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
					'anhsanpham'=>$anh,
				];
				$this->Admin_model->add_Product($product);
				redirect('Admin/listProduct');
			
		}
		public function listProduct()
		{	
			if(! $this->session->userdata('validated')){
            	redirect('login');
        	}else{
				$this->load->model('Admin_model');
				$all=$this->Admin_model->getAllProduct();
				$category=$this->Admin_model->getAllCategory();
				foreach ($all as $key => $value) {
					foreach ($category as $k => $val) {
						if($value->id_danhmucsanpham==$val->id){
							$value->id_danhmucsanpham=$val->tendanhmuc;
						}
					}
				}
				// echo "<pre>";
				// var_dump($all);
				// die();
				$data['product']=$all;
				$this->load->view('admin/list_product',$data);
			}
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
			$product=$this->Admin_model->getProduct($id);
			$msp=$product[0]->masanpham;
			$image=$this->Admin_model->getImage($msp);
			// echo "<pre>";
			// var_dump($image);die();
			$img['masp']=$this->input->post('masanpham');
			 $dir = "./image/";
			 if (!is_dir($dir.$img['masp']))
            {
                mkdir($dir.$img['masp'].'/');
            } 
 
			foreach ($_FILES['upload']['name'] as $key => $value) {
				
				$lenght= stripos($_FILES['upload']['name'][$key], "_") ;
				$img['color']=substr($_FILES['upload']['name'][$key], 0,$lenght);
				$source_img = $_FILES['upload']['tmp_name'][$key];
        	 	$path_img = $dir.$img['masp'].'/'.$_FILES['upload']['name'][$key]; 
                move_uploaded_file($source_img,$path_img);
                echo $img['name']=$_FILES['upload']['name'][$key];
                $img['type']=$_FILES['upload']['type'][$key];
                ($key==0) ? $img['active']=1 && $anh=$img['name'] : $img['active']=0 ;
               	$this->Admin_model->updateImage($img,$image[0]->id);
               	$image[0]->id++;

				
			}
			foreach ($_FILES['image']['name'] as $key => $value) {
					
					$lenght= stripos($_FILES['image']['name'][$key], "_") ;
					$img['color']=substr($_FILES['image']['name'][$key], 0,$lenght);
						
					$source_img = $_FILES['image']['tmp_name'][$key];
	        	 	$path_img = $dir.$img['masp'].'/'.$_FILES['image']['name'][$key]; 
	                move_uploaded_file($source_img,$path_img);
	                echo $img['name']=$_FILES['image']['name'][$key];
	                $img['type']=$_FILES['image']['type'][$key];
	                $img['active']=0 ;
	               $this->Admin_model->updateImage($img,$image[6]->id);
	               $image[6]->id++;
	               	
					
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
				'anhsanpham'=>$anh,
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
