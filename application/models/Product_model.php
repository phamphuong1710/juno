<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function getAllProduct()
	{
		$query=$this->db->get('sanpham');
		return $query->result();
	}
	public function getProduct($top)
	{
		$this->db->select('*');
		$this->db->from('sanpham');
		$this->db->where('top', $top);
		$query = $this->db->get();
		return $query->result();
	}	
	public function getInfoProduct($id)
	{
		$this->db->select('*');
		$this->db->from('sanpham');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}
	public function product_nav($id)
	{
		$this->db->select('*');
		$this->db->from('sanpham');
		$this->db->where('id_danhmucsanpham', $id);
		$query = $this->db->get();
		return $query->result();
	}
	public function danhmuc()
	{
		$this->db->select('*');
		$this->db->from('danhmuc');
		$query = $this->db->get();
		return $query->result();
	}
}
