<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_list_admin extends CI_Model
{
	public function select_all_admin()
	{
		$sql = "SELECT * FROM admin";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all()
	{
		$sql = "SELECT * FROM admin";

		$data = $this->db->query($sql);

		return $data->result();
	}

	private $_table = "admin";

	public $id;
	public $username;
	public $password;
	public $nama;
	public $role;
	public $tipe_bidang;

	public function rules()
	{
		return [
			[
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required'
			],
		];
	}

	public function getAll()
	{
		$this->db->order_by('id');
		return $this->db->get($this->_table)->result();
	}

	public function getByID($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}

	public function simpan()
	{

		$post = $this->input->post();
		// $this->id = uniqid();
		$this->username = $post['username'];
		$this->password = $post['password'];
		$this->nama = $post['nama'];
		$this->role = $post['role'];
		$this->tipe_bidang = $post['tipe_bidang'];
		$this->db->insert($this->_table, $this);
	}

	public function updatedata()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->username = $post['username'];
		$this->password = $post['password'];
		$this->nama = $post['nama'];
		$this->role = $post['role'];
		$this->tipe_bidang = $post['tipe_bidang'];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function hapus($id)
	{
		return $this->db->delete($this->_table, array('id' => $id));
	}

	public function total_rows() {
		$data = $this->db->get('admin');

		return $data->num_rows();
	}
	public function total_admin_super() {
		$sql = "SELECT * FROM admin WHERE role = 'Admin Super'";

		$data = $this->db->query($sql);

		return $data->num_rows();
	}
	public function total_admin_bidang() {
		$sql = "SELECT * FROM admin WHERE role = 'Admin Bidang'";

		$data = $this->db->query($sql);

		return $data->num_rows();
	}

}
