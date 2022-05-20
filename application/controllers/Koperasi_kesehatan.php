<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koperasi_kesehatan extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_koperasi_kesehatan');
		// $this->load->model('M_koperasi');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		// $data['koperasi'] = $this->M_koperasi->getAll();

		$data['page'] = "koperasi_kesehatan";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Tambah Data Kesehatan";

		$this->template->views('koperasi/kesehatan/add_quiz', $data);
	}

	public function inputdata_keuangan()
	{
		$data['userdata'] = $this->userdata;

		$data['page'] = "koperasi_keuangan";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Tambah Data Keuangan";

		$this->template->views('koperasi/kesehatan/add_keuangan', $data);
	}

	public function view_data($id)
	{
		$data['userdata'] = $this->userdata;

		$data['page'] = "koperasi_keuangan";
		$data['judul'] = "Data Kesehatan Koperasi";
		$data['deskripsi'] = "View Data";

		$dataKes = $this->M_koperasi_kesehatan->getByID($id);
		$id_tb_dataKesehatan1 = $dataKes->tb_dataKesehatan1;
		$id_tb_dataKesehatan2 = $dataKes->tb_dataKesehatan2;
		$data['dataKesehatan1'] = $this->M_koperasi_kesehatan->getKes1ByID($id_tb_dataKesehatan1);
		$data['dataKesehatan2'] = $this->M_koperasi_kesehatan->getKes2ByID($id_tb_dataKesehatan2);

		$this->template->views('koperasi/kesehatan/view_dataKesehatan', $data);
	}

	// simpan data kesehatan1
	public function simpanKesehatan1()
	{
		$koperasi = $this->M_koperasi_kesehatan;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules_simpan());

		$post = $this->input->post();
		$tahun = $this->tahun = 2020;

		// sub1
		$AI1a = $this->AI1a = $post['AI1a'];
		$AI1b = $this->AI1b = $post['AI1b'];
		$AI1c = $this->AI1c = $post['AI1c'];
		$AI1d = $this->AI1d = $post['AI1d'];
		$AI2a = $this->AI2a = $post['AI2a'];
		$AI2b = $this->AI2b = $post['AI2b'];
		$AI2c = $this->AI2c = $post['AI2c'];
		$AI2d = $this->AI2d = $post['AI2d'];
		$AI2e = $this->AI2e = $post['AI2e'];
		$AI3a = $this->AI3a = $post['AI3a'];
		$AI3b = $this->AI3b = $post['AI3b'];
		$AI3c = $this->AI3c = $post['AI3c'];
		$AI4a = $this->AI4a = $post['AI4a'];
		$AI4b = $this->AI4b = $post['AI4b'];
		$AI4c = $this->AI4c = $post['AI4c'];
		$AI4d = $this->AI4d = $post['AI4d'];
		$AI5a = $this->AI5a = $post['AI5a'];
		$AI5b = $this->AI5b = $post['AI5b'];
		$AI5c = $this->AI5c = $post['AI5c'];
		$AI5d = $this->AI5d = $post['AI5d'];
		$AI6a = $this->AI6a = $post['AI6a'];
		$AI6b = $this->AI6b = $post['AI6b'];
		$AI6c = $this->AI6c = $post['AI6c'];
		$AI6d = $this->AI6d = $post['AI6d'];
		$AI7a = $this->AI7a = $post['AI7a'];
		$AI7b = $this->AI7b = $post['AI7b'];
		$AI7c = $this->AI7c = $post['AI7c'];
		$AI7d = $this->AI7d = $post['AI7d'];
		$AII1a = $this->AII1a = $post['AII1a'];

		// sub2
		$AII1b = $this->AII1b = $post['AII1b'];
		$AII1c = $this->AII1c = $post['AII1c'];
		$AII2a = $this->AII2a = $post['AII2a'];
		$AII2b = $this->AII2b = $post['AII2b'];
		$AII2c = $this->AII2c = $post['AII2c'];
		$AII3a = $this->AII3a = $post['AII3a'];
		$AII3b = $this->AII3b = $post['AII3b'];
		$AII3c = $this->AII3c = $post['AII3c'];
		$AII3d = $this->AII3d = $post['AII3d'];
		$AII3e = $this->AII3e = $post['AII3e'];
		$AII3f = $this->AII3f = $post['AII3f'];
		$AII3g = $this->AII3g = $post['AII3g'];
		$AII3h = $this->AII3h = $post['AII3h'];
		$AII3i = $this->AII3i = $post['AII3i'];
		$AII3j = $this->AII3j = $post['AII3j'];
		$AII3k = $this->AII3k = $post['AII3k'];
		$AII3l = $this->AII3l = $post['AII3l'];
		$AII3m = $this->AII3m = $post['AII3m'];
		$AII3n = $this->AII3n = $post['AII3n'];
		$AII3o = $this->AII3o = $post['AII3o'];
		$AII3p = $this->AII3p = $post['AII3p'];
		$AII3q = $this->AII3q = $post['AII3q'];
		$AII4a = $this->AII4a = $post['AII4a'];
		$AII4b = $this->AII4b = $post['AII4b'];
		$AII4c = $this->AII4c = $post['AII4c'];
		$AII4d = $this->AII4d = $post['AII4d'];
		$AII5a = $this->AII5a = $post['AII5a'];
		$AII5b = $this->AII5b = $post['AII5b'];
		$AII5c = $this->AII5c = $post['AII5c'];

		// sub3
		$AIII1a = $this->AIII1a = $post['AIII1a'];
		$AIII1b = $this->AIII1b = $post['AIII1b'];
		$AIII1c = $this->AIII1c = $post['AIII1c'];
		$AIII2a = $this->AIII2a = $post['AIII2a'];
		$AIII2b = $this->AIII2b = $post['AIII2b'];
		$AIII2c = $this->AIII2c = $post['AIII2c'];
		$AIII2d = $this->AIII2d = $post['AIII2d'];
		$AIII3a = $this->AIII3a = $post['AIII3a'];
		$AIII3b = $this->AIII3b = $post['AIII3b'];
		$AIII3c = $this->AIII3c = $post['AIII3c'];
		$AIII3d = $this->AIII3d = $post['AIII3d'];
		$AIII4a = $this->AIII4a = $post['AIII4a'];
		$AIII4b = $this->AIII4b = $post['AIII4b'];
		$AIII4c = $this->AIII4c = $post['AIII4c'];
		$AIII4d = $this->AIII4d = $post['AIII4d'];
		$AIII5a = $this->AIII5a = $post['AIII5a'];
		$AIII5b = $this->AIII5b = $post['AIII5b'];
		$AIII5c = $this->AIII5c = $post['AIII5c'];
		$AIII5d = $this->AIII5d = $post['AIII5d'];
		$BI1Aa = $this->BI1Aa = $post['BI1Aa'];
		$BI1Ab = $this->BI1Ab = $post['BI1Ab'];
		$BI1Ac = $this->BI1Ac = $post['BI1Ac'];
		$BI1Ad = $this->BI1Ad = $post['BI1Ad'];
		$BI1Ba = $this->BI1Ba = $post['BI1Ba'];
		$BI1Bb = $this->BI1Bb = $post['BI1Bb'];
		$BI1Bc = $this->BI1Bc = $post['BI1Bc'];
		$BI1Bd = $this->BI1Bd = $post['BI1Bd'];
		$BI2Aa = $this->BI2Aa = $post['BI2Aa'];
		$BI2Ab = $this->BI2Ab = $post['BI2Ab'];

		// sub4
		$BI2Ac = $this->BI2Ac = $post['BI2Ac'];
		$BI2Ad = $this->BI2Ad = $post['BI2Ad'];
		$BI2Ba = $this->BI2Ba = $post['BI2Ba'];
		$BI2Bb = $this->BI2Bb = $post['BI2Bb'];
		$BI2Bc = $this->BI2Bc = $post['BI2Bc'];
		$BI2Bd = $this->BI2Bd = $post['BI2Bd'];
		$BI3Aa = $this->BI3Aa = $post['BI3Aa'];
		$BI3Ab = $this->BI3Ab = $post['BI3Ab'];
		$BI3Ac = $this->BI3Ac = $post['BI3Ac'];
		$BI3Ad = $this->BI3Ad = $post['BI3Ad'];
		$BI3Ae = $this->BI3Ae = $post['BI3Ae'];
		$BII1Aa = $this->BII1Aa = $post['BII1Aa'];
		$BII1Ab = $this->BII1Ab = $post['BII1Ab'];
		$BII1Ac = $this->BII1Ac = $post['BII1Ac'];
		$BII1Ad = $this->BII1Ad = $post['BII1Ad'];
		$BII1Ba = $this->BII1Ba = $post['BII1Ba'];
		$BII1Bb = $this->BII1Bb = $post['BII1Bb'];
		$BII1Bc = $this->BII1Bc = $post['BII1Bc'];
		$BII1Ca = $this->BII1Ca = $post['BII1Ca'];
		$BII1Cb = $this->BII1Cb = $post['BII1Cb'];
		$BII1Cc = $this->BII1Cc = $post['BII1Cc'];
		$BII1Cd = $this->BII1Cd = $post['BII1Cd'];
		$BII2Aa = $this->BII2Aa = $post['BII2Aa'];
		$BII2Ab = $this->BII2Ab = $post['BII2Ab'];
		$BII2Ac = $this->BII2Ac = $post['BII2Ac'];
		$BII2Ad = $this->BII2Ad = $post['BII2Ad'];
		$BII2Ba = $this->BII2Ba = $post['BII2Ba'];
		$BII2Bb = $this->BII2Bb = $post['BII2Bb'];
		$BII2Bc = $this->BII2Bc = $post['BII2Bc'];

		// sub5
		$BII2Ca = $this->BII2Ca = $post['BII2Ca'];
		$BII2Cb = $this->BII2Cb = $post['BII2Cb'];
		$BII2Cc = $this->BII2Cc = $post['BII2Cc'];
		$BII2Cd = $this->BII2Cd = $post['BII2Cd'];
		$BII3Aa = $this->BII3Aa = $post['BII3Aa'];
		$BII3Ab = $this->BII3Ab = $post['BII3Ab'];
		$BII3Ac = $this->BII3Ac = $post['BII3Ac'];
		$BII3Ad = $this->BII3Ad = $post['BII3Ad'];
		$BII3Ba = $this->BII3Ba = $post['BII3Ba'];
		$BII3Bb = $this->BII3Bb = $post['BII3Bb'];
		$BII3Bc = $this->BII3Bc = $post['BII3Bc'];
		$BII3Bd = $this->BII3Bd = $post['BII3Bd'];
		$BII3Ca = $this->BII3Ca = $post['BII3Ca'];
		$BII3Cb = $this->BII3Cb = $post['BII3Cb'];
		$BII3Cc = $this->BII3Cc = $post['BII3Cc'];
		$BII3Cd = $this->BII3Cd = $post['BII3Cd'];
		$BII4Aa = $this->BII4Aa = $post['BII4Aa'];
		$BII4Ab = $this->BII4Ab = $post['BII4Ab'];
		$BII4Ac = $this->BII4Ac = $post['BII4Ac'];
		$BII4Ad = $this->BII4Ad = $post['BII4Ad'];
		$BII4Ba = $this->BII4Ba = $post['BII4Ba'];
		$BII4Bb = $this->BII4Bb = $post['BII4Bb'];
		$BII4Bc = $this->BII4Bc = $post['BII4Bc'];
		$BII4Bd = $this->BII4Bd = $post['BII4Bd'];
		$BII4Be = $this->BII4Be = $post['BII4Be'];
		$BII4Ca = $this->BII4Ca = $post['BII4Ca'];
		$BII4Cb = $this->BII4Cb = $post['BII4Cb'];
		$BII4Cc = $this->BII4Cc = $post['BII4Cc'];
		$BII4Cd = $this->BII4Cd = $post['BII4Cd'];

		$nikKoperasi = $this->nikKoperasi = 0;



		// sub1
		$data1 = array(
			'AI1a' => $AI1a,
			'AI1b' => $AI1b,
			'AI1c' => $AI1c,
			'AI1d' => $AI1d,
			'AI2a' => $AI2a,
			'AI2b' => $AI2b,
			'AI2c' => $AI2c,
			'AI2d' => $AI2d,
			'AI2e' => $AI2e,
			'AI3a' => $AI3a,
			'AI3b' => $AI3b,
			'AI3c' => $AI3c,
			'AI4a' => $AI4a,
			'AI4b' => $AI4b,
			'AI4c' => $AI4c,
			'AI4d' => $AI4d,
			'AI5a' => $AI5a,
			'AI5b' => $AI5b,
			'AI5c' => $AI5c,
			'AI5d' => $AI5d,
			'AI6a' => $AI6a,
			'AI6b' => $AI6b,
			'AI6c' => $AI6c,
			'AI6d' => $AI6d,
			'AI7a' => $AI7a,
			'AI7b' => $AI7b,
			'AI7c' => $AI7c,
			'AI7d' => $AI7d,
			'AII1a' => $AII1a,


		);

		// sub2
		$data2 = array(
			'AII1b' => $AII1b,
			'AII1c' => $AII1c,
			'AII2a' => $AII2a,
			'AII2b' => $AII2b,
			'AII2c' => $AII2c,
			'AII3a' => $AII3a,
			'AII3b' => $AII3b,
			'AII3c' => $AII3c,
			'AII3d' => $AII3d,
			'AII3e' => $AII3e,
			'AII3f' => $AII3f,
			'AII3g' => $AII3g,
			'AII3h' => $AII3h,
			'AII3i' => $AII3i,
			'AII3j' => $AII3j,
			'AII3k' => $AII3k,
			'AII3l' => $AII3l,
			'AII3m' => $AII3m,
			'AII3n' => $AII3n,
			'AII3o' => $AII3o,
			'AII3p' => $AII3p,
			'AII3q' => $AII3q,
			'AII4a' => $AII4a,
			'AII4b' => $AII4b,
			'AII4c' => $AII4c,
			'AII4d' => $AII4d,
			'AII5a' => $AII5a,
			'AII5b' => $AII5b,
			'AII5c' => $AII5c,


		);

		// sub3
		$data3 = array(
			'AIII1a' => $AIII1a,
			'AIII1b' => $AIII1b,
			'AIII1c' => $AIII1c,
			'AIII2a' => $AIII2a,
			'AIII2b' => $AIII2b,
			'AIII2c' => $AIII2c,
			'AIII2d' => $AIII2d,
			'AIII3a' => $AIII3a,
			'AIII3b' => $AIII3b,
			'AIII3c' => $AIII3c,
			'AIII3d' => $AIII3d,
			'AIII4a' => $AIII4a,
			'AIII4b' => $AIII4b,
			'AIII4c' => $AIII4c,
			'AIII4d' => $AIII4d,
			'AIII5a' => $AIII5a,
			'AIII5b' => $AIII5b,
			'AIII5c' => $AIII5c,
			'AIII5d' => $AIII5d,
			'BI1Aa' => $BI1Aa,
			'BI1Ab' => $BI1Ab,
			'BI1Ac' => $BI1Ac,
			'BI1Ad' => $BI1Ad,
			'BI1Ba' => $BI1Ba,
			'BI1Bb' => $BI1Bb,
			'BI1Bc' => $BI1Bc,
			'BI1Bd' => $BI1Bd,
			'BI2Aa' => $BI2Aa,
			'BI2Ab' => $BI2Ab,


		);
		// sub4
		$data4 = array(
			'BI2Ac' => $BI2Ac,
			'BI2Ad' => $BI2Ad,
			'BI2Ba' => $BI2Ba,
			'BI2Bb' => $BI2Bb,
			'BI2Bc' => $BI2Bc,
			'BI2Bd' => $BI2Bd,
			'BI3Aa' => $BI3Aa,
			'BI3Ab' => $BI3Ab,
			'BI3Ac' => $BI3Ac,
			'BI3Ad' => $BI3Ad,
			'BI3Ae' => $BI3Ae,
			'BII1Aa' => $BII1Aa,
			'BII1Ab' => $BII1Ab,
			'BII1Ac' => $BII1Ac,
			'BII1Ad' => $BII1Ad,
			'BII1Ba' => $BII1Ba,
			'BII1Bb' => $BII1Bb,
			'BII1Bc' => $BII1Bc,
			'BII1Ca' => $BII1Ca,
			'BII1Cb' => $BII1Cb,
			'BII1Cc' => $BII1Cc,
			'BII1Cd' => $BII1Cd,
			'BII2Aa' => $BII2Aa,
			'BII2Ab' => $BII2Ab,
			'BII2Ac' => $BII2Ac,
			'BII2Ad' => $BII2Ad,
			'BII2Ba' => $BII2Ba,
			'BII2Bb' => $BII2Bb,
			'BII2Bc' => $BII2Bc,
		);
		// sub5
		$data5 = array(
			'BII2Ca' => $BII2Ca,
			'BII2Cb' => $BII2Cb,
			'BII2Cc' => $BII2Cc,
			'BII2Cd' => $BII2Cd,
			'BII3Aa' => $BII3Aa,
			'BII3Ab' => $BII3Ab,
			'BII3Ac' => $BII3Ac,
			'BII3Ad' => $BII3Ad,
			'BII3Ba' => $BII3Ba,
			'BII3Bb' => $BII3Bb,
			'BII3Bc' => $BII3Bc,
			'BII3Bd' => $BII3Bd,
			'BII3Ca' => $BII3Ca,
			'BII3Cb' => $BII3Cb,
			'BII3Cc' => $BII3Cc,
			'BII3Cd' => $BII3Cd,
			'BII4Aa' => $BII4Aa,
			'BII4Ab' => $BII4Ab,
			'BII4Ac' => $BII4Ac,
			'BII4Ad' => $BII4Ad,
			'BII4Ba' => $BII4Ba,
			'BII4Bb' => $BII4Bb,
			'BII4Bc' => $BII4Bc,
			'BII4Bd' => $BII4Bd,
			'BII4Be' => $BII4Be,
			'BII4Ca' => $BII4Ca,
			'BII4Cb' => $BII4Cb,
			'BII4Cc' => $BII4Cc,
			'BII4Cd' => $BII4Cd,
		);


		$id_sub = $koperasi->tambahKesehatan1($data1, $data2, $data3, $data4, $data5);
		// var_dump($id_sub);
		// die();
		$data6 = array(
			'idKoperasi' => $nikKoperasi,
			'tahun' => $tahun,
			'id_tb_kesehatan1sub1' => $id_sub[0],
			'id_tb_kesehatan1Sub2' => $id_sub[1],
			'id_tb_kesehatan1Sub3' => $id_sub[2],
			'id_tb_kesehatan1Sub4' => $id_sub[3],
			'id_tb_kesehatan1Sub5' => $id_sub[4],
		);
		
		$id_hub = $koperasi->tambahKesehatan1Master($data6);
		$cek_data = $koperasi->cek_dataKesM($nikKoperasi,$tahun);
		if($cek_data == FALSE){
			$dataM = array (
				'idKoperasi' => $nikKoperasi,
				'tahun' => $tahun,
				'tb_dataKesehatan1' => $id_hub,
			);
			$koperasi->tambahdataKesehatanM($dataM);
			redirect('koperasi');
		}else{
			$id = $this->id = $cek_data->id;
			$dataM = array (
				'idKoperasi' => $cek_data->idKoperasi,
				'tahun' => $cek_data->tahun,
				'tb_dataKesehatan1' => $id_hub,
				'tb_dataKesehatan2' => $cek_data->tb_dataKesehatan2,
			);
			$koperasi->updatedataKesehatanM($dataM,$id);
			redirect('koperasi');
		}
		// if ($this->validation->run() == FALSE) {

		// 	$this->session->set_flashdata('failed', validation_errors());
		// 	redirect('koperasi/inputdata');
		// } else {
		// 	$id_sub = $koperasi->tambahKesehatan1($data1, $data2, $data3, $data4, $data5);
		// 	$data6 = array(
		// 		'idKoperasi' => $nikKoperasi,
		// 		'tahun' => $tahun,
		// 		'id_tb_kesehatan1sub1' => $id_sub[0],
		// 		'id_tb_kesehatan1Sub2' => $id_sub[1],
		// 		'id_tb_kesehatan1Sub3' => $id_sub[2],
		// 		'id_tb_kesehatan1Sub4' => $id_sub[3],
		// 		'id_tb_kesehatan1Sub5' => $id_sub[4],
		// 	);
		// 	$koperasi->tambahKesehatan1Master($data6);
		// 	$this->session->set_flashdata('success', 'Data Berhasil disimpan!');
		// 	redirect('koperasi');
		// }

		// redirect(site_url('koperasi'));
	}
	public function simpanKesehatan2()
	{
		$koperasi = $this->M_koperasi_kesehatan;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules_simpan());

		$post = $this->input->post();
		// $nikKoperasi = $this->nikKoperasi = $post['nikKoperasi'];
		$nikKoperasi = $this->nikKoperasi = 0;
		// $tahun = $this->tahun = $post['tahun'];
		$tahun = $this->tahun = 2020;

		// sub 1
		$al_kas = $this->al_kas = $post['al_kas'];
		$al_giro = $this->al_giro = $post['al_giro'];
		$al_tabungan = $this->al_tabungan = $post['al_tabungan'];
		$al_deposito = $this->al_deposito = $post['al_deposito'];
		$al_simSKopLain = $this->al_simSKopLain = $post['al_simSKopLain'];
		$al_simBKopLain = $this->al_simBKopLain = $post['al_simBKopLain'];
		$al_suratBerharga = $this->al_suratBerharga = $post['al_suratBerharga'];
		$al_piutangAng = $this->al_piutangAng = $post['al_piutangAng'];
		$al_piutangCAng = $this->al_piutangCAng = $post['al_piutangCAng'];
		$al_piutangDKopLain = $this->al_piutangDKopLain = $post['al_piutangDKopLain'];
		$al_piutangBunga = $this->al_piutangBunga = $post['al_piutangBunga'];
		$al_piutangLainLain = $this->al_piutangLainLain = $post['al_piutangLainLain'];
		$al_penyisihanPTTert = $this->al_penyisihanPTTert = $post['al_penyisihanPTTert'];
		$al_premiAsuransi = $this->al_premiAsuransi = $post['al_premiAsuransi'];
		$al_perlengkapan = $this->al_perlengkapan = $post['al_perlengkapan'];
		$al_bebanDDimuka = $this->al_bebanDDimuka = $post['al_bebanDDimuka'];
		$al_pendapatanADiterima = $this->al_pendapatanADiterima = $post['al_pendapatanADiterima'];
		$al_persediaan = $this->al_persediaan = $post['al_persediaan'];
		$al_aktivaLLain = $this->al_aktivaLLain = $post['al_aktivaLLain'];
		$ijp_simTBerjangka = $this->ijp_simTBerjangka = $post['ijp_simTBerjangka'];
		$ijp_suratBerharga = $this->ijp_suratBerharga = $post['ijp_suratBerharga'];
		$ijp_simKSPLain = $this->ijp_simKSPLain = $post['ijp_simKSPLain'];
		$ijp_penyertaanKopLain = $this->ijp_penyertaanKopLain = $post['ijp_penyertaanKopLain'];
		$ijp_penyertaanLKLain = $this->ijp_penyertaanLKLain = $post['ijp_penyertaanLKLain'];
		$ijp_jangkaPlain = $this->ijp_jangkaPlain = $post['ijp_jangkaPlain'];
		$at_tanah = $this->at_tanah = $post['at_tanah'];
		$at_bangunan = $this->at_bangunan = $post['at_bangunan'];
		$at_kendaraan = $this->at_kendaraan = $post['at_kendaraan'];
		$at_inventarisP = $this->at_inventarisP = $post['at_inventarisP'];

		// sub2
		$at_akumulasiPenyusut = $this->at_akumulasiPenyusut = $post['at_akumulasiPenyusut'];
		$atb_aktivaTBrwjd = $this->atb_aktivaTBrwjd = $post['atb_aktivaTBrwjd'];
		$all_bebanDitangguh = $this->all_bebanDitangguh = $post['all_bebanDitangguh'];
		$all_amorBDitangguh = $this->all_amorBDitangguh = $post['all_amorBDitangguh'];
		$all_agunanDAlih = $this->all_agunanDAlih = $post['all_agunanDAlih'];
		$all_bebanPOpera = $this->all_bebanPOpera = $post['all_bebanPOpera'];
		$all_amorBPOpera = $this->all_amorBPOpera = $post['all_amorBPOpera'];
		$all_lainLain = $this->all_lainLain = $post['all_lainLain'];
		$hjp_tabunganSimAng = $this->hjp_tabunganSimAng = $post['hjp_tabunganSimAng'];
		$hjp_tabunganSimNAng = $this->hjp_tabunganSimNAng = $post['hjp_tabunganSimNAng'];
		$hjp_simBAng = $this->hjp_simBAng = $post['hjp_simBAng'];
		$hjp_berjangkaCAngKop = $this->hjp_berjangkaCAngKop = $post['hjp_berjangkaCAngKop'];
		$hjp_hutangBank = $this->hjp_hutangBank = $post['hjp_hutangBank'];
		$hjp_hutangLPDB = $this->hjp_hutangLPDB = $post['hjp_hutangLPDB'];
		$hjp_hutangPajak = $this->hjp_hutangPajak = $post['hjp_hutangPajak'];
		$hjp_bebanMHDibayar = $this->hjp_bebanMHDibayar = $post['hjp_bebanMHDibayar'];
		$hjp_pendapatanLDDimuka = $this->hjp_pendapatanLDDimuka = $post['hjp_pendapatanLDDimuka'];
		$hjp_hutangBiaya = $this->hjp_hutangBiaya = $post['hjp_hutangBiaya'];
		$hjp_danaBSHU = $this->hjp_danaBSHU = $post['hjp_danaBSHU'];
		$hjp_titipanDKAng = $this->hjp_titipanDKAng = $post['hjp_titipanDKAng'];
		$hjp_titipanJamKes = $this->hjp_titipanJamKes = $post['hjp_titipanJamKes'];
		$hjp_titipanZakat = $this->hjp_titipanZakat = $post['hjp_titipanZakat'];
		$hjp_hutangSGU = $this->hjp_hutangSGU = $post['hjp_hutangSGU'];
		$hjp_kewajibanJPLain = $this->hjp_kewajibanJPLain = $post['hjp_kewajibanJPLain'];
		$hjpng_hutangBank = $this->hjpng_hutangBank = $post['hjpng_hutangBank'];
		$hjpng_hutangJPKopLain = $this->hjpng_hutangJPKopLain = $post['hjpng_hutangJPKopLain'];
		$hjpng_antarKP = $this->hjpng_antarKP = $post['hjpng_antarKP'];
		$hjpng_simBerjangka = $this->hjpng_simBerjangka = $post['hjpng_simBerjangka'];
		$hjpng_titipanDJPjng = $this->hjpng_titipanDJPjng = $post['hjpng_titipanDJPjng'];

		// sub3
		$hjpng_hutangLPDB = $this->hjpng_hutangLPDB = $post['hjpng_hutangLPDB'];
		$hjpng_sewaGU = $this->hjpng_sewaGU = $post['hjpng_sewaGU'];
		$hjpng_hutangJPLain = $this->hjpng_hutangJPLain = $post['hjpng_hutangJPLain'];
		$eku_simPokok = $this->eku_simPokok = $post['eku_simPokok'];
		$eku_simWajib = $this->eku_simWajib = $post['eku_simWajib'];
		$eku_modalPenyetara = $this->eku_modalPenyetara = $post['eku_modalPenyetara'];
		$eku_modalPenyertaan = $this->eku_modalPenyertaan = $post['eku_modalPenyertaan'];
		$eku_modalSHD = $this->eku_modalSHD = $post['eku_modalSHD'];
		$eku_cadanganUmum = $this->eku_cadanganUmum = $post['eku_cadanganUmum'];
		$eku_cadanganTRes = $this->eku_cadanganTRes = $post['eku_cadanganTRes'];
		$eku_shuPSblm = $this->eku_shuPSblm = $post['eku_shuPSblm'];
		$eku_shuBrjln = $this->eku_shuBrjln = $post['eku_shuBrjln'];
		$pba_pendapatanJPAng = $this->pba_pendapatanJPAng = $post['pba_pendapatanJPAng'];
		$pba_pendapatanAdminAng = $this->pba_pendapatanAdminAng = $post['pba_pendapatanAdminAng'];
		$pba_pendapatanPang = $this->pba_pendapatanPang = $post['pba_pendapatanPang'];
		$pba_pendapatanJPLainAng = $this->pba_pendapatanJPLainAng = $post['pba_pendapatanJPLainAng'];
		$pdna_pendapatanJSimNang = $this->pdna_pendapatanJSimNang = $post['pdna_pendapatanJSimNang'];
		$pdna_pendapatanAdminNAng = $this->pdna_pendapatanAdminNAng = $post['pdna_pendapatanAdminNAng'];
		$pdna_pendapatanPNang = $this->pdna_pendapatanPNang = $post['pdna_pendapatanPNang'];
		$pdna_pendapatanJPLainNAng = $this->pdna_pendapatanJPLainNAng = $post['pdna_pendapatanJPLainNAng'];
		$bpa_bebanJSimTAng = $this->bpa_bebanJSimTAng = $post['bpa_bebanJSimTAng'];
		$bpa_bebanJSimBAng = $this->bpa_bebanJSimBAng = $post['bpa_bebanJSimBAng'];
		$bpna_bebanJSimTNang = $this->bpna_bebanJSimTNang = $post['bpna_bebanJSimTNang'];
		$bpna_bebanJSimBNang = $this->bpna_bebanJSimBNang = $post['bpna_bebanJSimBNang'];
		$bpna_bebanJHBank = $this->bpna_bebanJHBank = $post['bpna_bebanJHBank'];
		$bpna_bebanJPLPDB = $this->bpna_bebanJPLPDB = $post['bpna_bebanJPLPDB'];
		$bpna_bebanJMPenyerta = $this->bpna_bebanJMPenyerta = $post['bpna_bebanJMPenyerta'];
		$bpna_bebanJPP3 = $this->bpna_bebanJPP3 = $post['bpna_bebanJPP3'];
		$bu_biayaPPPiutang = $this->bu_biayaPPPiutang = $post['bu_biayaPPPiutang'];

		// sub4
		$bu_biayaBPinj = $this->bu_biayaBPinj = $post['bu_biayaBPinj'];
		$bu_honorKaryawan = $this->bu_honorKaryawan = $post['bu_honorKaryawan'];
		$bu_biayaPerleng = $this->bu_biayaPerleng = $post['bu_biayaPerleng'];
		$bu_biayaAsuransi = $this->bu_biayaAsuransi = $post['bu_biayaAsuransi'];
		$bu_biayaLAT = $this->bu_biayaLAT = $post['bu_biayaLAT'];
		$bu_biayaPenyusut = $this->bu_biayaPenyusut = $post['bu_biayaPenyusut'];
		$bu_biayaLainLain = $this->bu_biayaLainLain = $post['bu_biayaLainLain'];
		$bu_biayaPemeliha = $this->bu_biayaPemeliha = $post['bu_biayaPemeliha'];
		$bu_biayaPromoP = $this->bu_biayaPromoP = $post['bu_biayaPromoP'];
		$bu_biayaAKonsum = $this->bu_biayaAKonsum = $post['bu_biayaAKonsum'];
		$bu_biayaTrans = $this->bu_biayaTrans = $post['bu_biayaTrans'];
		$bu_biayaAdminU = $this->bu_biayaAdminU = $post['bu_biayaAdminU'];
		$bu_biayaPajak = $this->bu_biayaPajak = $post['bu_biayaPajak'];
		$biayaSTBrjln = $this->biayaSTBrjln = $post['biayaSTBrjln'];
		$bu_biayaOpsLain = $this->bu_biayaOpsLain = $post['bu_biayaOpsLain'];
		$bp_bebanPPKop = $this->bp_bebanPPKop = $post['bp_bebanPPKop'];
		$bp_bebanPembinaan = $this->bp_bebanPembinaan = $post['bp_bebanPembinaan'];
		$bp_bebanRAng = $this->bp_bebanRAng = $post['bp_bebanRAng'];
		$pll_pendapatanDBHU = $this->pll_pendapatanDBHU = $post['pll_pendapatanDBHU'];
		$pll_pendapatanSewa = $this->pll_pendapatanSewa = $post['pll_pendapatanSewa'];
		$pll_pendapatanLainLain = $this->pll_pendapatanLainLain = $post['pll_pendapatanLainLain'];
		$bll_biayaLainlain = $this->bll_biayaLainlain = $post['bll_biayaLainlain'];
		$pp_pajakPeng = $this->pp_pajakPeng = $post['pp_pajakPeng'];
		$pb_pkl = $this->pb_pkl = $post['pb_pkl'];
		$pb_pdr = $this->pb_pdr = $post['pb_pdr'];
		$pb_pembiayaanMacet = $this->pb_pembiayaanMacet = $post['pb_pembiayaanMacet'];
		$ag_nilaiAPKLancar = $this->ag_nilaiAPKLancar = $post['ag_nilaiAPKLancar'];
		$ag_nilaiAPDiragukan = $this->ag_nilaiAPDiragukan = $post['ag_nilaiAPDiragukan'];
		$ag_nilaiAPMacet = $this->ag_nilaiAPMacet = $post['ag_nilaiAPMacet'];



		// sub1
		$data1 = array(
			'al_kas' => $al_kas,
			'al_giro' => $al_giro,
			'al_tabungan' => $al_tabungan,
			'al_deposito' => $al_deposito,
			'al_simSKopLain' => $al_simSKopLain,
			'al_simBKopLain' => $al_simBKopLain,
			'al_suratBerharga' => $al_suratBerharga,
			'al_piutangAng' => $al_piutangAng,
			'al_piutangCAng' => $al_piutangCAng,
			'al_piutangDKopLain' => $al_piutangDKopLain,
			'al_piutangBunga' => $al_piutangBunga,
			'al_piutangLainLain' => $al_piutangLainLain,
			'al_penyisihanPTTert' => $al_penyisihanPTTert,
			'al_premiAsuransi' => $al_premiAsuransi,
			'al_perlengkapan' => $al_perlengkapan,
			'al_bebanDDimuka' => $al_bebanDDimuka,
			'al_pendapatanADiterima' => $al_pendapatanADiterima,
			'al_persediaan' => $al_persediaan,
			'al_aktivaLLain' => $al_aktivaLLain,
			'ijp_simTBerjangka' => $ijp_simTBerjangka,
			'ijp_suratBerharga' => $ijp_suratBerharga,
			'ijp_simKSPLain' => $ijp_simKSPLain,
			'ijp_penyertaanKopLain' => $ijp_penyertaanKopLain,
			'ijp_penyertaanLKLain' => $ijp_penyertaanLKLain,
			'ijp_jangkaPlain' => $ijp_jangkaPlain,
			'at_tanah' => $at_tanah,
			'at_bangunan' => $at_bangunan,
			'at_kendaraan' => $at_kendaraan,
			'at_inventarisP' => $at_inventarisP,

		);
		// sub2
		$data2 = array(
			'at_akumulasiPenyusut' => $at_akumulasiPenyusut,
			'atb_aktivaTBrwjd' => $atb_aktivaTBrwjd,
			'all_bebanDitangguh' => $all_bebanDitangguh,
			'all_amorBDitangguh' => $all_amorBDitangguh,
			'all_agunanDAlih' => $all_agunanDAlih,
			'all_bebanPOpera' => $all_bebanPOpera,
			'all_amorBPOpera' => $all_amorBPOpera,
			'all_lainLain' => $all_lainLain,
			'hjp_tabunganSimAng' => $hjp_tabunganSimAng,
			'hjp_tabunganSimNAng' => $hjp_tabunganSimNAng,
			'hjp_simBAng' => $hjp_simBAng,
			'hjp_berjangkaCAngKop' => $hjp_berjangkaCAngKop,
			'hjp_hutangBank' => $hjp_hutangBank,
			'hjp_hutangLPDB' => $hjp_hutangLPDB,
			'hjp_hutangPajak' => $hjp_hutangPajak,
			'hjp_bebanMHDibayar' => $hjp_bebanMHDibayar,
			'hjp_pendapatanLDDimuka' => $hjp_pendapatanLDDimuka,
			'hjp_hutangBiaya' => $hjp_hutangBiaya,
			'hjp_danaBSHU' => $hjp_danaBSHU,
			'hjp_titipanDKAng' => $hjp_titipanDKAng,
			'hjp_titipanJamKes' => $hjp_titipanJamKes,
			'hjp_titipanZakat' => $hjp_titipanZakat,
			'hjp_hutangSGU' => $hjp_hutangSGU,
			'hjp_kewajibanJPLain' => $hjp_kewajibanJPLain,
			'hjpng_hutangBank' => $hjpng_hutangBank,
			'hjpng_hutangJPKopLain' => $hjpng_hutangJPKopLain,
			'hjpng_antarKP' => $hjpng_antarKP,
			'hjpng_simBerjangka' => $hjpng_simBerjangka,
			'hjpng_titipanDJPjng' => $hjpng_titipanDJPjng,
		);
		// sub3
		$data3 = array(
			'hjpng_hutangLPDB' => $hjpng_hutangLPDB,
			'hjpng_sewaGU' => $hjpng_sewaGU,
			'hjpng_hutangJPLain' => $hjpng_hutangJPLain,
			'eku_simPokok' => $eku_simPokok,
			'eku_simWajib' => $eku_simWajib,
			'eku_modalPenyetara' => $eku_modalPenyetara,
			'eku_modalPenyertaan' => $eku_modalPenyertaan,
			'eku_modalSHD' => $eku_modalSHD,
			'eku_cadanganUmum' => $eku_cadanganUmum,
			'eku_cadanganTRes' => $eku_cadanganTRes,
			'eku_shuPSblm' => $eku_shuPSblm,
			'eku_shuBrjln' => $eku_shuBrjln,
			'pba_pendapatanJPAng' => $pba_pendapatanJPAng,
			'pba_pendapatanAdminAng' => $pba_pendapatanAdminAng,
			'pba_pendapatanPang' => $pba_pendapatanPang,
			'pba_pendapatanJPLainAng' => $pba_pendapatanJPLainAng,
			'pdna_pendapatanJSimNang' => $pdna_pendapatanJSimNang,
			'pdna_pendapatanAdminNAng' => $pdna_pendapatanAdminNAng,
			'pdna_pendapatanPNang' => $pdna_pendapatanPNang,
			'pdna_pendapatanJPLainNAng' => $pdna_pendapatanJPLainNAng,
			'bpa_bebanJSimTAng' => $bpa_bebanJSimTAng,
			'bpa_bebanJSimBAng' => $bpa_bebanJSimBAng,
			'bpna_bebanJSimTNang' => $bpna_bebanJSimTNang,
			'bpna_bebanJSimBNang' => $bpna_bebanJSimBNang,
			'bpna_bebanJHBank' => $bpna_bebanJHBank,
			'bpna_bebanJPLPDB' => $bpna_bebanJPLPDB,
			'bpna_bebanJMPenyerta' => $bpna_bebanJMPenyerta,
			'bpna_bebanJPP3' => $bpna_bebanJPP3,
			'bu_biayaPPPiutang' => $bu_biayaPPPiutang,
		);
		// sub4
		$data4 = array(
			'bu_biayaBPinj' => $bu_biayaBPinj,
			'bu_honorKaryawan' => $bu_honorKaryawan,
			'bu_biayaPerleng' => $bu_biayaPerleng,
			'bu_biayaAsuransi' => $bu_biayaAsuransi,
			'bu_biayaLAT' => $bu_biayaLAT,
			'bu_biayaPenyusut' => $bu_biayaPenyusut,
			'bu_biayaLainLain' => $bu_biayaLainLain,
			'bu_biayaPemeliha' => $bu_biayaPemeliha,
			'bu_biayaPromoP' => $bu_biayaPromoP,
			'bu_biayaAKonsum' => $bu_biayaAKonsum,
			'bu_biayaTrans' => $bu_biayaTrans,
			'bu_biayaAdminU' => $bu_biayaAdminU,
			'bu_biayaPajak' => $bu_biayaPajak,
			'biayaSTBrjln' => $biayaSTBrjln,
			'bu_biayaOpsLain' => $bu_biayaOpsLain,
			'bp_bebanPPKop' => $bp_bebanPPKop,
			'bp_bebanPembinaan' => $bp_bebanPembinaan,
			'bp_bebanRAng' => $bp_bebanRAng,
			'pll_pendapatanDBHU' => $pll_pendapatanDBHU,
			'pll_pendapatanSewa' => $pll_pendapatanSewa,
			'pll_pendapatanLainLain' => $pll_pendapatanLainLain,
			'bll_biayaLainlain' => $bll_biayaLainlain,
			'pp_pajakPeng' => $pp_pajakPeng,
			'pb_pkl' => $pb_pkl,
			'pb_pdr' => $pb_pdr,
			'pb_pembiayaanMacet' => $pb_pembiayaanMacet,
			'ag_nilaiAPKLancar' => $ag_nilaiAPKLancar,
			'ag_nilaiAPDiragukan' => $ag_nilaiAPDiragukan,
			'ag_nilaiAPMacet' => $ag_nilaiAPMacet,
		);

		$id_sub = $koperasi->tambahKesehatan2($data1, $data2, $data3, $data4);
		// var_dump($id_sub);

		$data5 = array(
			'idKoperasi' => $nikKoperasi,
			'tahun' => $tahun,
			'id_tb_kesehatan2Sub1' => $id_sub[0],
			'id_tb_kesehatan2Sub2' => $id_sub[1],
			'id_tb_kesehatan2Sub3' => $id_sub[2],
			'id_tb_kesehatan2Sub4' => $id_sub[3],

		);
		$id_hub = $koperasi->tambahKesehatan2Master($data5);
		$cek_data = $koperasi->cek_dataKesM($nikKoperasi,$tahun);
		if($cek_data == FALSE){
			$dataM = array (
				'idKoperasi' => $nikKoperasi,
				'tahun' => $tahun,
				'tb_dataKesehatan2' => $id_hub,
			);
			$koperasi->tambahdataKesehatanM($dataM);
			redirect('koperasi');
		}else{
			$id = $this->id = $cek_data->id;
			$dataM = array (
				'idKoperasi' => $cek_data->idKoperasi,
				'tahun' => $cek_data->tahun,
				'tb_dataKesehatan1' => $cek_data->tb_dataKesehatan1,
				'tb_dataKesehatan2' => $id_hub,
			);
			$koperasi->updatedataKesehatanM($dataM,$id);
			redirect('koperasi');
		}
		// if ($this->validation->run() == FALSE) {

		// 	$this->session->set_flashdata('failed', validation_errors());
		// 	redirect('koperasi/inputdata');
		// } else {


		// 	$this->session->set_flashdata('success', 'Data Berhasil disimpan!');
		// 	redirect('koperasi');
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
