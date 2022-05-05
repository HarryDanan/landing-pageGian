<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_koperasi extends CI_Model
{
	public function select_all_koperasi()
	{
		$sql = "SELECT * FROM koperasi";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all()
	{
		$sql = "SELECT * FROM koperasi";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id)
	{
		$sql = "SELECT * FROM koperasi WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data)
	{
		$sql = "UPDATE koperasi SET namaKoperasi='" . $data['namaKoperasi'] . "', nomorBadanHukum='" . $data['nomorBadanHukum'] . "', id_kota=" . $data['kota'] . ", id_kelamin=" . $data['jk'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . ", id_posisi=" . $data['posisi'] . " WHERE id='" . $data['id'] . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	

	public function delete($id)
	{
		$sql = "DELETE FROM koperasi WHERE id='" . $id . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}


	public function insert_batch($data)
	{
		$this->db->insert_batch('koperasi', $data);

		return $this->db->affected_rows();
	}

	public function check_nama($nama)
	{
		$this->db->where('nama', $nama);
		$data = $this->db->get('koperasi');

		return $data->num_rows();
	}

	public function total_rows()
	{
		$data = $this->db->get('koperasi');

		return $data->num_rows();
	}

	function saverecords($data)
	{
        $this->db->insert('koperasi',$data);
        return true;
	}
}

/* End of file M_koperasi.php */
/* Location: ./application/models/M_koperasi.php */