<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function index()
	{ 
		$this->load->view('home');
	}
	public function getProduct($top='hot',$_top='new')
	{
		$this->session;
		$this->load->model("Product_model");
		$data['product_hot']=$this->Product_model->getProduct($top);
		$data['product_new']=$this->Product_model->getProduct($_top);
		if (isset($_SESSION['cart']) && $_SESSION['cart']!=NULL) {
			$data['cart']=$_SESSION['cart'];
		}
		$this->load->view('home',$data);
	}
	public function infoProduct($id)
	{ 
		$this->load->model('Product_model');
		$this->session;
		// echo "<pre>";
		$data['info']=$this->Product_model->getInfoProduct($id);
		$msp=$data['info'][0]->masanpham;
		
		$id_danhmuc=$data['info'][0]->id_danhmucsanpham;
		$product=$this->Product_model->product_nav($id_danhmuc);
		$tol=count($product);
		for ($i=0; $i <$tol ; $i++) { 
			if ($product[$i]->id!=$id) {
				$data['more'][]=$product[$i];
				if (count($data['more'])>5) {
					$i=$tol;
				}
			}
		}
		$data['img']=$this->Product_model->getImage($msp);
		// var_dump($data['more']);
		// die();
		$i=6;
		$j=1;

		foreach ($data['img'] as $key => $value) {
			if ($key<$i) {
				$data['img'.$j][]=$data['img'][$key];	
			}
			else{
				$i=$i+6;
				$j++;
				$data['img'.$j][]=$data['img'][$key];
			}
		}
		$data['j']=$j;
		// var_dump($data);
		
		if (isset($_SESSION['cart']) && $_SESSION['cart']!=NULL) {
			$data['cart']=$_SESSION['cart'];
		}
		$this->load->view('info_product.php',$data);
	}
	
	public function insert_Cart($id)
	{
		$this->session;
		$this->load->model('Product_model');
		$all=$this->Product_model->getAllProduct();
		$data['product']=$all;
		$newproduct=[];
		// var_dump($data);
		foreach ($data as $key => $value) {
			// var_dump($value);
			foreach ($value as $key => $val) {
				// var_dump($val);
				$newproduct[$val->id]=$val;
			}
		}
		// echo '<pre>';
		// var_dump($newproduct);
		if (!isset($_SESSION['cart']) || $_SESSION['cart']==NULL) {
			$newproduct[$id]->quantity=1;
			$_SESSION['cart'][$id]=$newproduct[$id];
		}
		else{
			if(array_key_exists($id, $_SESSION['cart'])){
				$_SESSION['cart'][$id]->quantity=$_SESSION['cart'][$id]->quantity+1;
			}
			else{
				$newproduct[$id]->quantity=1;
				$_SESSION['cart'][$id]=$newproduct[$id];
			}
		}
		$data['cart']=$_SESSION['cart'];
		$this->load->view('cart',$data);
		redirect('Product/Cart');
	}
	public function Cart()
	{
		$this->session;
		$this->load->model('Product_model');
		if (isset($_SESSION['cart']) && $_SESSION['cart']!=NULL) {
			$data['cart']=$_SESSION['cart'];
			$this->load->view('cart',$data);
		}
		else{
			$this->load->view('cart');
		}
		
	}
	public function delete_Product($id)
	{
		$this->session;
		$this->load->model('Product_model');
		unset($_SESSION['cart'][$id]);
		redirect('Product/Cart');
	}
	public function update()
	{
		$this->load->model('Product_model');
		$this->session;
		// var_dump($_POST["quantity"]);
		foreach ($_POST["quantity"] as $key => $value) {
			$_SESSION['cart'][$key]->quantity=$value;
			var_dump($value);
			if($value<=0){
				unset($_SESSION['cart'][$key]);
			}
		}

		redirect('Product/Cart');
	}
	public function checkouts()
	{
		$this->load->view('order');
	}
	public function product_nav($id)
	{
		$this->load->model('Product_model');
		$data['product']=$this->Product_model->product_nav($id);
		$data['danhmuc']=$this->Product_model->danhmuc();
		$this->load->view('product_nav',$data);
	}
	public function hoadon()
	{
		$this->load->model('Product_model');
		$this->session;
		// var_dump($_SESSION['cart']);die();
		$price=0;
		foreach ($_SESSION['cart'] as $key => $value) {
			$msp[]=$value->masanpham;
			$soluong[]=$value->quantity;
			$price=$price+$value->quantity*$value->giaban;
		}
		$info=[
			'hoten'=>$_POST['name'],
			'email'=>$_POST['email'],
			'sodienthoai'=>$_POST['mobile'],
			'diachi'=>$_POST['address'],
			'tinh'=>$_POST['province'],
			'quan/huyen'=>$_POST['county'],
			'phuong/xa'=>$_POST['ward'],
			'phuongthucthanhtoan'=>$_POST['pay'],
			'mahoadon'=>time(),
			'ngay'=>date('Y-m-d'),
			'gio'=>date('H:m:s'),
			];
		$info_cart=[
			'mahoadon'=>time(),
			'masanpham'=>implode('-', $msp),
			'soluong'=>implode('-', $soluong),
			'tongtien'=>$price,
				];
		$this->Product_model->hoadon($info);
		$this->Product_model->chitiethoadon($info_cart);
		echo "BẠN ĐÃ ĐẶT HÀNG THÀNH CÔNG";
	}
	// public function more_product($id)
	// {	
	// 	echo "<pre>";
	// 	$this->load->model('Product_model');
	// 	$product=$this->Product_model->getInfoProduct($id);
	// 	var_dump($product);
	// }

}
?>