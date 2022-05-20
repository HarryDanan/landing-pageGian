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

	private $_table = "tb_datakoperasi";
	private $tb_asset = "tb_asset";
	private $tb_kelembagaan = "tb_kelembagaan";

	public function rules_simpan()
	{
		return [
			[
				'field' => 'nikKoperasi',
				'label' => 'NIK Koperasi',
				'rules' => 'trim|required'
			],
			[
				'field' => 'namaKoperasi',
				'label' => 'Nama Koperasi',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomorBadanHukum',
				'label' => 'Nomor Badan Hukum',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomorPerubahan_terbaru',
				'label' => 'Nomor Badan Hukum Pendirian',
				'rules' => 'trim'
			],
			[
				'field' => 'alamatKoperasi',
				'label' => 'Alamat',
				'rules' => 'trim'
			],
			[
				'field' => 'kelurahan',
				'label' => 'Kelurahan',
				'rules' => 'trim'
			],
			[
				'field' => 'kecamatan',
				'label' => 'Kecamatan',
				'rules' => 'trim'
			],
			[
				'field' => 'kabupaten',
				'label' => 'Kabupaten',
				'rules' => 'trim'
			],
			[
				'field' => 'provinsi',
				'label' => 'Provinsi',
				'rules' => 'trim'
			],
			[
				'field' => 'kodePos',
				'label' => 'Kode Pos',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telepon1',
				'label' => 'No Telepon 1',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telepon2',
				'label' => 'No telepon 2',
				'rules' => 'trim'
			],
			[
				'field' => 'faksmili',
				'label' => 'FAKSMILI',
				'rules' => 'trim'
			],
			[
				'field' => 'emaill',
				'label' => 'Email',
				'rules' => 'trim'
			],
			[
				'field' => 'website',
				'label' => 'Website',
				'rules' => 'trim'
			],
			[
				'field' => 'statusAktif',
				'label' => 'Status Aktif',
				'rules' => 'trim'
			],
			[
				'field' => 'bentukKoperasi',
				'label' => 'Bentuk Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'jenisKoperasi',
				'label' => 'Jenis Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'kelompokKoperasi',
				'label' => 'Kelompok Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'sektorUsaha',
				'label' => 'Sektor Usaha',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_ketua',
				'label' => 'No Telp Ketua',
				'rules' => 'trim'
			],
			[
				'field' => 'namaSekretaris',
				'label' => 'Nama Sekretaris',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_sekretaris',
				'label' => 'No Telp Sekretaris',
				'rules' => 'trim'
			],
			[
				'field' => 'namaBendahara',
				'label' => 'Nama Bendahara',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_bendahara',
				'label' => 'No Telp Bendahara',
				'rules' => 'trim'
			],
			[
				'field' => 'namaPengawas',
				'label' => 'Nama Pengawas',
				'rules' => 'trim'
			],
			[
				'field' => 'namaManager',
				'label' => 'Nama Manager',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlAnggota_pria',
				'label' => 'Jumlah Anggota Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlAnggota_wanita',
				'label' => 'Jumlah Anggota Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalAnggota',
				'label' => 'Total Anggota',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlManager_pria',
				'label' => 'Jumlah Manager Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlManager_wanita',
				'label' => 'Jumlah Manager Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalManager',
				'label' => 'Total Manager',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlKaryawan_pria',
				'label' => 'Jumlah Karyawan Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlKaryawan_wanita',
				'label' => 'Jumlah Karyawan Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalKaryawan',
				'label' => 'Total Karyawan',
				'rules' => 'trim'
			],
			[
				'field' => 'statusNIK',
				'label' => 'Status NIK',
				'rules' => 'trim'
			],
			[
				'field' => 'statusGrade',
				'label' => 'Status Grade',
				'rules' => 'trim'
			],
			[
				'field' => 'statusValid',
				'label' => 'status Valid',
				'rules' => 'trim'
			],
		];
	}
	public function rules_update()
	{
		return [
			[
				'field' => 'nikKoperasi',
				'label' => 'NIK Koperasi',
				'rules' => 'trim|required'
			],
			[
				'field' => 'namaKoperasi',
				'label' => 'Nama Koperasi',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomorBadanHukum',
				'label' => 'Nomor Badan Hukum',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomorPerubahan_terbaru',
				'label' => 'Nomor Badan Hukum Pendirian',
				'rules' => 'trim'
			],
			[
				'field' => 'alamatKoperasi',
				'label' => 'Alamat',
				'rules' => 'trim'
			],
			[
				'field' => 'kelurahan',
				'label' => 'Kelurahan',
				'rules' => 'trim'
			],
			[
				'field' => 'kecamatan',
				'label' => 'Kecamatan',
				'rules' => 'trim'
			],
			[
				'field' => 'kabupaten',
				'label' => 'Kabupaten',
				'rules' => 'trim'
			],
			[
				'field' => 'provinsi',
				'label' => 'Provinsi',
				'rules' => 'trim'
			],
			[
				'field' => 'kodePos',
				'label' => 'Kode Pos',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telepon1',
				'label' => 'No Telepon 1',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telepon2',
				'label' => 'No telepon 2',
				'rules' => 'trim'
			],
			[
				'field' => 'faksmili',
				'label' => 'FAKSMILI',
				'rules' => 'trim'
			],
			[
				'field' => 'emaill',
				'label' => 'Email',
				'rules' => 'trim'
			],
			[
				'field' => 'website',
				'label' => 'Website',
				'rules' => 'trim'
			],
			[
				'field' => 'statusAktif',
				'label' => 'Status Aktif',
				'rules' => 'trim'
			],
			[
				'field' => 'bentukKoperasi',
				'label' => 'Bentuk Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'jenisKoperasi',
				'label' => 'Jenis Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'kelompokKoperasi',
				'label' => 'Kelompok Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'sektorUsaha',
				'label' => 'Sektor Usaha',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_ketua',
				'label' => 'No Telp Ketua',
				'rules' => 'trim'
			],
			[
				'field' => 'namaSekretaris',
				'label' => 'Nama Sekretaris',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_sekretaris',
				'label' => 'No Telp Sekretaris',
				'rules' => 'trim'
			],
			[
				'field' => 'namaBendahara',
				'label' => 'Nama Bendahara',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_bendahara',
				'label' => 'No Telp Bendahara',
				'rules' => 'trim'
			],
			[
				'field' => 'namaPengawas',
				'label' => 'Nama Pengawas',
				'rules' => 'trim'
			],
			[
				'field' => 'namaManager',
				'label' => 'Nama Manager',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlAnggota_pria',
				'label' => 'Jumlah Anggota Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlAnggota_wanita',
				'label' => 'Jumlah Anggota Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalAnggota',
				'label' => 'Total Anggota',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlManager_pria',
				'label' => 'Jumlah Manager Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlManager_wanita',
				'label' => 'Jumlah Manager Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalManager',
				'label' => 'Total Manager',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlKaryawan_pria',
				'label' => 'Jumlah Karyawan Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlKaryawan_wanita',
				'label' => 'Jumlah Karyawan Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalKaryawan',
				'label' => 'Total Karyawan',
				'rules' => 'trim'
			],
			[
				'field' => 'statusNIK',
				'label' => 'Status NIK',
				'rules' => 'trim'
			],
			[
				'field' => 'statusGrade',
				'label' => 'Status Grade',
				'rules' => 'trim'
			],
			[
				'field' => 'statusValid',
				'label' => 'status Valid',
				'rules' => 'trim'
			],
		];
	}

	public function getAll()
	{
		$this->db->order_by('id');
		return $this->db->get($this->_table)->result();
	}

	public function getAllKesehatan($idKoperasi)
	{
		$this->db->order_by('id');
		return $this->db->get_where('tb_datakesehatanm',["idKoperasi" => $idKoperasi])->result();
	}

	public function getByID($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}
	public function getKelembagaan($idKoperasi)
	{
		return $this->db->get_where($this->tb_kelembagaan, ["idKoperasi" => $idKoperasi])->result();
	}
	public function getAsset($idKoperasi)
	{
		return $this->db->get_where($this->tb_asset, ["idKoperasi" => $idKoperasi])->result();
	}
	public function getAll_user($idKop)
	{
		return $this->db->get_where($this->_table, ["nikKoperasi" => $idKop])->row();
	}


	public function simpan($data1,$data2)
	{
		$this->db->insert('tb_datakoperasi', $data1);
		$this->db->insert('tb_kelembagaan', $data2);
	}
	public function tambahKelembagaan($data1)
	{
		$this->db->insert('tb_kelembagaan', $data1);
	}
	public function tambahAsset($data1)
	{
		$this->db->insert('tb_asset', $data1);
	}


	// public function updatedata()
	// {
	// 	$post = $this->input->post();
	// 	$this->id = $post['id'];
	// 	$this->namaKoperasi = $post['namaKoperasi'];
	// 	$this->nomorBadanHukum = $post['nomorBadanHukum'];
	// 	$this->tglBadanHukumPendirian = $post['tglBadanHukumPendirian'];
	// 	$this->nomorPerubahan_terbaru = $post['nomorPerubahan_terbaru'];
	// 	$this->tglPerubahan_terbaru = $post['tglPerubahan_terbaru'];
	// 	$this->tglRAT_terakhir = $post['tglRAT_terakhir'];
	// 	$this->alamatKoperasi = $post['alamatKoperasi'];
	// 	$this->kelurahan = $post['kelurahan'];
	// 	$this->kecamatan = $post['kecamatan'];
	// 	$this->kabupaten = $post['kabupaten'];
	// 	$this->provinsi = $post['provinsi'];
	// 	$this->bentukKoperasi = $post['bentukKoperasi'];
	// 	$this->jenisKoperasi = $post['jenisKoperasi'];
	// 	$this->kelompokKoperasi = $post['kelompokKoperasi'];
	// 	$this->sektorUsaha = $post['sektorUsaha'];
	// 	$this->namaKetua = $post['namaKetua'];
	// 	$this->namaSekretaris = $post['namaSekretaris'];
	// 	$this->namaBendahara = $post['namaBendahara'];
	// 	$this->namaPengawas = $post['namaPengawas'];
	// 	$this->namaManager = $post['namaManager'];
	// 	$this->jmlAnggota_pria = $post['jmlAnggota_pria'];
	// 	$this->jmlAnggota_wanita = $post['jmlAnggota_wanita'];
	// 	$this->totalAnggota = $post['totalAnggota'];
	// 	$this->totalManager = $post['totalManager'];
	// 	$this->totalKaryawan = $post['totalKaryawan'];
	// 	$this->nikKoperasi = $post['nikKoperasi'];
	// 	$this->statusNIK = $post['statusNIK'];
	// 	$this->tglBerlaku_sertifikat = $post['tglBerlaku_sertifikat'];
	// 	$this->statusGrade = $post['statusGrade'];
	// 	$this->db->update($this->_table, $this, array('id' => $post['id']));
	// }
	// public function updatedata($data1,$data2,$data3)
	// {
	// 	$this->db->update('data_koperasi', $data1, array('id'));
	// 	$this->db->update('pengurus_koperasi', $data2, array('id'));
	// 	$this->db->update('data_kelembagaan_koperasi', $data3, array('id'));
	// }
	public function updatedataUmum($data1,$id)
	{
		$this->db->update('tb_datakoperasi', $data1, array('id' => $id));
	}
	public function updateKelembagaan($data1,$id)
	{
		$this->db->update('tb_kelembagaan', $data1, array('id' => $id));
	}
	public function updateAsset($data1,$id)
	{
		$this->db->update('tb_asset', $data1, array('id' => $id));
	}

	public function hapus($id)
	{
		return $this->db->delete($this->_table, array('id' => $id));
	}
	public function hapusKelembagaan($id)
	{
		return $this->db->delete($this->tb_kelembagaan, array('id' => $id));
	}
	public function hapusAsset($id)
	{
		return $this->db->delete($this->tb_asset, array('id' => $id));
	}

	public function total_rows_koperasi() {
		$data = $this->db->get('koperasi');

		return $data->num_rows();
	}
	public function total_rows_admin() {
		$data = $this->db->get('admin');

		return $data->num_rows();
	}
	public function total_rows_user() {
		$data = $this->db->get('user');

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
		// $sql = "SELECT * FROM kelurahan_desa";

		// return $this->db->query($sql);
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
