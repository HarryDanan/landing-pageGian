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

	public function simpandata()
	{
		$koperasi = $this->M_koperasi;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules());

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
		);

		$id_koperasi = $this->id_koperasi = $post['nikKoperasi'];
		$namaKetua = $this->namaKetua = $post['namaKetua'];
		$no_telp_ketua = $this->no_telp_ketua = $post['no_telp_ketua'];
		$namaSekretaris = $this->namaSekretaris = $post['namaSekretaris'];
		$no_telp_sekretaris = $this->no_telp_sekretaris = $post['no_telp_sekretaris'];
		$namaBendahara = $this->namaBendahara = $post['namaBendahara'];
		$no_telp_bendahara = $this->no_telp_bendahara = $post['no_telp_bendahara'];
		$namaPengawas = $this->namaPengawas = $post['namaPengawas'];
		$namaManager = $this->namaManager = $post['namaManager'];

		$data2 = array(
			'id_koperasi' => $id_koperasi,
			'namaKetua' => $namaKetua,
			'no_telp_ketua' => $no_telp_ketua,
			'namaSekretaris' => $namaSekretaris,
			'no_telp_sekretaris' => $no_telp_sekretaris,
			'namaBendahara' => $namaBendahara,
			'no_telp_bendahara' => $no_telp_bendahara,
			'namaPengawas' => $namaPengawas,
			'namaManager' => $namaManager,
		);

		$id_koperasi2 = $this->id_koperasi = $post['nikKoperasi'];
		$jmlAnggota_pria = $this->jmlAnggota_pria = $post['namaManager'];
		$jmlAnggota_wanita = $this->jmlAnggota_wanita = $post['namaManager'];
		$totalAnggota = $this->totalAnggota = $post['namaManager'];
		$totalManager = $this->totalManager = $post['namaManager'];
		$totalKaryawan = $this->totalKaryawan = $post['namaManager'];

		$data3 = array(
			'id_koperasi' => $id_koperasi2,
			'jmlAnggota_pria' => $jmlAnggota_pria,
			'jmlAnggota_wanita' => $jmlAnggota_wanita,
			'totalAnggota' => $totalAnggota,
			'totalManager' => $totalManager,
			'totalKaryawan' => $totalKaryawan,
		);
		if ($validation->run()) {
			$koperasi->simpan($data1, $data2, $data3);
			$this->session->set_flashdata('success', 'Data Berhasil disimpan!');
			redirect(site_url('koperasi'));
		}

		redirect(site_url('koperasi'));
	}

	public function editdata($id = null)
	{
		if (!isset($id)) redirect('koperasi');

		$data['dataKoperasi'] = $this->M_koperasi->getByID($id);
		$data['userdata'] = $this->userdata;

		$data['page'] = "edit_koperasi";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Edit Data";

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

	public function updatedata()
	{

		$koperasi = $this->M_koperasi;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules());

		$post = $this->input->post();
		$id_data_koperasi = $this->id = $post['id'];
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

		$data1 = array(
			'id' => $id_data_koperasi,
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
		);

		$id_data_pengurus = $this->id = $post['id'];
		$id_koperasi = $this->id_koperasi = $post['nikKoperasi'];
		$namaKetua = $this->namaKetua = $post['namaKetua'];
		$no_telp_ketua = $this->no_telp_ketua = $post['no_telp_ketua'];
		$namaSekretaris = $this->namaSekretaris = $post['namaSekretaris'];
		$no_telp_sekretaris = $this->no_telp_sekretaris = $post['no_telp_sekretaris'];
		$namaBendahara = $this->namaBendahara = $post['namaBendahara'];
		$no_telp_bendahara = $this->no_telp_bendahara = $post['no_telp_bendahara'];
		$namaPengawas = $this->namaPengawas = $post['namaPengawas'];
		$namaManager = $this->namaManager = $post['namaManager'];

		$data2 = array(
			'id' => $id_data_pengurus,
			'id_koperasi' => $id_koperasi,
			'namaKetua' => $namaKetua,
			'no_telp_ketua' => $no_telp_ketua,
			'namaSekretaris' => $namaSekretaris,
			'no_telp_sekretaris' => $no_telp_sekretaris,
			'namaBendahara' => $namaBendahara,
			'no_telp_bendahara' => $no_telp_bendahara,
			'namaPengawas' => $namaPengawas,
			'namaManager' => $namaManager,
		);

		$id_kelembagaan = $this->id = $post['id'];
		$id_koperasi2 = $this->id_koperasi = $post['nikKoperasi'];
		$jmlAnggota_pria = $this->jmlAnggota_pria = $post['namaManager'];
		$jmlAnggota_wanita = $this->jmlAnggota_wanita = $post['namaManager'];
		$totalAnggota = $this->totalAnggota = $post['namaManager'];
		$totalManager = $this->totalManager = $post['namaManager'];
		$totalKaryawan = $this->totalKaryawan = $post['namaManager'];

		$data3 = array(
			'id' => $id_kelembagaan,
			'id_koperasi' => $id_koperasi2,
			'jmlAnggota_pria' => $jmlAnggota_pria,
			'jmlAnggota_wanita' => $jmlAnggota_wanita,
			'totalAnggota' => $totalAnggota,
			'totalManager' => $totalManager,
			'totalKaryawan' => $totalKaryawan,
		);

		if ($validation->run()) {
			$koperasi->updatedata($data1,$data2,$data3);
			$this->session->set_flashdata('update', 'Data Berhasil diperbaharui');
			redirect(site_url('koperasi'));
		}
	}

	public function hapusdata($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_koperasi->hapus($id)) {
			$this->session->set_flashdata('delete', 'Data Berhasil Dihapus!');
			redirect(site_url('koperasi'));
		}
	}
}
