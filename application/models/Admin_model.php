<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function checkLogin($user,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		$this->db->where('password', $password);
		$query = $this->db->get();
		return $query->result();
	}
	public function add_Product($product)
	{
		return $this->db->insert("sanpham",$product);
	}
	public function getAllProduct()
	{
		$query=$this->db->get('sanpham');
		return $query->result();
	}
	public function getProduct($id)
	{
		$this->db->select('*');
		$this->db->from('sanpham');
		$this->db->where('id', $id);
		$query=$this->db->get();
		 return $query->result();
	}
	public function deleteProduct($id)
	{
		return $this->db->delete('sanpham',['id'=>$id]);
	}
	public function updateProduct($product,$id)
	{
		return $this->db->update('sanpham',$product,['id'=>$id]);
	}
	public function getAllProvider()
	{
		$query=$this->db->get('nhacungcap');
		 return $query->result();
	}
	
	public function getProvider($id)
	{
		$this->db->select('*');
		$this->db->from('nhacungcap');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}
	public function deleteProvider($id)
	{
		return $this->db->delete('nhacungcap',['id'=>$id]);
	}
	public function updateProvider($provi,$id)
	{
		return $this->db->update('nhacungcap',$provi,['id'=>$id]);
	}
	public function addProvider($provider)
	{
		return $this->db->insert("nhacungcap",$provider);
	}
	public function getAllCategory($id)
	{
		$query=$this->db->get('danhmuc');
		return $query->result();
	}
}
?>