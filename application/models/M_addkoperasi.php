<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_addkoperasi extends CI_Model
{

	public function rules()
	{
		return [
			[
				'field' => 'namaKoperasi',
				'label' => 'namaKoperasi',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomorBadanHukum',
				'label' => 'nomorBadanHukum',
				'rules' => 'trim|required'
			],
			[
				'field' => 'tglRAT_terkahir',
				'label' => 'tglRAT_terkahir',
				'rules' => 'trim|required'
			],
			[
				'field' => 'kelurahan',
				'label' => 'kelurahan',
				'rules' => 'trim|required'
			],
			[
				'field' => 'kecamatan',
				'label' => 'kecamatan',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nikKoperasi',
				'label' => 'kecamatan',
				'rules' => 'trim|required'
			],
		];
	}

	function saverecords($data)
	{
        $this->db->insert('koperasi',$data);
        return true;
	}
}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */