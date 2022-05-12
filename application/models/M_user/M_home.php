<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
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
	public $tglBadanHukumPendirian;
	public $nomorPerubahan_terbaru;
	public $tglPerubahan_terbaru;
	public $tglRAT_terakhir;
	public $alamatKoperasi;
	public $kelurahan;
	public $kecamatan;
	public $kabupaten;
	public $provinsi;
	public $bentukKoperasi;
	public $jenisKoperasi;
	public $kelompokKoperasi;
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
		// $this->id = uniqid();
		$this->namaKoperasi = $post['namaKoperasi'];
		$this->nomorBadanHukum = $post['nomorBadanHukum'];
		$this->tglBadanHukumPendirian = $post['tglBadanHukumPendirian'];
		$this->nomorPerubahan_terbaru = $post['nomorPerubahan_terbaru'];
		$this->tglPerubahan_terbaru = $post['tglPerubahan_terbaru'];
		$this->tglRAT_terakhir = $post['tglRAT_terakhir'];
		$this->alamatKoperasi = $post['alamatKoperasi'];
		$this->kelurahan = $post['kelurahan'];
		$this->kecamatan = $post['kecamatan'];
		$this->kabupaten = $post['kabupaten'];
		$this->provinsi = $post['provinsi'];
		$this->bentukKoperasi = $post['bentukKoperasi'];
		$this->jenisKoperasi = $post['jenisKoperasi'];
		$this->kelompokKoperasi = $post['kelompokKoperasi'];
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
		$this->tglBadanHukumPendirian = $post['tglBadanHukumPendirian'];
		$this->nomorPerubahan_terbaru = $post['nomorPerubahan_terbaru'];
		$this->tglPerubahan_terbaru = $post['tglPerubahan_terbaru'];
		$this->tglRAT_terakhir = $post['tglRAT_terakhir'];
		$this->alamatKoperasi = $post['alamatKoperasi'];
		$this->kelurahan = $post['kelurahan'];
		$this->kecamatan = $post['kecamatan'];
		$this->kabupaten = $post['kabupaten'];
		$this->provinsi = $post['provinsi'];
		$this->bentukKoperasi = $post['bentukKoperasi'];
		$this->jenisKoperasi = $post['jenisKoperasi'];
		$this->kelompokKoperasi = $post['kelompokKoperasi'];
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
	public function total_blahbatuh() {
		$sql = "SELECT * FROM koperasi WHERE kecamatan = 'Blahbatuh'";

		$data = $this->db->query($sql);

		return $data->num_rows();
	}
	public function total_gianyar() {
		$sql = "SELECT * FROM koperasi WHERE kecamatan = 'Gianyar'";

		$data = $this->db->query($sql);

		return $data->num_rows();
	}
	public function total_payangan() {
		$sql = "SELECT * FROM koperasi WHERE kecamatan = 'Payangan'";

		$data = $this->db->query($sql);

		return $data->num_rows();
	}
	public function total_sukawati() {
		$sql = "SELECT * FROM koperasi WHERE kecamatan = 'Sukawati'";

		$data = $this->db->query($sql);

		return $data->num_rows();
	}
	public function total_tampaksiring() {
		$sql = "SELECT * FROM koperasi WHERE kecamatan = 'Tampaksiring'";

		$data = $this->db->query($sql);

		return $data->num_rows();
	}
	public function total_tegallalang() {
		$sql = "SELECT * FROM koperasi WHERE kecamatan = 'Tegallalang'";

		$data = $this->db->query($sql);

		return $data->num_rows();
	}
	public function total_ubud() {
		$sql = "SELECT * FROM koperasi WHERE kecamatan = 'Ubud'";

		$data = $this->db->query($sql);

		return $data->num_rows();
	}

	public function list_kelurahanDesa_blahbatuh() {
		$list_kelurahanDesa_blahbatuh = array('Bedulu','Belega','Blahbatuh','Bona','Buruan','Keramas','Medahan','Pering','Saba');
		return $list_kelurahanDesa_blahbatuh;
	}
	public function list_kelurahanDesa_gianyar() {
		$list_kelurahanDesa_gianyar = array('Bakbakan','Lebih','Petak','Petak Kaja','Serongan','Siangan','Sidan','Sumita','Suwat','Tegal Tugu','Temesi','Tulikup','Abianbase','Beng','Bitera','Gianyar','Samplangan');
		return $list_kelurahanDesa_gianyar;
	}
	public function list_kelurahanDesa_payangan() {
		$list_kelurahanDesa_payangan = array('Bresela','Buahan','Buahan Kaja','Bukian','Kelusa','Kerta','Melinggih','Melinggih Kelod','Puhu');
		return $list_kelurahanDesa_payangan;
	}
	public function list_kelurahanDesa_sukawati() {
		$list_kelurahanDesa_sukawati = array('Batuan','Batuan Kaler','Batubulan','Batubulan Kangin','Celuk','Guwang','Kemenuh','Ketewel','Singapadu','Singapadu Kaler','Singapadu Tengah','Sukawati');
		return $list_kelurahanDesa_sukawati;
	}
	public function list_kelurahanDesa_tampaksiring() {
		$list_kelurahanDesa_tampaksiring = array('Manukaya','Pejeng','Pejeng Kaja','Pejeng Kangin','Pejeng Kawan','Pejeng Kelod','Sanding','Tampaksiring');
		return $list_kelurahanDesa_tampaksiring;
	}
	public function list_kelurahanDesa_tegallalang() {
		$list_kelurahanDesa_tegallalang = array('Kedisan','Keliki','Kendran','Pupuan','Sebatu','Taro','Tegallalang');
		return $list_kelurahanDesa_tegallalang;
	}
	public function list_kelurahanDesa_ubud() {
		$list_kelurahanDesa_ubud = array('Kedewatan','Lodtunduh','Mas','Peliatan','Petulu','Sayan','Singakerta','Ubud');
		return $list_kelurahanDesa_ubud;
	}
	public function list_kelurahanDesa() {
		$list_kelurahanDesa = array(
			"blahbatuh" => array('Bedulu','Belega','Blahbatuh','Bona','Buruan','Keramas','Medahan','Pering','Saba'),
			"gianyar" => array('Bakbakan','Lebih','Petak','Petak Kaja','Serongan','Siangan','Sidan','Sumita','Suwat','Tegal Tugu','Temesi','Tulikup','Abianbase','Beng','Bitera','Gianyar','Samplangan'),
			"payangan" => array('Bresela','Buahan','Buahan Kaja','Bukian','Kelusa','Kerta','Melinggih','Melinggih Kelod','Puhu'),
			"sukawati" => array('Batuan','Batuan Kaler','Batubulan','Batubulan Kangin','Celuk','Guwang','Kemenuh','Ketewel','Singapadu','Singapadu Kaler','Singapadu Tengah','Sukawati'),
			"tampaksiring" => array('Manukaya','Pejeng','Pejeng Kaja','Pejeng Kangin','Pejeng Kawan','Pejeng Kelod','Sanding','Tampaksiring'),
			"tegallalang" => array('Kedisan','Keliki','Kendran','Pupuan','Sebatu','Taro','Tegallalang'),
			"ubud" => array('Kedewatan','Lodtunduh','Mas','Peliatan','Petulu','Sayan','Singakerta','Ubud'),
		);
		return $list_kelurahanDesa;
	}
}