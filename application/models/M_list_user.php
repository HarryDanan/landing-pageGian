<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_list_user extends CI_Model
{
	public function select_all_user()
	{
		$sql = "SELECT * FROM user";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all()
	{
		$sql = "SELECT * FROM user";

		$data = $this->db->query($sql);

		return $data->result();
	}

	private $_table = "user";

	public $id;
	public $idKop;
	public $username;
	public $password;
	public $nama;

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
		$this->idKop = $post['idKop'];
		$this->username = $post['username'];
		$this->password = $post['password'];
		$this->nama = $post['nama'];
		$this->db->insert($this->_table, $this);
	}

	public function updatedata()
	{
		$post = $this->input->post();
		$this->idKop = $post['idKop'];
		$this->username = $post['username'];
		$this->password = $post['password'];
		$this->nama = $post['nama'];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function hapus($id)
	{
		return $this->db->delete($this->_table, array('id' => $id));
	}

	public function total_rows() {
		$data = $this->db->get('user');

		return $data->num_rows();
	}

}
