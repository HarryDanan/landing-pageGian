<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koperasi extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_koperasi');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['koperasi'] = $this->M_koperasi->getAll();

		$data['page'] = "koperasi";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Manage Data Koperasi";

		$this->template->views('koperasi/home', $data);
	}

	public function inputdata()
	{
		$data['userdata'] = $this->userdata;

		$data['page'] = "add_koperasi";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Tambah Data";
		$data['list_blahbatuh'] = $this->M_koperasi->list_kelurahanDesa_blahbatuh();
		$data['list_gianyar'] = $this->M_koperasi->list_kelurahanDesa_gianyar();
		$data['list_payangan'] = $this->M_koperasi->list_kelurahanDesa_payangan();
		$data['list_sukawati'] = $this->M_koperasi->list_kelurahanDesa_sukawati();
		$data['list_tampaksiring'] = $this->M_koperasi->list_kelurahanDesa_tampaksiring();
		$data['list_tegallalang'] = $this->M_koperasi->list_kelurahanDesa_tegallalang();
		$data['list_ubud'] = $this->M_koperasi->list_kelurahanDesa_ubud();

		$this->template->views('koperasi/add_data', $data);
	}

	// simpan data umum
	public function simpandata()
	{
		$koperasi = $this->M_koperasi;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules_simpan());

		$post = $this->input->post();
		$nikKoperasi = $this->nikKoperasi = $post['nikKoperasi'];
		$namaKoperasi = $this->namaKoperasi = $post['namaKoperasi'];
		$nomorBadanHukum = $this->nomorBadanHukum = $post['nomorBadanHukum'];
		$tglBadanHukumPendirian = $this->tglBadanHukumPendirian = $post['tglBadanHukumPendirian'];
		$nomorPerubahan_terbaru = $this->nomorPerubahan_terbaru = $post['nomorPerubahan_terbaru'];
		$tglPerubahan_terbaru = $this->tglPerubahan_terbaru = $post['tglPerubahan_terbaru'];
		$tglRAT_terakhir = $this->tglRAT_terakhir = $post['tglRAT_terakhir'];
		$alamatKoperasi = $this->alamatKoperasi = $post['alamatKoperasi'];
		$kelurahan = $this->kelurahan = $post['kelurahan'];
		$kecamatan = $this->kecamatan = $post['kecamatan'];
		$kabupaten = $this->kabupaten = $post['kabupaten'];
		$provinsi = $this->provinsi = $post['provinsi'];
		$kodePos = $this->kodePos = $post['kodePos'];
		$no_telepon1 = $this->no_telepon1 = $post['no_telepon1'];
		$no_telepon2 = $this->no_telepon2 = $post['no_telepon2'];
		$faksmili = $this->faksmili = $post['faksmili'];
		$emaill = $this->emaill = $post['emaill'];
		$website = $this->website = $post['website'];
		$statusAktif = $this->statusAktif = $post['statusAktif'];
		$bentukKoperasi = $this->bentukKoperasi = $post['bentukKoperasi'];
		$jenisKoperasi = $this->jenisKoperasi = $post['jenisKoperasi'];
		$kelompokKoperasi = $this->kelompokKoperasi = $post['kelompokKoperasi'];
		$sektorUsaha = $this->sektorUsaha = $post['sektorUsaha'];

		$namaKetua = $this->namaKetua = $post['namaKetua'];
		$no_telp_ketua = $this->no_telp_ketua = $post['no_telp_ketua'];
		$namaSekretaris = $this->namaSekretaris = $post['namaSekretaris'];
		$no_telp_sekretaris = $this->no_telp_sekretaris = $post['no_telp_sekretaris'];
		$namaBendahara = $this->namaBendahara = $post['namaBendahara'];
		$no_telp_bendahara = $this->no_telp_bendahara = $post['no_telp_bendahara'];
		$namaPengawas = $this->namaPengawas = $post['namaPengawas'];
		$namaManager = $this->namaManager = $post['namaManager'];

		$jmlAnggota_pria = $this->jmlAnggota_pria = $post['jmlAnggota_pria'];
		$jmlAnggota_wanita = $this->jmlAnggota_wanita = $post['jmlAnggota_wanita'];
		$totalAnggota = $this->totalAnggota = $post['totalAnggota'];
		$jmlManager_pria = $this->jmlManager_pria = $post['jmlManager_pria'];
		$jmlManager_wanita = $this->jmlManager_wanita = $post['jmlManager_wanita'];
		$totalManager = $this->totalManager = $post['totalManager'];
		$jmlKaryawan_pria = $this->jmlKaryawan_pria = $post['jmlKaryawan_pria'];
		$jmlKaryawan_wanita = $this->jmlKaryawan_wanita = $post['jmlKaryawan_wanita'];
		$totalKaryawan = $this->totalKaryawan = $post['totalKaryawan'];

		$statusNIK = $this->statusNIK = $post['statusNIK'];
		$tglBerlaku_sertifikat = $this->tglBerlaku_sertifikat = $post['tglBerlaku_sertifikat'];
		$statusGrade = $this->statusGrade = $post['statusGrade'];
		$statusValid = $this->statusValid = $post['statusValid'];

		$data1 = array(
			'nikKoperasi' => $nikKoperasi,
			'namaKoperasi' => $namaKoperasi,
			'nomorBadanHukum' => $nomorBadanHukum,
			'tglBadanHukumPendirian' => $tglBadanHukumPendirian,
			'nomorPerubahan_terbaru' => $nomorPerubahan_terbaru,
			'tglPerubahan_terbaru' => $tglPerubahan_terbaru,
			'tglRAT_terakhir' => $tglRAT_terakhir,
			'alamatKoperasi' => $alamatKoperasi,
			'kelurahan' => $kelurahan,
			'kecamatan' => $kecamatan,
			'kabupaten' => $kabupaten,
			'provinsi' => $provinsi,
			'kodePos' => $kodePos,
			'no_telepon1' => $no_telepon1,
			'no_telepon2' => $no_telepon2,
			'faksmili' => $faksmili,
			'emaill' => $emaill,
			'website' => $website,
			'statusAktif' => $statusAktif,
			'bentukKoperasi' => $bentukKoperasi,
			'jenisKoperasi' => $jenisKoperasi,
			'kelompokKoperasi' => $kelompokKoperasi,
			'sektorUsaha' => $sektorUsaha,
			'namaKetua' => $namaKetua,
			'no_telp_ketua' => $no_telp_ketua,
			'namaSekretaris' => $namaSekretaris,
			'no_telp_sekretaris' => $no_telp_sekretaris,
			'namaBendahara' => $namaBendahara,
			'no_telp_bendahara' => $no_telp_bendahara,
			'namaPengawas' => $namaPengawas,
			'namaManager' => $namaManager,
			'statusNIK' => $statusNIK,
			'tglBerlaku_sertifikat' => $tglBerlaku_sertifikat,
			'statusGrade' => $statusGrade,
			'statusValid' => $statusValid,

		);
		$data2 = array(
			'idKoperasi' => $nikKoperasi,
			'jmlAnggota_pria' => $jmlAnggota_pria,
			'jmlAnggota_wanita' => $jmlAnggota_wanita,
			'totalAnggota' => $totalAnggota,
			'jmlManager_pria' => $jmlManager_pria,
			'jmlManager_wanita' => $jmlManager_wanita,
			'totalManager' => $totalManager,
			'jmlKaryawan_pria' => $jmlKaryawan_pria,
			'jmlKaryawan_wanita' => $jmlKaryawan_wanita,
			'totalKaryawan' => $totalKaryawan,
		);
		if ($this->validation->run() == FALSE) {

			$this->session->set_flashdata('failed', validation_errors());
			redirect('koperasi/inputdata');
		} else {
			$koperasi->simpan($data1, $data2);
			$this->session->set_flashdata('success', 'Data Berhasil disimpan!');
			redirect('koperasi');
		}

		// redirect(site_url('koperasi'));
	}
	// tambah data kelembagaan
	public function tambahKelembagaan()
	{
		$koperasi = $this->M_koperasi;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules());

		$post = $this->input->post();
		$nikKoperasi = $this->nikKoperasi = $post['nikKoperasi'];
		$tahunBulan = $this->tahunBulan = $post['tahunBulan'];
		$jmlAnggota_pria = $this->jmlAnggota_pria = $post['jmlAnggota_pria'];
		$jmlAnggota_wanita = $this->jmlAnggota_wanita = $post['jmlAnggota_wanita'];
		$totalAnggota = $this->totalAnggota = $post['totalAnggota'];
		$jmlManager_pria = $this->jmlManager_pria = $post['jmlManager_pria'];
		$jmlManager_wanita = $this->jmlManager_wanita = $post['jmlManager_wanita'];
		$totalManager = $this->totalManager = $post['totalManager'];
		$jmlKaryawan_pria = $this->jmlKaryawan_pria = $post['jmlKaryawan_pria'];
		$jmlKaryawan_wanita = $this->jmlKaryawan_wanita = $post['jmlKaryawan_wanita'];
		$totalKaryawan = $this->totalKaryawan = $post['totalKaryawan'];

		$data1 = array(
			'idKoperasi' => $nikKoperasi,
			'tahunBulan' => $tahunBulan,
			'jmlAnggota_pria' => $jmlAnggota_pria,
			'jmlAnggota_wanita' => $jmlAnggota_wanita,
			'totalAnggota' => $totalAnggota,
			'jmlManager_pria' => $jmlManager_pria,
			'jmlManager_wanita' => $jmlManager_wanita,
			'totalManager' => $totalManager,
			'jmlKaryawan_pria' => $jmlKaryawan_pria,
			'jmlKaryawan_wanita' => $jmlKaryawan_wanita,
			'totalKaryawan' => $totalKaryawan,

		);
		// $koperasi->tambahKelembagaan($data1);
		// redirect(site_url('koperasi'));
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('failed', validation_errors());
			redirect('koperasi/editdata');
		} else {
			$koperasi->tambahKelembagaan($data1);
			$this->session->set_flashdata('success', 'Data Berhasil disimpan!');
			redirect('koperasi');
		}
	}
	// tambah data asset
	public function tambahAsset()
	{
		$koperasi = $this->M_koperasi;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules());

		$post = $this->input->post();
		$nikKoperasi = $this->nikKoperasi = $post['nikKoperasi'];
		$tahunBulan = $this->tahunBulan = $post['tahunBulan'];
		$modalSendiri = $this->modalSendiri = $post['modalSendiri'];
		$modalLuar = $this->modalLuar = $post['modalLuar'];
		$asset = $this->asset = $post['asset'];
		$volumeUsaha = $this->volumeUsaha = $post['volumeUsaha'];
		$total = $this->total = $post['total'];
		$sisaHasilUsaha = $this->sisaHasilUsaha = $post['sisaHasilUsaha'];

		$data1 = array(
			'idKoperasi' => $nikKoperasi,
			'tahunBulan' => $tahunBulan,
			'modalSendiri' => $modalSendiri,
			'modalLuar' => $modalLuar,
			'asset' => $asset,
			'volumeUsaha' => $volumeUsaha,
			'total' => $total,
			'sisaHasilUsaha' => $sisaHasilUsaha,

		);
		$koperasi->tambahAsset($data1);
		redirect(site_url('koperasi'));
		// if ($validation->run()) {
		// 	$koperasi->simpan($data1);
		// 	$this->session->set_flashdata('success', 'Data Berhasil disimpan!');
		// 	redirect(site_url('koperasi'));
		// }

		// redirect(site_url('koperasi'));
	}

	public function editdata($id = null)
	{
		if (!isset($id)) redirect('koperasi');

		$data['dataKoperasi'] = $this->M_koperasi->getByID($id);
		$idKoperasi = $data['dataKoperasi']->nikKoperasi;
		$data['dataKelembagaan'] = $this->M_koperasi->getKelembagaan($idKoperasi);
		$data['dataAsset'] = $this->M_koperasi->getAsset($idKoperasi);
		$data['userdata'] = $this->userdata;

		$data['page'] = "edit_koperasi";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "View Data";

		$data['list_blahbatuh'] = $this->M_koperasi->list_kelurahanDesa_blahbatuh();
		$data['list_gianyar'] = $this->M_koperasi->list_kelurahanDesa_gianyar();
		$data['list_payangan'] = $this->M_koperasi->list_kelurahanDesa_payangan();
		$data['list_sukawati'] = $this->M_koperasi->list_kelurahanDesa_sukawati();
		$data['list_tampaksiring'] = $this->M_koperasi->list_kelurahanDesa_tampaksiring();
		$data['list_tegallalang'] = $this->M_koperasi->list_kelurahanDesa_tegallalang();
		$data['list_ubud'] = $this->M_koperasi->list_kelurahanDesa_ubud();

		$this->template->views('koperasi/edit_data', $data);
		if (!$data['dataKoperasi']) show_404();
		// redirect('EditKoperasi',$data);
	}

	public function updatedataUmum()
	{

		$koperasi = $this->M_koperasi;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules());

		$post = $this->input->post();
		$id = $this->id = $post['id'];
		$nikKoperasi = $this->nikKoperasi = $post['nikKoperasi'];
		$namaKoperasi = $this->namaKoperasi = $post['namaKoperasi'];
		$nomorBadanHukum = $this->nomorBadanHukum = $post['nomorBadanHukum'];
		$tglBadanHukumPendirian = $this->tglBadanHukumPendirian = $post['tglBadanHukumPendirian'];
		$nomorPerubahan_terbaru = $this->nomorPerubahan_terbaru = $post['nomorPerubahan_terbaru'];
		$tglPerubahan_terbaru = $this->tglPerubahan_terbaru = $post['tglPerubahan_terbaru'];
		$tglRAT_terakhir = $this->tglRAT_terakhir = $post['tglRAT_terakhir'];
		$alamatKoperasi = $this->alamatKoperasi = $post['alamatKoperasi'];
		$kelurahan = $this->kelurahan = $post['kelurahan'];
		$kecamatan = $this->kecamatan = $post['kecamatan'];
		$kabupaten = $this->kabupaten = $post['kabupaten'];
		$provinsi = $this->provinsi = $post['provinsi'];
		$kodePos = $this->kodePos = $post['kodePos'];
		$no_telepon1 = $this->no_telepon1 = $post['no_telepon1'];
		$no_telepon2 = $this->no_telepon2 = $post['no_telepon2'];
		$faksmili = $this->faksmili = $post['faksmili'];
		$emaill = $this->emaill = $post['emaill'];
		$website = $this->website = $post['website'];
		$statusAktif = $this->statusAktif = $post['statusAktif'];
		$bentukKoperasi = $this->bentukKoperasi = $post['bentukKoperasi'];
		$jenisKoperasi = $this->jenisKoperasi = $post['jenisKoperasi'];
		$kelompokKoperasi = $this->kelompokKoperasi = $post['kelompokKoperasi'];
		$sektorUsaha = $this->sektorUsaha = $post['sektorUsaha'];

		$namaKetua = $this->namaKetua = $post['namaKetua'];
		$no_telp_ketua = $this->no_telp_ketua = $post['no_telp_ketua'];
		$namaSekretaris = $this->namaSekretaris = $post['namaSekretaris'];
		$no_telp_sekretaris = $this->no_telp_sekretaris = $post['no_telp_sekretaris'];
		$namaBendahara = $this->namaBendahara = $post['namaBendahara'];
		$no_telp_bendahara = $this->no_telp_bendahara = $post['no_telp_bendahara'];
		$namaPengawas = $this->namaPengawas = $post['namaPengawas'];
		$namaManager = $this->namaManager = $post['namaManager'];

		$statusNIK = $this->statusNIK = $post['statusNIK'];
		$tglBerlaku_sertifikat = $this->tglBerlaku_sertifikat = $post['tglBerlaku_sertifikat'];
		$statusGrade = $this->statusGrade = $post['statusGrade'];
		$statusValid = $this->statusValid = $post['statusValid'];

		$data1 = array(
			'nikKoperasi' => $nikKoperasi,
			'namaKoperasi' => $namaKoperasi,
			'nomorBadanHukum' => $nomorBadanHukum,
			'tglBadanHukumPendirian' => $tglBadanHukumPendirian,
			'nomorPerubahan_terbaru' => $nomorPerubahan_terbaru,
			'tglPerubahan_terbaru' => $tglPerubahan_terbaru,
			'tglRAT_terakhir' => $tglRAT_terakhir,
			'alamatKoperasi' => $alamatKoperasi,
			'kelurahan' => $kelurahan,
			'kecamatan' => $kecamatan,
			'kabupaten' => $kabupaten,
			'provinsi' => $provinsi,
			'kodePos' => $kodePos,
			'no_telepon1' => $no_telepon1,
			'no_telepon2' => $no_telepon2,
			'faksmili' => $faksmili,
			'emaill' => $emaill,
			'website' => $website,
			'statusAktif' => $statusAktif,
			'bentukKoperasi' => $bentukKoperasi,
			'jenisKoperasi' => $jenisKoperasi,
			'kelompokKoperasi' => $kelompokKoperasi,
			'sektorUsaha' => $sektorUsaha,
			'namaKetua' => $namaKetua,
			'no_telp_ketua' => $no_telp_ketua,
			'namaSekretaris' => $namaSekretaris,
			'no_telp_sekretaris' => $no_telp_sekretaris,
			'namaBendahara' => $namaBendahara,
			'no_telp_bendahara' => $no_telp_bendahara,
			'namaPengawas' => $namaPengawas,
			'namaManager' => $namaManager,
			'statusNIK' => $statusNIK,
			'tglBerlaku_sertifikat' => $tglBerlaku_sertifikat,
			'statusGrade' => $statusGrade,
			'statusValid' => $statusValid,

		);
		$koperasi->updatedataUmum($data1, $id);
		$this->session->set_flashdata('update', 'Data Berhasil diperbaharui');
		redirect(site_url('koperasi'));

		// if ($validation->run()) {
		// 	$koperasi->updatedata($data1);
		// 	$this->session->set_flashdata('update', 'Data Berhasil diperbaharui');
		// 	redirect(site_url('koperasi'));
		// }
	}
	public function editKelembagaan()
	{

		$koperasi = $this->M_koperasi;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules());

		$post = $this->input->post();
		$id = $this->id = $post['id'];
		$nikKoperasi = $this->nikKoperasi = $post['nikKoperasi'];
		$jmlAnggota_pria = $this->jmlAnggota_pria = $post['jmlAnggota_pria'];
		$jmlAnggota_wanita = $this->jmlAnggota_wanita = $post['jmlAnggota_wanita'];
		$totalAnggota = $this->totalAnggota = $post['totalAnggota'];
		$jmlManager_pria = $this->jmlManager_pria = $post['jmlManager_pria'];
		$jmlManager_wanita = $this->jmlManager_wanita = $post['jmlManager_wanita'];
		$totalManager = $this->totalManager = $post['totalManager'];
		$jmlKaryawan_pria = $this->jmlKaryawan_pria = $post['jmlKaryawan_pria'];
		$jmlKaryawan_wanita = $this->jmlKaryawan_wanita = $post['jmlKaryawan_wanita'];
		$totalKaryawan = $this->totalKaryawan = $post['totalKaryawan'];

		$data1 = array(
			'idKoperasi' => $nikKoperasi,
			'jmlAnggota_pria' => $jmlAnggota_pria,
			'jmlAnggota_wanita' => $jmlAnggota_wanita,
			'totalAnggota' => $totalAnggota,
			'jmlManager_pria' => $jmlManager_pria,
			'jmlManager_wanita' => $jmlManager_wanita,
			'totalManager' => $totalManager,
			'jmlKaryawan_pria' => $jmlKaryawan_pria,
			'jmlKaryawan_wanita' => $jmlKaryawan_wanita,
			'totalKaryawan' => $totalKaryawan,

		);
		$koperasi->updateKelembagaan($data1, $id);
		$this->session->set_flashdata('update', 'Data Berhasil diperbaharui');
		redirect(site_url('koperasi'));

		// if ($validation->run()) {
		// 	$koperasi->updatedata($data1);
		// 	$this->session->set_flashdata('update', 'Data Berhasil diperbaharui');
		// 	redirect(site_url('koperasi'));
		// }
	}

	public function editAsset()
	{
		$koperasi = $this->M_koperasi;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules());

		$post = $this->input->post();
		$id = $this->id = $post['id'];
		$nikKoperasi = $this->nikKoperasi = $post['nikKoperasi'];
		$tahunBulan = $this->tahunBulan = $post['tahunBulan'];
		$modalSendiri = $this->modalSendiri = $post['modalSendiri'];
		$modalLuar = $this->modalLuar = $post['modalLuar'];
		$asset = $this->asset = $post['asset'];
		$volumeUsaha = $this->volumeUsaha = $post['volumeUsaha'];
		$total = $this->total = $post['total'];
		$sisaHasilUsaha = $this->sisaHasilUsaha = $post['sisaHasilUsaha'];

		$data1 = array(
			'idKoperasi' => $nikKoperasi,
			'tahunBulan' => $tahunBulan,
			'modalSendiri' => $modalSendiri,
			'modalLuar' => $modalLuar,
			'asset' => $asset,
			'volumeUsaha' => $volumeUsaha,
			'total' => $total,
			'sisaHasilUsaha' => $sisaHasilUsaha,

		);
		$koperasi->updateAsset($data1, $id);
		$this->session->set_flashdata('update', 'Data Berhasil diperbaharui');
		redirect(site_url('koperasi'));

		// if ($validation->run()) {
		// 	$koperasi->updatedata($data1);
		// 	$this->session->set_flashdata('update', 'Data Berhasil diperbaharui');
		// 	redirect(site_url('koperasi'));
		// }
	}

	public function hapusdata($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_koperasi->hapus($id)) {
			$this->session->set_flashdata('delete', 'Data Berhasil Dihapus!');
			redirect(site_url('koperasi'));
		}
	}
	public function hapusdataKelembagaan($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_koperasi->hapusKelembagaan($id)) {
			$this->session->set_flashdata('delete', 'Data Berhasil Dihapus!');
			redirect(site_url('koperasi'));
		}
	}
	public function hapusdataAsset($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_koperasi->hapusAsset($id)) {
			$this->session->set_flashdata('delete', 'Data Berhasil Dihapus!');
			redirect(site_url('koperasi'));
		}
	}
}
