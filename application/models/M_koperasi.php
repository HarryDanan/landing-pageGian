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

	private $_table = "koperasi";

	public $id;
	public $namaKoperasi;
	public $nomorBadanHukum;
	public $nomorPerubahan_terbaru;
	public $tglPerubahan_terbaru;
	public $tglRAT_terakhir;
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

	public function rules()
	{
		return [
			[
				'field' => 'namaKoperasi',
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
		$this->id = uniqid();
		$this->namaKoperasi = $post['namaKoperasi'];
		$this->nomorBadanHukum = $post['nomorBadanHukum'];
		$this->nomorPerubahan_terbaru = $post['nomorPerubahan_terbaru'];
		$this->tglPerubahan_terbaru = $post['tglPerubahan_terbaru'];
		$this->tglRAT_terakhir = $post['tglRAT_terakhir'];
		$this->alamatKoperasi = $post['alamatKoperasi'];
		$this->kelurahan = $post['kelurahan'];
		$this->kecamatan = $post['kecamatan'];
		$this->kabupaten = $post['kabupaten'];
		$this->provinsi = $post['provinsi'];
		$this->bentukKoperasi = $post['bentukKoperasi'];
		$this->sektorUsaha = $post['sektorUsaha'];
		$this->namaKetua = $post['namaKetua'];
		$this->namaSekretaris = $post['namaSekretaris'];
		$this->namaBendahara = $post['namaBendahara'];
		$this->namaPengawas = $post['namaPengawas'];
		$this->namaManager = $post['namaManager'];
		$this->jmlAnggota_pria = $post['jmlAnggota_pria'];
		$this->jmlAnggota_wanita = $post['jmlAnggota_wanita'];
		$this->totalAnggota = $post['totalAnggota'];
		$this->totalManager = $post['totalManager'];
		$this->totalKaryawan = $post['totalKaryawan'];
		$this->nikKoperasi = $post['nikKoperasi'];
		$this->statusNIK = $post['statusNIK'];
		$this->tglBerlaku_sertifikat = $post['tglBerlaku_sertifikat'];
		$this->statusGrade = $post['statusGrade'];
		$this->db->insert($this->_table, $this);
	}

	public function updatedata()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->namaKoperasi = $post['namaKoperasi'];
		$this->nomorBadanHukum = $post['nomorBadanHukum'];
		$this->nomorPerubahan_terbaru = $post['nomorPerubahan_terbaru'];
		$this->tglPerubahan_terbaru = $post['tglPerubahan_terbaru'];
		$this->tglRAT_terakhir = $post['tglRAT_terakhir'];
		$this->alamatKoperasi = $post['alamatKoperasi'];
		$this->kelurahan = $post['kelurahan'];
		$this->kecamatan = $post['kecamatan'];
		$this->kabupaten = $post['kabupaten'];
		$this->provinsi = $post['provinsi'];
		$this->bentukKoperasi = $post['bentukKoperasi'];
		$this->sektorUsaha = $post['sektorUsaha'];
		$this->namaKetua = $post['namaKetua'];
		$this->namaSekretaris = $post['namaSekretaris'];
		$this->namaBendahara = $post['namaBendahara'];
		$this->namaPengawas = $post['namaPengawas'];
		$this->namaManager = $post['namaManager'];
		$this->jmlAnggota_pria = $post['jmlAnggota_pria'];
		$this->jmlAnggota_wanita = $post['jmlAnggota_wanita'];
		$this->totalAnggota = $post['totalAnggota'];
		$this->totalManager = $post['totalManager'];
		$this->totalKaryawan = $post['totalKaryawan'];
		$this->nikKoperasi = $post['nikKoperasi'];
		$this->statusNIK = $post['statusNIK'];
		$this->tglBerlaku_sertifikat = $post['tglBerlaku_sertifikat'];
		$this->statusGrade = $post['statusGrade'];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function hapus($id)
	{
		return $this->db->delete($this->_table, array('id' => $id));
	}

	public function total_rows() {
		$data = $this->db->get('koperasi');

		return $data->num_rows();
	}
}
