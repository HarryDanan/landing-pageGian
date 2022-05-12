<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	private $_table = "admin";

	public function login($user, $pass)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $user);
		$this->db->where('password', md5($pass));

		$data = $this->db->get();
		
		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}
	public function login_koperasi($user, $pass)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);

		$data = $this->db->get();
		
		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}
	public function select_all()
	{
		$sql = "SELECT * FROM koperasi";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function registrasi()
	{

		$post = $this->input->post();
		// $this->id = uniqid();
		$this->username = $post['username'];
		$this->password = $post['password'];
		$this->nama = $post['nama'];
		$this->role = $post['role'];
		$this->db->insert($this->_table, $this);
	}
}
