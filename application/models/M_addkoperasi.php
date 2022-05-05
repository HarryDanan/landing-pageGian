<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_addkoperasi extends CI_Model
{
	private $table = 'koperasi';
	public $id;
    public $namaKoperasi;
    public $nomorBadanHukum;
    public $nomorPerubahan_terbaru;
	public $tglPerubahan_terbaru;
    public $tglRAT_terkahir;
    public $alamatKoperasi;
	public $kelurahan;
    public $kecamatan;
    public $kabupaten;
    public $provinsi;
	public $bentukKoperasi;
    public $sektorUsaha;
    public $namaKetua;
    public $namaSekretaris;
	public $namaBendahara;
    public $namaPengawas;
    public $namaManager;
    public $jmlAnggota_pria;
	public $jmlAnggota_wanita;
    public $totalAnggota;
    public $totalManager;
    public $totalKaryawan;
    public $nikKoperasi;
    public $statusNIK;
    public $tglBerlaku_sertifikat;
    public $statusGrade;
	

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id" => $id])->row();
	}

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
	public function save()
	{
		$data = array(
			"namaKoperasi" => $this->input->post('namaKoperasi'),
			"nomorBadanHukum" => $this->input->post('nomorBadanHukum'),
			"nomorPerubahan_terbaru" => $this->input->post('nomorPerubahan_terbaru'),
			"tglPerubahan_terbaru" => $this->input->post('tglPerubahan_terbaru'),
			"tglRAT_terkahir" => $this->input->post('tglRAT_terkahir'),
			"alamatKoperasi" => $this->input->post('alamatKoperasi'),
			"kelurahan" => $this->input->post('kelurahan'),
			"kecamatan" => $this->input->post('kecamatan'),
			"kabupaten" => $this->input->post('kabupaten'),
			"provinsi" => $this->input->post('provinsi'),
			"bentukKoperasi" => $this->input->post('bentukKoperasi'),
			"sektorUsaha" => $this->input->post('sektorUsaha'),
			"namaKetua" => $this->input->post('namaKetua'),
			"namaSekretaris" => $this->input->post('namaSekretaris'),
			"namaBendahara" => $this->input->post('namaBendahara'),
			"namaPengawas" => $this->input->post('namaPengawas'),
			"namaManager" => $this->input->post('namaManager'),
			"jmlAnggota_pria" => $this->input->post('jmlAnggota_pria'),
			"jmlAnggota_wanita" => $this->input->post('jmlAnggota_wanita'),
			"totalAnggota" => $this->input->post('totalAnggota'),
			"totalManager" => $this->input->post('totalManager'),
			"totalKaryawan" => $this->input->post('totalKaryawan'),
			"nikKoperasi" => $this->input->post('nikKoperasi'),
			"statusNIK" => $this->input->post('statusNIK'),
			"tglBerlaku_sertifikat" => $this->input->post('tglBerlaku_sertifikat'),
			"statusGrade" => $this->input->post('statusGrade')
		);
		return $this->db->insert($this->table, $data);
	}
}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */