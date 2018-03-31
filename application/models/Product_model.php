<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function getAllProduct()
	{
		$query=$this->db->get('sanpham');
		return $query->result();
	}
	public function getAllImage()
	{
		$query=$this->db->get('anhsp');
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
	public function getImage($id)
	{
		$this->db->select('*');
		$this->db->from('anhsp');
		$this->db->where('masp', $id);
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
	public function getMoreProduct($id_danhmuc)
	{
		$this->db->select('*');
		$this->db->from('sanpham');
		$this->db->where('id_danhmucsanpham', $id_danhmuc);
		// $this->db->limit(5,1);
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
	public function hoadon($info)
	{
		return $this->db->insert('hoadon',$info);
	}
	public function chitiethoadon($info)
	{
		return $this->db->insert('chitiethoadon',$info);
	}
}
