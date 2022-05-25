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

	public function inputData_kes1 ($nikKoperasi = NULL){

		if (!isset($nikKoperasi)) redirect('koperasi');
		$data['userdata'] = $this->userdata;
		$data['page'] = "koperasi_kesehatan";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Tambah Data Kesehatan";

		$data['nikKoperasi'] = $nikKoperasi;

		$this->template->views('koperasi/kesehatan/add_quiz', $data);
	}

	public function inputdata_kes2($nikKoperasi = NULL)
	{
		if (!isset($nikKoperasi)) redirect('koperasi');
		$data['userdata'] = $this->userdata;

		$data['page'] = "koperasi_keuangan";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Tambah Data Keuangan";

		$data['nikKoperasi'] = $nikKoperasi;

		$this->template->views('koperasi/kesehatan/add_keuangan', $data);
	}

	public function view_data($id)
	{
		$data['userdata'] = $this->userdata;

		$data['page'] = "koperasi_keuangan";
		$data['judul'] = "Data Kesehatan Koperasi";
		$data['deskripsi'] = "View Data";

		$dataKes = $this->M_koperasi_kesehatan->getByID($id);
		if($dataKes->tb_dataKesehatan1 == NULL){
			echo "NULL";
		}else{
			$id_tb_dataKesehatan1 = $dataKes->tb_dataKesehatan1;
		}
		$id_tb_dataKesehatan2 = $dataKes->tb_dataKesehatan2;
		$tb_kMIdKoperasi = $dataKes->idKoperasi;
		$tahunLalu = ($dataKes->tahun - 1);
		$check_dataTahun = $this->M_koperasi_kesehatan->check_dataTahun($tb_kMIdKoperasi, $tahunLalu);
		if($check_dataTahun == FALSE){
			$tahunLalu = $dataKes->tahun;
		}
		// var_dump($tahunLalu);
		// die();
		$data['dataKesehatan1'] = $this->M_koperasi_kesehatan->getKes1ByID($id_tb_dataKesehatan1);
		// $data['dataKesehatan1Lalu'] = $this->M_koperasi_kesehatan->getKes1ByID($id_tb_dataKesehatan1);

		$data['dataKesehatan2'] = $this->M_koperasi_kesehatan->getKes2ByID($id_tb_dataKesehatan2);
		$data['dataKesehatan2Lalu'] = $this->M_koperasi_kesehatan->getKes2LaluByID($tb_kMIdKoperasi, $tahunLalu);

		$dataKesehatan2 = $this->M_koperasi_kesehatan->getKes2ByID($id_tb_dataKesehatan2);
		$dataKesehatan2Lalu = $this->M_koperasi_kesehatan->getKes2LaluByID($tb_kMIdKoperasi, $tahunLalu);

		// var_dump($dataKesehatan2Lalu);
		// die();
		// data berjalan
		$dataBrjln['al_kas'] =  number_format($dataKesehatan2->al_kas, 2, ',', '.');
		$dataBrjln['al_giro'] =  number_format($dataKesehatan2->al_giro, 2, ',', '.');
		$dataBrjln['al_tabungan'] =  number_format($dataKesehatan2->al_tabungan, 2, ',', '.');
		$dataBrjln['al_deposito'] =  number_format($dataKesehatan2->al_deposito, 2, ',', '.');
		$dataBrjln['al_simSKopLain'] =  number_format($dataKesehatan2->al_simSKopLain, 2, ',', '.');
		$dataBrjln['al_simBKopLain'] =  number_format($dataKesehatan2->al_simBKopLain, 2, ',', '.');
		$dataBrjln['al_suratBerharga'] =  number_format($dataKesehatan2->al_suratBerharga, 2, ',', '.');
		$dataBrjln['al_piutangAng'] =  number_format($dataKesehatan2->al_piutangAng, 2, ',', '.');
		$dataBrjln['al_piutangCAng'] =  number_format($dataKesehatan2->al_piutangCAng, 2, ',', '.');
		$dataBrjln['al_piutangDKopLain'] =  number_format($dataKesehatan2->al_piutangDKopLain, 2, ',', '.');
		$dataBrjln['al_piutangBunga'] =  number_format($dataKesehatan2->al_piutangBunga, 2, ',', '.');
		$dataBrjln['al_piutangLainLain'] =  number_format($dataKesehatan2->al_piutangLainLain, 2, ',', '.');
		$dataBrjln['al_penyisihanPTTert'] =  number_format($dataKesehatan2->al_penyisihanPTTert, 2, ',', '.');
		$dataBrjln['al_premiAsuransi'] =  number_format($dataKesehatan2->al_premiAsuransi, 2, ',', '.');
		$dataBrjln['al_perlengkapan'] =  number_format($dataKesehatan2->al_perlengkapan, 2, ',', '.');
		$dataBrjln['al_bebanDDimuka'] =  number_format($dataKesehatan2->al_bebanDDimuka, 2, ',', '.');
		$dataBrjln['al_pendapatanADiterima'] =  number_format($dataKesehatan2->al_pendapatanADiterima, 2, ',', '.');
		$dataBrjln['al_persediaan'] =  number_format($dataKesehatan2->al_persediaan, 2, ',', '.');
		$dataBrjln['al_aktivaLLain'] =  number_format($dataKesehatan2->al_aktivaLLain, 2, ',', '.');

		$dataBrjln['ijp_simTBerjangka'] =  number_format($dataKesehatan2->ijp_simTBerjangka, 2, ',', '.');
		$dataBrjln['ijp_suratBerharga'] =  number_format($dataKesehatan2->ijp_suratBerharga, 2, ',', '.');
		$dataBrjln['ijp_simKSPLain'] =  number_format($dataKesehatan2->ijp_simKSPLain, 2, ',', '.');
		$dataBrjln['ijp_penyertaanKopLain'] =  number_format($dataKesehatan2->ijp_penyertaanKopLain, 2, ',', '.');
		$dataBrjln['ijp_penyertaanLKLain'] =  number_format($dataKesehatan2->ijp_penyertaanLKLain, 2, ',', '.');
		$dataBrjln['ijp_jangkaPlain'] =  number_format($dataKesehatan2->ijp_jangkaPlain, 2, ',', '.');

		$dataBrjln['at_tanah'] =  number_format($dataKesehatan2->at_tanah, 2, ',', '.');
		$dataBrjln['at_bangunan'] =  number_format($dataKesehatan2->at_bangunan, 2, ',', '.');
		$dataBrjln['at_kendaraan'] =  number_format($dataKesehatan2->at_kendaraan, 2, ',', '.');
		$dataBrjln['at_inventarisP'] =  number_format($dataKesehatan2->at_inventarisP, 2, ',', '.');
		$dataBrjln['at_akumulasiPenyusut'] =  number_format($dataKesehatan2->at_akumulasiPenyusut, 2, ',', '.');

		$dataBrjln['atb_aktivaTBrwjd'] =  number_format($dataKesehatan2->atb_aktivaTBrwjd, 2, ',', '.');

		$dataBrjln['all_bebanDitangguh'] =  number_format($dataKesehatan2->all_bebanDitangguh, 2, ',', '.');
		$dataBrjln['all_amorBDitangguh'] =  number_format($dataKesehatan2->all_amorBDitangguh, 2, ',', '.');
		$dataBrjln['all_agunanDAlih'] =  number_format($dataKesehatan2->all_agunanDAlih, 2, ',', '.');
		$dataBrjln['all_bebanPOpera'] =  number_format($dataKesehatan2->all_bebanPOpera, 2, ',', '.');
		$dataBrjln['all_amorBPOpera'] =  number_format($dataKesehatan2->all_amorBPOpera, 2, ',', '.');
		$dataBrjln['all_lainLain'] =  number_format($dataKesehatan2->all_lainLain, 2, ',', '.');

		$dataBrjln['hjp_tabunganSimAng'] =  number_format($dataKesehatan2->hjp_tabunganSimAng, 2, ',', '.');
		$dataBrjln['hjp_tabunganSimNAng'] =  number_format($dataKesehatan2->hjp_tabunganSimNAng, 2, ',', '.');
		$dataBrjln['hjp_simBAng'] =  number_format($dataKesehatan2->hjp_simBAng, 2, ',', '.');
		$dataBrjln['hjp_berjangkaCAngKop'] =  number_format($dataKesehatan2->hjp_berjangkaCAngKop, 2, ',', '.');
		$dataBrjln['hjp_hutangBank'] =  number_format($dataKesehatan2->hjp_hutangBank, 2, ',', '.');
		$dataBrjln['hjp_hutangLPDB'] =  number_format($dataKesehatan2->hjp_hutangLPDB, 2, ',', '.');
		$dataBrjln['hjp_hutangPajak'] =  number_format($dataKesehatan2->hjp_hutangPajak, 2, ',', '.');
		$dataBrjln['hjp_bebanMHDibayar'] =  number_format($dataKesehatan2->hjp_bebanMHDibayar, 2, ',', '.');
		$dataBrjln['hjp_pendapatanLDDimuka'] =  number_format($dataKesehatan2->hjp_pendapatanLDDimuka, 2, ',', '.');
		$dataBrjln['hjp_hutangBiaya'] =  number_format($dataKesehatan2->hjp_hutangBiaya, 2, ',', '.');
		$dataBrjln['hjp_danaBSHU'] =  number_format($dataKesehatan2->hjp_danaBSHU, 2, ',', '.');
		$dataBrjln['hjp_titipanDKAng'] =  number_format($dataKesehatan2->hjp_titipanDKAng, 2, ',', '.');
		$dataBrjln['hjp_titipanJamKes'] =  number_format($dataKesehatan2->hjp_titipanJamKes, 2, ',', '.');
		$dataBrjln['hjp_titipanZakat'] =  number_format($dataKesehatan2->hjp_titipanZakat, 2, ',', '.');
		$dataBrjln['hjp_hutangSGU'] =  number_format($dataKesehatan2->hjp_hutangSGU, 2, ',', '.');
		$dataBrjln['hjp_kewajibanJPLain'] =  number_format($dataKesehatan2->hjp_kewajibanJPLain, 2, ',', '.');

		$dataBrjln['hjpng_hutangBank'] =  number_format($dataKesehatan2->hjpng_hutangBank, 2, ',', '.');
		$dataBrjln['hjpng_hutangJPKopLain'] =  number_format($dataKesehatan2->hjpng_hutangJPKopLain, 2, ',', '.');
		$dataBrjln['hjpng_antarKP'] =  number_format($dataKesehatan2->hjpng_antarKP, 2, ',', '.');
		$dataBrjln['hjpng_simBerjangka'] =  number_format($dataKesehatan2->hjpng_simBerjangka, 2, ',', '.');
		$dataBrjln['hjpng_titipanDJPjng'] =  number_format($dataKesehatan2->hjpng_titipanDJPjng, 2, ',', '.');
		$dataBrjln['hjpng_hutangLPDB'] =  number_format($dataKesehatan2->hjpng_hutangLPDB, 2, ',', '.');
		$dataBrjln['hjpng_sewaGU'] =  number_format($dataKesehatan2->hjpng_sewaGU, 2, ',', '.');
		$dataBrjln['hjpng_hutangJPLain'] =  number_format($dataKesehatan2->hjpng_hutangJPLain, 2, ',', '.');

		$dataBrjln['eku_simPokok'] =  number_format($dataKesehatan2->eku_simPokok, 2, ',', '.');
		$dataBrjln['eku_simWajib'] =  number_format($dataKesehatan2->eku_simWajib, 2, ',', '.');
		$dataBrjln['eku_modalPenyetara'] =  number_format($dataKesehatan2->eku_modalPenyetara, 2, ',', '.');
		$dataBrjln['eku_modalPenyertaan'] =  number_format($dataKesehatan2->eku_modalPenyertaan, 2, ',', '.');
		$dataBrjln['eku_modalSHD'] =  number_format($dataKesehatan2->eku_modalSHD, 2, ',', '.');
		$dataBrjln['eku_cadanganUmum'] =  number_format($dataKesehatan2->eku_cadanganUmum, 2, ',', '.');
		$dataBrjln['eku_cadanganTRes'] =  number_format($dataKesehatan2->eku_cadanganTRes, 2, ',', '.');
		$dataBrjln['eku_shuPSblm'] =  number_format($dataKesehatan2->eku_shuPSblm, 2, ',', '.');
		$dataBrjln['eku_shuBrjln'] =  number_format($dataKesehatan2->eku_shuBrjln, 2, ',', '.');

		$dataBrjln['pba_pendapatanJPAng'] =  number_format($dataKesehatan2->pba_pendapatanJPAng, 2, ',', '.');
		$dataBrjln['pba_pendapatanAdminAng'] =  number_format($dataKesehatan2->pba_pendapatanAdminAng, 2, ',', '.');
		$dataBrjln['pba_pendapatanPang'] =  number_format($dataKesehatan2->pba_pendapatanPang, 2, ',', '.');
		$dataBrjln['pba_pendapatanJPLainAng'] =  number_format($dataKesehatan2->pba_pendapatanJPLainAng, 2, ',', '.');

		$dataBrjln['pdna_pendapatanJSimNang'] =  number_format($dataKesehatan2->pdna_pendapatanJSimNang, 2, ',', '.');
		$dataBrjln['pdna_pendapatanAdminNAng'] =  number_format($dataKesehatan2->pdna_pendapatanAdminNAng, 2, ',', '.');
		$dataBrjln['pdna_pendapatanPNang'] =  number_format($dataKesehatan2->pdna_pendapatanPNang, 2, ',', '.');
		$dataBrjln['pdna_pendapatanJPLainNAng'] =  number_format($dataKesehatan2->pdna_pendapatanJPLainNAng, 2, ',', '.');

		$dataBrjln['bpa_bebanJSimTAng'] =  number_format($dataKesehatan2->bpa_bebanJSimTAng, 2, ',', '.');
		$dataBrjln['bpa_bebanJSimBAng'] =  number_format($dataKesehatan2->bpa_bebanJSimBAng, 2, ',', '.');

		$dataBrjln['bpna_bebanJSimTNang'] =  number_format($dataKesehatan2->bpna_bebanJSimTNang, 2, ',', '.');
		$dataBrjln['bpna_bebanJSimBNang'] =  number_format($dataKesehatan2->bpna_bebanJSimBNang, 2, ',', '.');
		$dataBrjln['bpna_bebanJHBank'] =  number_format($dataKesehatan2->bpna_bebanJHBank, 2, ',', '.');
		$dataBrjln['bpna_bebanJPLPDB'] =  number_format($dataKesehatan2->bpna_bebanJPLPDB, 2, ',', '.');
		$dataBrjln['bpna_bebanJMPenyerta'] =  number_format($dataKesehatan2->bpna_bebanJMPenyerta, 2, ',', '.');
		$dataBrjln['bpna_bebanJPP3'] =  number_format($dataKesehatan2->bpna_bebanJPP3, 2, ',', '.');

		$dataBrjln['bu_biayaPPPiutang'] =  number_format($dataKesehatan2->bu_biayaPPPiutang, 2, ',', '.');
		$dataBrjln['bu_biayaBPinj'] =  number_format($dataKesehatan2->bu_biayaBPinj, 2, ',', '.');
		$dataBrjln['bu_honorKaryawan'] =  number_format($dataKesehatan2->bu_honorKaryawan, 2, ',', '.');
		$dataBrjln['bu_biayaPerleng'] =  number_format($dataKesehatan2->bu_biayaPerleng, 2, ',', '.');
		$dataBrjln['bu_biayaAsuransi'] =  number_format($dataKesehatan2->bu_biayaAsuransi, 2, ',', '.');
		$dataBrjln['bu_biayaLAT'] =  number_format($dataKesehatan2->bu_biayaLAT, 2, ',', '.');
		$dataBrjln['bu_biayaPenyusut'] =  number_format($dataKesehatan2->bu_biayaPenyusut, 2, ',', '.');
		$dataBrjln['bu_biayaLainLain'] =  number_format($dataKesehatan2->bu_biayaLainLain, 2, ',', '.');
		$dataBrjln['bu_biayaPemeliha'] =  number_format($dataKesehatan2->bu_biayaPemeliha, 2, ',', '.');
		$dataBrjln['bu_biayaPromoP'] =  number_format($dataKesehatan2->bu_biayaPromoP, 2, ',', '.');
		$dataBrjln['bu_biayaAKonsum'] =  number_format($dataKesehatan2->bu_biayaAKonsum, 2, ',', '.');
		$dataBrjln['bu_biayaTrans'] =  number_format($dataKesehatan2->bu_biayaTrans, 2, ',', '.');
		$dataBrjln['bu_biayaAdminU'] =  number_format($dataKesehatan2->bu_biayaAdminU, 2, ',', '.');
		$dataBrjln['bu_biayaPajak'] =  number_format($dataKesehatan2->bu_biayaPajak, 2, ',', '.');
		$dataBrjln['bu_biayaSTBrjln'] =  number_format($dataKesehatan2->bu_biayaSTBrjln, 2, ',', '.');
		$dataBrjln['bu_biayaOpsLain'] =  number_format($dataKesehatan2->bu_biayaOpsLain, 2, ',', '.');

		$dataBrjln['bp_bebanPPKop'] =  number_format($dataKesehatan2->bp_bebanPPKop, 2, ',', '.');
		$dataBrjln['bp_bebanPembinaan'] =  number_format($dataKesehatan2->bp_bebanPembinaan, 2, ',', '.');
		$dataBrjln['bp_bebanRAng'] =  number_format($dataKesehatan2->bp_bebanRAng, 2, ',', '.');

		$dataBrjln['pll_pendapatanDBHU'] =  number_format($dataKesehatan2->pll_pendapatanDBHU, 2, ',', '.');
		$dataBrjln['pll_pendapatanSewa'] =  number_format($dataKesehatan2->pll_pendapatanSewa, 2, ',', '.');
		$dataBrjln['pll_pendapatanLainLain'] =  number_format($dataKesehatan2->pll_pendapatanLainLain, 2, ',', '.');
		$dataBrjln['bll_biayaLainlain'] =  number_format($dataKesehatan2->bll_biayaLainlain, 2, ',', '.');

		$dataBrjln['pp_pajakPeng'] =  number_format($dataKesehatan2->pp_pajakPeng, 2, ',', '.');
		$dataBrjln['pb_pkl'] =  number_format($dataKesehatan2->pb_pkl, 2, ',', '.');
		$dataBrjln['pb_pdr'] =  number_format($dataKesehatan2->pb_pdr, 2, ',', '.');
		$dataBrjln['pb_pembiayaanMacet'] =  number_format($dataKesehatan2->pb_pembiayaanMacet, 2, ',', '.');

		$dataBrjln['ag_nilaiAPKLancar'] =  number_format($dataKesehatan2->ag_nilaiAPKLancar, 2, ',', '.');
		$dataBrjln['ag_nilaiAPDiragukan'] =  number_format($dataKesehatan2->ag_nilaiAPDiragukan, 2, ',', '.');
		$dataBrjln['ag_nilaiAPMacet'] =  number_format($dataKesehatan2->ag_nilaiAPMacet, 2, ',', '.');


		$dataLalu['al_kas'] =  number_format($dataKesehatan2Lalu->al_kas, 2, ',', '.');
		$dataLalu['al_giro'] =  number_format($dataKesehatan2Lalu->al_giro, 2, ',', '.');
		$dataLalu['al_tabungan'] =  number_format($dataKesehatan2Lalu->al_tabungan, 2, ',', '.');
		$dataLalu['al_deposito'] =  number_format($dataKesehatan2Lalu->al_deposito, 2, ',', '.');
		$dataLalu['al_simSKopLain'] =  number_format($dataKesehatan2Lalu->al_simSKopLain, 2, ',', '.');
		$dataLalu['al_simBKopLain'] =  number_format($dataKesehatan2Lalu->al_simBKopLain, 2, ',', '.');
		$dataLalu['al_suratBerharga'] =  number_format($dataKesehatan2Lalu->al_suratBerharga, 2, ',', '.');
		$dataLalu['al_piutangAng'] =  number_format($dataKesehatan2Lalu->al_piutangAng, 2, ',', '.');
		$dataLalu['al_piutangCAng'] =  number_format($dataKesehatan2Lalu->al_piutangCAng, 2, ',', '.');
		$dataLalu['al_piutangDKopLain'] =  number_format($dataKesehatan2Lalu->al_piutangDKopLain, 2, ',', '.');
		$dataLalu['al_piutangBunga'] =  number_format($dataKesehatan2Lalu->al_piutangBunga, 2, ',', '.');
		$dataLalu['al_piutangLainLain'] =  number_format($dataKesehatan2Lalu->al_piutangLainLain, 2, ',', '.');
		$dataLalu['al_penyisihanPTTert'] =  number_format($dataKesehatan2Lalu->al_penyisihanPTTert, 2, ',', '.');
		$dataLalu['al_premiAsuransi'] =  number_format($dataKesehatan2Lalu->al_premiAsuransi, 2, ',', '.');
		$dataLalu['al_perlengkapan'] =  number_format($dataKesehatan2Lalu->al_perlengkapan, 2, ',', '.');
		$dataLalu['al_bebanDDimuka'] =  number_format($dataKesehatan2Lalu->al_bebanDDimuka, 2, ',', '.');
		$dataLalu['al_pendapatanADiterima'] =  number_format($dataKesehatan2Lalu->al_pendapatanADiterima, 2, ',', '.');
		$dataLalu['al_persediaan'] =  number_format($dataKesehatan2Lalu->al_persediaan, 2, ',', '.');
		$dataLalu['al_aktivaLLain'] =  number_format($dataKesehatan2Lalu->al_aktivaLLain, 2, ',', '.');

		$dataLalu['ijp_simTBerjangka'] =  number_format($dataKesehatan2Lalu->ijp_simTBerjangka, 2, ',', '.');
		$dataLalu['ijp_suratBerharga'] =  number_format($dataKesehatan2Lalu->ijp_suratBerharga, 2, ',', '.');
		$dataLalu['ijp_simKSPLain'] =  number_format($dataKesehatan2Lalu->ijp_simKSPLain, 2, ',', '.');
		$dataLalu['ijp_penyertaanKopLain'] =  number_format($dataKesehatan2Lalu->ijp_penyertaanKopLain, 2, ',', '.');
		$dataLalu['ijp_penyertaanLKLain'] =  number_format($dataKesehatan2Lalu->ijp_penyertaanLKLain, 2, ',', '.');
		$dataLalu['ijp_jangkaPlain'] =  number_format($dataKesehatan2Lalu->ijp_jangkaPlain, 2, ',', '.');

		$dataLalu['at_tanah'] =  number_format($dataKesehatan2Lalu->at_tanah, 2, ',', '.');
		$dataLalu['at_bangunan'] =  number_format($dataKesehatan2Lalu->at_bangunan, 2, ',', '.');
		$dataLalu['at_kendaraan'] =  number_format($dataKesehatan2Lalu->at_kendaraan, 2, ',', '.');
		$dataLalu['at_inventarisP'] =  number_format($dataKesehatan2Lalu->at_inventarisP, 2, ',', '.');
		$dataLalu['at_akumulasiPenyusut'] =  number_format($dataKesehatan2Lalu->at_akumulasiPenyusut, 2, ',', '.');

		$dataLalu['atb_aktivaTBrwjd'] =  number_format($dataKesehatan2Lalu->atb_aktivaTBrwjd, 2, ',', '.');

		$dataLalu['all_bebanDitangguh'] =  number_format($dataKesehatan2Lalu->all_bebanDitangguh, 2, ',', '.');
		$dataLalu['all_amorBDitangguh'] =  number_format($dataKesehatan2Lalu->all_amorBDitangguh, 2, ',', '.');
		$dataLalu['all_agunanDAlih'] =  number_format($dataKesehatan2Lalu->all_agunanDAlih, 2, ',', '.');
		$dataLalu['all_bebanPOpera'] =  number_format($dataKesehatan2Lalu->all_bebanPOpera, 2, ',', '.');
		$dataLalu['all_amorBPOpera'] =  number_format($dataKesehatan2Lalu->all_amorBPOpera, 2, ',', '.');
		$dataLalu['all_lainLain'] =  number_format($dataKesehatan2Lalu->all_lainLain, 2, ',', '.');

		$dataLalu['hjp_tabunganSimAng'] =  number_format($dataKesehatan2Lalu->hjp_tabunganSimAng, 2, ',', '.');
		$dataLalu['hjp_tabunganSimNAng'] =  number_format($dataKesehatan2Lalu->hjp_tabunganSimNAng, 2, ',', '.');
		$dataLalu['hjp_simBAng'] =  number_format($dataKesehatan2Lalu->hjp_simBAng, 2, ',', '.');
		$dataLalu['hjp_berjangkaCAngKop'] =  number_format($dataKesehatan2Lalu->hjp_berjangkaCAngKop, 2, ',', '.');
		$dataLalu['hjp_hutangBank'] =  number_format($dataKesehatan2Lalu->hjp_hutangBank, 2, ',', '.');
		$dataLalu['hjp_hutangLPDB'] =  number_format($dataKesehatan2Lalu->hjp_hutangLPDB, 2, ',', '.');
		$dataLalu['hjp_hutangPajak'] =  number_format($dataKesehatan2Lalu->hjp_hutangPajak, 2, ',', '.');
		$dataLalu['hjp_bebanMHDibayar'] =  number_format($dataKesehatan2Lalu->hjp_bebanMHDibayar, 2, ',', '.');
		$dataLalu['hjp_pendapatanLDDimuka'] =  number_format($dataKesehatan2Lalu->hjp_pendapatanLDDimuka, 2, ',', '.');
		$dataLalu['hjp_hutangBiaya'] =  number_format($dataKesehatan2Lalu->hjp_hutangBiaya, 2, ',', '.');
		$dataLalu['hjp_danaBSHU'] =  number_format($dataKesehatan2Lalu->hjp_danaBSHU, 2, ',', '.');
		$dataLalu['hjp_titipanDKAng'] =  number_format($dataKesehatan2Lalu->hjp_titipanDKAng, 2, ',', '.');
		$dataLalu['hjp_titipanJamKes'] =  number_format($dataKesehatan2Lalu->hjp_titipanJamKes, 2, ',', '.');
		$dataLalu['hjp_titipanZakat'] =  number_format($dataKesehatan2Lalu->hjp_titipanZakat, 2, ',', '.');
		$dataLalu['hjp_hutangSGU'] =  number_format($dataKesehatan2Lalu->hjp_hutangSGU, 2, ',', '.');
		$dataLalu['hjp_kewajibanJPLain'] =  number_format($dataKesehatan2Lalu->hjp_kewajibanJPLain, 2, ',', '.');

		$dataLalu['hjpng_hutangBank'] =  number_format($dataKesehatan2Lalu->hjpng_hutangBank, 2, ',', '.');
		$dataLalu['hjpng_hutangJPKopLain'] =  number_format($dataKesehatan2Lalu->hjpng_hutangJPKopLain, 2, ',', '.');
		$dataLalu['hjpng_antarKP'] =  number_format($dataKesehatan2Lalu->hjpng_antarKP, 2, ',', '.');
		$dataLalu['hjpng_simBerjangka'] =  number_format($dataKesehatan2Lalu->hjpng_simBerjangka, 2, ',', '.');
		$dataLalu['hjpng_titipanDJPjng'] =  number_format($dataKesehatan2Lalu->hjpng_titipanDJPjng, 2, ',', '.');
		$dataLalu['hjpng_hutangLPDB'] =  number_format($dataKesehatan2Lalu->hjpng_hutangLPDB, 2, ',', '.');
		$dataLalu['hjpng_sewaGU'] =  number_format($dataKesehatan2Lalu->hjpng_sewaGU, 2, ',', '.');
		$dataLalu['hjpng_hutangJPLain'] =  number_format($dataKesehatan2Lalu->hjpng_hutangJPLain, 2, ',', '.');

		$dataLalu['eku_simPokok'] =  number_format($dataKesehatan2Lalu->eku_simPokok, 2, ',', '.');
		$dataLalu['eku_simWajib'] =  number_format($dataKesehatan2Lalu->eku_simWajib, 2, ',', '.');
		$dataLalu['eku_modalPenyetara'] =  number_format($dataKesehatan2Lalu->eku_modalPenyetara, 2, ',', '.');
		$dataLalu['eku_modalPenyertaan'] =  number_format($dataKesehatan2Lalu->eku_modalPenyertaan, 2, ',', '.');
		$dataLalu['eku_modalSHD'] =  number_format($dataKesehatan2Lalu->eku_modalSHD, 2, ',', '.');
		$dataLalu['eku_cadanganUmum'] =  number_format($dataKesehatan2Lalu->eku_cadanganUmum, 2, ',', '.');
		$dataLalu['eku_cadanganTRes'] =  number_format($dataKesehatan2Lalu->eku_cadanganTRes, 2, ',', '.');
		$dataLalu['eku_shuPSblm'] =  number_format($dataKesehatan2Lalu->eku_shuPSblm, 2, ',', '.');
		$dataLalu['eku_shuBrjln'] =  number_format($dataKesehatan2Lalu->eku_shuBrjln, 2, ',', '.');

		$dataLalu['pba_pendapatanJPAng'] =  number_format($dataKesehatan2Lalu->pba_pendapatanJPAng, 2, ',', '.');
		$dataLalu['pba_pendapatanAdminAng'] =  number_format($dataKesehatan2Lalu->pba_pendapatanAdminAng, 2, ',', '.');
		$dataLalu['pba_pendapatanPang'] =  number_format($dataKesehatan2Lalu->pba_pendapatanPang, 2, ',', '.');
		$dataLalu['pba_pendapatanJPLainAng'] =  number_format($dataKesehatan2Lalu->pba_pendapatanJPLainAng, 2, ',', '.');

		$dataLalu['pdna_pendapatanJSimNang'] =  number_format($dataKesehatan2Lalu->pdna_pendapatanJSimNang, 2, ',', '.');
		$dataLalu['pdna_pendapatanAdminNAng'] =  number_format($dataKesehatan2Lalu->pdna_pendapatanAdminNAng, 2, ',', '.');
		$dataLalu['pdna_pendapatanPNang'] =  number_format($dataKesehatan2Lalu->pdna_pendapatanPNang, 2, ',', '.');
		$dataLalu['pdna_pendapatanJPLainNAng'] =  number_format($dataKesehatan2Lalu->pdna_pendapatanJPLainNAng, 2, ',', '.');

		$dataLalu['bpa_bebanJSimTAng'] =  number_format($dataKesehatan2Lalu->bpa_bebanJSimTAng, 2, ',', '.');
		$dataLalu['bpa_bebanJSimBAng'] =  number_format($dataKesehatan2Lalu->bpa_bebanJSimBAng, 2, ',', '.');

		$dataLalu['bpna_bebanJSimTNang'] =  number_format($dataKesehatan2Lalu->bpna_bebanJSimTNang, 2, ',', '.');
		$dataLalu['bpna_bebanJSimBNang'] =  number_format($dataKesehatan2Lalu->bpna_bebanJSimBNang, 2, ',', '.');
		$dataLalu['bpna_bebanJHBank'] =  number_format($dataKesehatan2Lalu->bpna_bebanJHBank, 2, ',', '.');
		$dataLalu['bpna_bebanJPLPDB'] =  number_format($dataKesehatan2Lalu->bpna_bebanJPLPDB, 2, ',', '.');
		$dataLalu['bpna_bebanJMPenyerta'] =  number_format($dataKesehatan2Lalu->bpna_bebanJMPenyerta, 2, ',', '.');
		$dataLalu['bpna_bebanJPP3'] =  number_format($dataKesehatan2Lalu->bpna_bebanJPP3, 2, ',', '.');

		$dataLalu['bu_biayaPPPiutang'] =  number_format($dataKesehatan2Lalu->bu_biayaPPPiutang, 2, ',', '.');
		$dataLalu['bu_biayaBPinj'] =  number_format($dataKesehatan2Lalu->bu_biayaBPinj, 2, ',', '.');
		$dataLalu['bu_honorKaryawan'] =  number_format($dataKesehatan2Lalu->bu_honorKaryawan, 2, ',', '.');
		$dataLalu['bu_biayaPerleng'] =  number_format($dataKesehatan2Lalu->bu_biayaPerleng, 2, ',', '.');
		$dataLalu['bu_biayaAsuransi'] =  number_format($dataKesehatan2Lalu->bu_biayaAsuransi, 2, ',', '.');
		$dataLalu['bu_biayaLAT'] =  number_format($dataKesehatan2Lalu->bu_biayaLAT, 2, ',', '.');
		$dataLalu['bu_biayaPenyusut'] =  number_format($dataKesehatan2Lalu->bu_biayaPenyusut, 2, ',', '.');
		$dataLalu['bu_biayaLainLain'] =  number_format($dataKesehatan2Lalu->bu_biayaLainLain, 2, ',', '.');
		$dataLalu['bu_biayaPemeliha'] =  number_format($dataKesehatan2Lalu->bu_biayaPemeliha, 2, ',', '.');
		$dataLalu['bu_biayaPromoP'] =  number_format($dataKesehatan2Lalu->bu_biayaPromoP, 2, ',', '.');
		$dataLalu['bu_biayaAKonsum'] =  number_format($dataKesehatan2Lalu->bu_biayaAKonsum, 2, ',', '.');
		$dataLalu['bu_biayaTrans'] =  number_format($dataKesehatan2Lalu->bu_biayaTrans, 2, ',', '.');
		$dataLalu['bu_biayaAdminU'] =  number_format($dataKesehatan2Lalu->bu_biayaAdminU, 2, ',', '.');
		$dataLalu['bu_biayaPajak'] =  number_format($dataKesehatan2Lalu->bu_biayaPajak, 2, ',', '.');
		$dataLalu['bu_biayaSTBrjln'] =  number_format($dataKesehatan2Lalu->bu_biayaSTBrjln, 2, ',', '.');
		$dataLalu['bu_biayaOpsLain'] =  number_format($dataKesehatan2Lalu->bu_biayaOpsLain, 2, ',', '.');

		$dataLalu['bp_bebanPPKop'] =  number_format($dataKesehatan2Lalu->bp_bebanPPKop, 2, ',', '.');
		$dataLalu['bp_bebanPembinaan'] =  number_format($dataKesehatan2Lalu->bp_bebanPembinaan, 2, ',', '.');
		$dataLalu['bp_bebanRAng'] =  number_format($dataKesehatan2Lalu->bp_bebanRAng, 2, ',', '.');

		$dataLalu['pll_pendapatanDBHU'] =  number_format($dataKesehatan2Lalu->pll_pendapatanDBHU, 2, ',', '.');
		$dataLalu['pll_pendapatanSewa'] =  number_format($dataKesehatan2Lalu->pll_pendapatanSewa, 2, ',', '.');
		$dataLalu['pll_pendapatanLainLain'] =  number_format($dataKesehatan2Lalu->pll_pendapatanLainLain, 2, ',', '.');
		$dataLalu['bll_biayaLainlain'] =  number_format($dataKesehatan2Lalu->bll_biayaLainlain, 2, ',', '.');

		$dataLalu['pp_pajakPeng'] =  number_format($dataKesehatan2Lalu->pp_pajakPeng, 2, ',', '.');
		$dataLalu['pb_pkl'] =  number_format($dataKesehatan2Lalu->pb_pkl, 2, ',', '.');
		$dataLalu['pb_pdr'] =  number_format($dataKesehatan2Lalu->pb_pdr, 2, ',', '.');
		$dataLalu['pb_pembiayaanMacet'] =  number_format($dataKesehatan2Lalu->pb_pembiayaanMacet, 2, ',', '.');

		$dataLalu['ag_nilaiAPKLancar'] =  number_format($dataKesehatan2Lalu->ag_nilaiAPKLancar, 2, ',', '.');
		$dataLalu['ag_nilaiAPDiragukan'] =  number_format($dataKesehatan2Lalu->ag_nilaiAPDiragukan, 2, ',', '.');
		$dataLalu['ag_nilaiAPMacet'] =  number_format($dataKesehatan2Lalu->ag_nilaiAPMacet, 2, ',', '.');



		// aktiva lancar
		// jml kas bank

		$jml_kasBankBrjln = ($dataKesehatan2->al_giro + $dataKesehatan2->al_tabungan + $dataKesehatan2->al_deposito);
		$dataBrjln['jml_kasBank'] = number_format($jml_kasBankBrjln, 2, ',', '.');

		$jml_kasBankLalu = ($dataKesehatan2Lalu->al_giro + $dataKesehatan2Lalu->al_tabungan + $dataKesehatan2Lalu->al_deposito);
		$dataLalu['jml_kasBank'] = number_format($jml_kasBankLalu, 2, ',', '.');

		// jml simpanan koperasi lain
		$jml_simKopLainBrjln = ($dataKesehatan2->al_simSKopLain + $dataKesehatan2->al_simBKopLain);
		$dataBrjln['jml_simKopLain'] = number_format($jml_simKopLainBrjln, 2, ',', '.');

		$jml_simKopLainLalu = ($dataKesehatan2Lalu->al_simSKopLain + $dataKesehatan2Lalu->al_simBKopLain);
		$dataLalu['jml_simKopLain'] = number_format($jml_simKopLainLalu, 2, ',', '.');

		// jml kas bank simpanan koperasi lain
		$jml_kasBankSimpKopLainBrjln = ($dataKesehatan2->al_kas + $jml_kasBankBrjln + $jml_simKopLainBrjln);
		$dataBrjln['jml_kasBankSimpKopLain'] = number_format($jml_kasBankSimpKopLainBrjln, 2, ',', '.');

		$jml_kasBankSimpKopLainLalu = ($dataKesehatan2Lalu->al_kas + $jml_kasBankLalu + $jml_simKopLainLalu);
		$dataLalu['jml_kasBankSimpKopLain'] = number_format($jml_kasBankSimpKopLainLalu, 2, ',', '.');

		// jml piutang usaha
		$jml_pinjamanPiutangUsahaBrjln = ($dataKesehatan2->al_piutangAng + $dataKesehatan2->al_piutangCAng + $dataKesehatan2->al_piutangDKopLain + $dataKesehatan2->al_piutangBunga + $dataKesehatan2->al_piutangLainLain);
		$dataBrjln['jml_pinjamanPiutangUsaha'] = number_format($jml_pinjamanPiutangUsahaBrjln, 2, ',', '.');

		$jml_pinjamanPiutangUsahaLalu = ($dataKesehatan2Lalu->al_piutangAng + $dataKesehatan2Lalu->al_piutangCAng + $dataKesehatan2Lalu->al_piutangDKopLain + $dataKesehatan2Lalu->al_piutangBunga + $dataKesehatan2Lalu->al_piutangLainLain);
		$dataLalu['jml_pinjamanPiutangUsaha'] = number_format($jml_pinjamanPiutangUsahaLalu, 2, ',', '.');

		// jml pinjaman yang diperkirakan dapat tertagih
		$jml_pinjamanYgDiperDapatTertagihBrjln = ($jml_pinjamanPiutangUsahaBrjln - $dataKesehatan2->al_penyisihanPTTert);
		$dataBrjln['jml_pinjamanYgDiperDapatTertagih'] = number_format($jml_pinjamanYgDiperDapatTertagihBrjln, 2, ',', '.');

		$jml_pinjamanYgDiperDapatTertagihLalu = ($jml_pinjamanPiutangUsahaLalu - $dataKesehatan2Lalu->al_penyisihanPTTert);
		$dataLalu['jml_pinjamanYgDiperDapatTertagih'] = number_format($jml_pinjamanYgDiperDapatTertagihLalu, 2, ',', '.');

		// jml aktiva lancar
		$jml_aktivaLancarBrjln = ($jml_kasBankSimpKopLainBrjln + $dataKesehatan2->al_suratBerharga + $jml_pinjamanYgDiperDapatTertagihBrjln + ($dataKesehatan2->al_premiAsuransi + $dataKesehatan2->al_perlengkapan + $dataKesehatan2->al_bebanDDimuka + $dataKesehatan2->al_pendapatanADiterima + $dataKesehatan2->al_persediaan + $dataKesehatan2->al_aktivaLLain));

		$dataBrjln['jml_aktivaLancar'] = number_format($jml_aktivaLancarBrjln, 2, ',', '.');

		$jml_aktivaLancarLalu = ($jml_kasBankSimpKopLainLalu + $dataKesehatan2Lalu->al_suratBerharga + $jml_pinjamanYgDiperDapatTertagihLalu + ($dataKesehatan2Lalu->al_premiAsuransi + $dataKesehatan2Lalu->al_perlengkapan + $dataKesehatan2Lalu->al_bebanDDimuka + $dataKesehatan2Lalu->al_pendapatanADiterima + $dataKesehatan2Lalu->al_persediaan + $dataKesehatan2Lalu->al_aktivaLLain));

		$dataLalu['jml_aktivaLancar'] = number_format($jml_aktivaLancarLalu, 2, ',', '.');

		// investasi jangka panjang

		$jml_penyertaanBrjln = ($dataKesehatan2->ijp_penyertaanKopLain + $dataKesehatan2->ijp_penyertaanLKLain);
		$dataBrjln['jml_penyertaan'] = number_format($jml_penyertaanBrjln, 2, ',', '.');

		$jml_penyertaanLalu = ($dataKesehatan2Lalu->ijp_penyertaanKopLain + $dataKesehatan2Lalu->ijp_penyertaanLKLain);
		$dataLalu['jml_penyertaan'] = number_format($jml_penyertaanLalu, 2, ',', '.');

		$jml_investasiJangkaPanjangBrjln = (($dataKesehatan2->ijp_simTBerjangka + $dataKesehatan2->ijp_suratBerharga + $dataKesehatan2->ijp_simKSPLain) + $dataKesehatan2->ijp_penyertaanKopLain + $dataKesehatan2->ijp_penyertaanLKLain + $dataKesehatan2->ijp_jangkaPlain);
		$dataBrjln['jml_investasiJangkaPanjang'] = number_format($jml_investasiJangkaPanjangBrjln, 2, ',', '.');
		$jml_investasiJangkaPanjangLalu = (($dataKesehatan2Lalu->ijp_simTBerjangka + $dataKesehatan2Lalu->ijp_suratBerharga + $dataKesehatan2Lalu->ijp_simKSPLain) + $dataKesehatan2Lalu->ijp_penyertaanKopLain + $dataKesehatan2Lalu->ijp_penyertaanLKLain + $dataKesehatan2Lalu->ijp_jangkaPlain);
		$dataLalu['jml_investasiJangkaPanjang'] = number_format($jml_investasiJangkaPanjangLalu, 2, ',', '.');


		// aktiva tetap
		$jml_aktivaTetapBrjln = (($dataKesehatan2->at_tanah + $dataKesehatan2->at_bangunan + $dataKesehatan2->at_kendaraan + $dataKesehatan2->at_inventarisP) - ($dataKesehatan2->at_akumulasiPenyusut));
		$dataBrjln['jml_aktivaTetap'] =  number_format($jml_aktivaTetapBrjln, 2, ',', '.');

		// var_dump($jml_aktivaTetapBrjln);
		// die();

		$jml_aktivaTetapLalu = (($dataKesehatan2Lalu->at_tanah + $dataKesehatan2Lalu->at_bangunan + $dataKesehatan2Lalu->at_kendaraan + $dataKesehatan2Lalu->at_inventarisP) - ($dataKesehatan2Lalu->at_akumulasiPenyusut));
		$dataLalu['jml_aktivaTetap'] =  number_format($jml_aktivaTetapLalu, 2, ',', '.');

		// aktiva lain - lain
		$jml_aktivaLainlainBrjln = ($dataKesehatan2->all_bebanDitangguh + $dataKesehatan2->all_amorBDitangguh + $dataKesehatan2->all_agunanDAlih + $dataKesehatan2->all_bebanPOpera + $dataKesehatan2->all_amorBPOpera + $dataKesehatan2->all_lainLain);
		$dataBrjln['jml_aktivaLainlain'] = number_format($jml_aktivaLainlainBrjln, 2, ',', '.');
		$jml_aktivaLainlainLalu = ($dataKesehatan2Lalu->all_bebanDitangguh + $dataKesehatan2Lalu->all_amorBDitangguh + $dataKesehatan2Lalu->all_agunanDAlih + $dataKesehatan2Lalu->all_bebanPOpera + $dataKesehatan2Lalu->all_amorBPOpera + $dataKesehatan2Lalu->all_lainLain);
		$dataLalu['jml_aktivaLainlain'] = number_format($jml_aktivaLainlainLalu, 2, ',', '.');

		// jumlah aktiva
		$jml_aktivaBrjln = ($jml_aktivaLancarBrjln + $jml_investasiJangkaPanjangBrjln + $jml_aktivaTetapBrjln + $dataKesehatan2->atb_aktivaTBrwjd + $jml_aktivaLainlainBrjln);
		$dataBrjln['jml_aktiva'] = number_format($jml_aktivaBrjln, 2, ',', '.');
		$jml_aktivaLalu = ($jml_aktivaLancarLalu + $jml_investasiJangkaPanjangLalu + $jml_aktivaTetapLalu + $dataKesehatan2Lalu->atb_aktivaTBrwjd + $jml_aktivaLainlainLalu);
		$dataLalu['jml_aktiva'] = number_format($jml_aktivaLalu, 2, ',', '.');

		// kewajiban lancar
		// jumlah titipan
		$jml_danaTitipanBrjln = ($dataKesehatan2->hjp_titipanDKAng + $dataKesehatan2->hjp_titipanJamKes + $dataKesehatan2->hjp_titipanZakat);
		$dataBrjln['jml_danaTitipan'] = number_format($jml_danaTitipanBrjln, 2, ',', '.');
		$jml_danaTitipanLalu = ($dataKesehatan2Lalu->hjp_titipanDKAng + $dataKesehatan2Lalu->hjp_titipanJamKes + $dataKesehatan2Lalu->hjp_titipanZakat);
		$dataLalu['jml_danaTitipan'] = number_format($jml_danaTitipanLalu, 2, ',', '.');

		// jumlah kewajiban lancar
		$jml_kewajibanLancarBrjln = (($dataKesehatan2->hjp_tabunganSimAng + $dataKesehatan2->hjp_tabunganSimNAng + $dataKesehatan2->hjp_simBAng + $dataKesehatan2->hjp_berjangkaCAngKop + $dataKesehatan2->hjp_hutangBank + $dataKesehatan2->hjp_hutangLPDB + $dataKesehatan2->hjp_hutangPajak + $dataKesehatan2->hjp_bebanMHDibayar + $dataKesehatan2->hjp_pendapatanLDDimuka + $dataKesehatan2->hjp_hutangBiaya + $dataKesehatan2->hjp_danaBSHU) +  $jml_danaTitipanBrjln + $dataKesehatan2->hjp_hutangSGU + $dataKesehatan2->hjp_kewajibanJPLain);
		$dataBrjln['jml_kewajibanLancar'] = number_format($jml_kewajibanLancarBrjln, 2, ',', '.');

		$jml_kewajibanLancarLalu = (($dataKesehatan2Lalu->hjp_tabunganSimAng + $dataKesehatan2Lalu->hjp_tabunganSimNAng + $dataKesehatan2Lalu->hjp_simBAng + $dataKesehatan2Lalu->hjp_berjangkaCAngKop + $dataKesehatan2Lalu->hjp_hutangBank + $dataKesehatan2Lalu->hjp_hutangLPDB + $dataKesehatan2Lalu->hjp_hutangPajak + $dataKesehatan2Lalu->hjp_bebanMHDibayar + $dataKesehatan2Lalu->hjp_pendapatanLDDimuka + $dataKesehatan2Lalu->hjp_hutangBiaya + $dataKesehatan2Lalu->hjp_danaBSHU) +  $jml_danaTitipanLalu + $dataKesehatan2Lalu->hjp_hutangSGU + $dataKesehatan2Lalu->hjp_kewajibanJPLain);
		$dataLalu['jml_kewajibanLancar'] = number_format($jml_kewajibanLancarLalu, 2, ',', '.');

		// jml kewajiban jangka panjang
		$jml_kewajibanJangkaPanjangBrjln = ($dataKesehatan2->hjpng_hutangBank + $dataKesehatan2->hjpng_hutangJPKopLain + $dataKesehatan2->hjpng_antarKP + $dataKesehatan2->hjpng_simBerjangka + $dataKesehatan2->hjpng_titipanDJPjng + $dataKesehatan2->hjpng_hutangLPDB + $dataKesehatan2->hjpng_sewaGU + $dataKesehatan2->hjpng_hutangJPLain + $dataKesehatan2->eku_modalPenyertaan);
		$dataBrjln['jml_kewajibanJangkaPanjang'] = number_format($jml_kewajibanJangkaPanjangBrjln, 2, ',', '.');
		$jml_kewajibanJangkaPanjangLalu = ($dataKesehatan2Lalu->hjpng_hutangBank + $dataKesehatan2Lalu->hjpng_hutangJPKopLain + $dataKesehatan2Lalu->hjpng_antarKP + $dataKesehatan2Lalu->hjpng_simBerjangka + $dataKesehatan2Lalu->hjpng_titipanDJPjng + $dataKesehatan2Lalu->hjpng_hutangLPDB + $dataKesehatan2Lalu->hjpng_sewaGU + $dataKesehatan2Lalu->hjpng_hutangJPLain + $dataKesehatan2Lalu->eku_modalPenyertaan);
		$dataLalu['jml_kewajibanJangkaPanjang'] = number_format($jml_kewajibanJangkaPanjangLalu, 2, ',', '.');


		// jml shu belum dibagi
		$jml_shuBelumDibagiBrjln = ($dataKesehatan2->eku_shuPSblm + $dataKesehatan2->eku_shuBrjln);
		$dataBrjln['jml_shuBelumDibagi'] = number_format($jml_shuBelumDibagiBrjln, 2, ',', '.');
		$jml_shuBelumDibagiLalu = ($dataKesehatan2Lalu->eku_shuPSblm + $dataKesehatan2Lalu->eku_shuBrjln);;
		$dataLalu['jml_shuBelumDibagi'] = number_format($jml_shuBelumDibagiLalu, 2, ',', '.');

		// jml ekuitas
		$jml_ekuitasBrjln = ($dataKesehatan2->eku_simPokok + $dataKesehatan2->eku_simWajib + $dataKesehatan2->eku_modalPenyetara + $dataKesehatan2->eku_modalSHD + $dataKesehatan2->eku_cadanganUmum + $dataKesehatan2->eku_cadanganTRes + $jml_shuBelumDibagiBrjln);
		$dataBrjln['jml_ekuitas'] = number_format($jml_ekuitasBrjln, 2, ',', '.');
		$jml_ekuitasLalu = ($dataKesehatan2Lalu->eku_simPokok + $dataKesehatan2Lalu->eku_simWajib + $dataKesehatan2Lalu->eku_modalPenyetara + $dataKesehatan2Lalu->eku_modalSHD + $dataKesehatan2Lalu->eku_cadanganUmum + $dataKesehatan2Lalu->eku_cadanganTRes + $jml_shuBelumDibagiLalu);
		$dataLalu['jml_ekuitas'] = number_format($jml_ekuitasLalu, 2, ',', '.');

		// jml kewajiban dan ekuitas
		$jml_kewajibanDanEkuitasBrjln = ($jml_ekuitasBrjln + $jml_kewajibanJangkaPanjangBrjln + $jml_kewajibanLancarBrjln);
		$dataBrjln['jml_kewajibanDanEkuitas'] = number_format($jml_kewajibanDanEkuitasBrjln, 2, ',', '.');

		$jml_kewajibanDanEkuitasLalu = ($jml_ekuitasLalu + $jml_kewajibanJangkaPanjangLalu + $jml_kewajibanLancarLalu);
		$dataLalu['jml_kewajibanDanEkuitas'] = number_format($jml_kewajibanDanEkuitasLalu, 2, ',', '.');

		// partisipasi bruto anggota
		// jml partisipasi bruto anggota
		$jml_partisipasiBrutoAnggotaBrjln = ($dataKesehatan2->pba_pendapatanJPAng + $dataKesehatan2->pba_pendapatanAdminAng + $dataKesehatan2->pba_pendapatanAdminAng + $dataKesehatan2->pba_pendapatanJPLainAng);
		$dataBrjln['jml_partisipasiBrutoAnggota'] = number_format($jml_partisipasiBrutoAnggotaBrjln, 2, ',', '.');

		$jml_partisipasiBrutoAnggotaLalu = ($dataKesehatan2Lalu->pba_pendapatanJPAng + $dataKesehatan2Lalu->pba_pendapatanAdminAng + $dataKesehatan2Lalu->pba_pendapatanAdminAng + $dataKesehatan2Lalu->pba_pendapatanJPLainAng);
		$dataLalu['jml_partisipasiBrutoAnggota'] = number_format($jml_partisipasiBrutoAnggotaLalu, 2, ',', '.');
		
		// pendapatan dari non anggota
		$pendaptanDariNonAnggotaBrjln = 0;
		$dataBrjln['pendaptanDariNonAnggota'] = number_format($pendaptanDariNonAnggotaBrjln, 2, ',', '.');
		$pendaptanDariNonAnggotaBrjln = 0;
		$dataBrjln['pendaptanDariNonAnggota'] = number_format($pendaptanDariNonAnggotaBrjln, 2, ',', '.');

		// jml pendapatan dari non anggota
		$jml_pendapatanNonAnggotaBrjln = ($dataKesehatan2->pdna_pendapatanJSimNang + $dataKesehatan2->pdna_pendapatanAdminNAng + $dataKesehatan2->pdna_pendapatanPNang + $dataKesehatan2->pdna_pendapatanJPLainNAng);
		$dataBrjln['jml_pendapatanNonAnggota'] = number_format($jml_pendapatanNonAnggotaBrjln, 2, ',', '.');
		
		$jml_pendapatanNonAnggotaLalu = ($dataKesehatan2Lalu->pdna_pendapatanJSimNang + $dataKesehatan2Lalu->pdna_pendapatanAdminNAng + $dataKesehatan2Lalu->pdna_pendapatanPNang + $dataKesehatan2Lalu->pdna_pendapatanJPLainNAng);;
		$dataLalu['jml_pendapatanNonAnggota'] = number_format($jml_pendapatanNonAnggotaLalu, 2, ',', '.');
		

		// jumlah pendapatan

		$jml_pendapatanBrjln = ($jml_partisipasiBrutoAnggotaBrjln + $jml_pendapatanNonAnggotaBrjln);
		$dataBrjln['jml_pendapatan'] = number_format($jml_pendapatanBrjln, 2, ',', '.');
		
		$jml_pendapatanLalu = ($jml_partisipasiBrutoAnggotaLalu + $jml_pendapatanNonAnggotaLalu);
		$dataLalu['jml_pendapatan'] = number_format($jml_pendapatanLalu, 2, ',', '.');

		// jml beban pokok anggota
		$jml_bebanPokokAnggotaBrjln = ($dataKesehatan2->bpa_bebanJSimTAng + $dataKesehatan2->bpa_bebanJSimBAng);
		$dataBrjln['jml_bebanPokokAnggota'] = number_format($jml_bebanPokokAnggotaBrjln, 2, ',', '.');
		
		$jml_bebanPokokAnggotaLalu = ($dataKesehatan2Lalu->bpa_bebanJSimTAng + $dataKesehatan2Lalu->bpa_bebanJSimBAng);
		$dataLalu['jml_bebanPokokAnggota'] = number_format($jml_bebanPokokAnggotaLalu, 2, ',', '.');

		// jml beban non anggota
		$jml_bebanNonAnggotaBrjln = ($dataKesehatan2->bpna_bebanJSimTNang + $dataKesehatan2->bpna_bebanJSimBNang + $dataKesehatan2->bpna_bebanJHBank + $dataKesehatan2->bpna_bebanJPLPDB + $dataKesehatan2->bpna_bebanJMPenyerta + $dataKesehatan2->bpna_bebanJPP3);
		$dataBrjln['jml_bebanNonAnggota'] = number_format($jml_bebanNonAnggotaBrjln, 2, ',', '.');
		
		$jml_bebanNonAnggotaLalu = ($dataKesehatan2Lalu->bpna_bebanJSimTNang + $dataKesehatan2Lalu->bpna_bebanJSimBNang + $dataKesehatan2Lalu->bpna_bebanJHBank + $dataKesehatan2Lalu->bpna_bebanJPLPDB + $dataKesehatan2Lalu->bpna_bebanJMPenyerta + $dataKesehatan2Lalu->bpna_bebanJPP3);
		$dataLalu['jml_bebanNonAnggota'] = number_format($jml_bebanNonAnggotaLalu, 2, ',', '.');

		// jml beban pokok
		$jml_bebanPokokBrjln = ($jml_bebanPokokAnggotaBrjln + $jml_bebanNonAnggotaBrjln);
		$dataBrjln['jml_bebanPokok'] = number_format($jml_bebanPokokBrjln, 2, ',', '.');
		
		$jml_bebanPokokLalu = ($jml_bebanPokokAnggotaLalu + $jml_bebanNonAnggotaLalu);
		$dataLalu['jml_bebanPokok'] = number_format($jml_bebanPokokLalu, 2, ',', '.');

		// sisa hasil usaha kotor
		$sisaHasilKotorBrjln = ($jml_pendapatanBrjln - $jml_bebanPokokBrjln);
		$dataBrjln['sisaHasilKotor'] = number_format($sisaHasilKotorBrjln, 2, ',', '.');
		
		$sisaHasilKotorLalu = ($jml_pendapatanLalu - $jml_bebanPokokLalu);
		$dataLalu['sisaHasilKotor'] = number_format($sisaHasilKotorLalu, 2, ',', '.');

		// jml beban usaha
		$jml_bebanUsahaBrjln = ($dataKesehatan2->bu_biayaPPPiutang + $dataKesehatan2->bu_biayaBPinj + $dataKesehatan2->bu_honorKaryawan + $dataKesehatan2->bu_biayaPerleng + $dataKesehatan2->bu_biayaAsuransi + $dataKesehatan2->bu_biayaLAT + $dataKesehatan2->bu_biayaPenyusut + $dataKesehatan2->bu_biayaPenyusut + $dataKesehatan2->bu_biayaPemeliha + $dataKesehatan2->bu_biayaPromoP + $dataKesehatan2->bu_biayaAKonsum + $dataKesehatan2->bu_biayaTrans + $dataKesehatan2->bu_biayaAdminU);
		$dataBrjln['jml_bebanUsaha'] = number_format($jml_bebanUsahaBrjln, 2, ',', '.');
		
		$jml_bebanUsahaLalu = ($jml_pendapatanLalu - $jml_bebanPokokLalu);
		$dataLalu['jml_bebanUsaha'] = number_format($jml_bebanUsahaLalu, 2, ',', '.');

		// porsi beban usaha anggota
		$porsiBebanUsahaAnggotaBrjln = ();
		$dataBrjln['porsiBebanUsahaAnggota'] = number_format($porsiBebanUsahaAnggotaBrjln, 2, ',', '.');
		
		$porsiBebanUsahaAnggotaLalu = ();
		$dataLalu['porsiBebanUsahaAnggota'] = number_format($porsiBebanUsahaAnggotaLalu, 2, ',', '.');

		// porsi beban usaha non anggota
		$porsiBebanUsahaNonAnggotaBrjln = ();
		$dataBrjln['porsiBebanUsahaNonAnggota'] = number_format($porsiBebanUsahaNonAnggotaBrjln, 2, ',', '.');
		
		$porsiBebanUsahaNonAnggotaLalu = ();
		$dataLalu['porsiBebanUsahaNonAnggota'] = number_format($porsiBebanUsahaNonAnggotaLalu, 2, ',', '.');

		$data['dataBrjln'] = array($dataBrjln);
		$data['dataLalu'] = array($dataLalu);

		// var_dump($data['dataBrjln'][0]['at_akumulasiPenyusut']);
		// die();

		
		$this->template->views('koperasi/kesehatan/view_dataKesehatan', $data);
	}

	// simpan data kesehatan1
	public function simpanKesehatan1()
	{
		$koperasi = $this->M_koperasi_kesehatan;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules_simpan());

		$post = $this->input->post();
		$tahun = $this->tahun = $post['tahun'];

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

		$nikKoperasi = $this->nikKoperasi = $post['nikKoperasi'];



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


		$cek_data = $koperasi->cek_dataKesM($nikKoperasi, $tahun);
		$cek_dupKes1 = $koperasi->cek_dupKes1($nikKoperasi, $tahun);
		// check if data exist
		if ($cek_data == FALSE) {
			$id_sub = $koperasi->tambahKesehatan1($data1, $data2, $data3, $data4, $data5);
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

			$dataM = array(
				'idKoperasi' => $nikKoperasi,
				'tahun' => $tahun,
				'tb_dataKesehatan1' => $id_hub,
			);
			$koperasi->tambahdataKesehatanM($dataM);
			redirect('koperasi');
		} else {
			// check if dup
			if ($cek_dupKes1 == TRUE){
				$id_sub = $koperasi->tambahKesehatan1($data1, $data2, $data3, $data4, $data5);
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

				$id = $this->id = $cek_data->id;
				$dataM = array(
					'idKoperasi' => $cek_data->idKoperasi,
					'tahun' => $cek_data->tahun,
					'tb_dataKesehatan1' => $id_hub,
					'tb_dataKesehatan2' => $cek_data->tb_dataKesehatan2,
				);
				$koperasi->updatedataKesehatanM($dataM, $id);
				redirect('koperasi');

			}else{
				echo "Data Exist But id_TBKes1 != NULL";
				die();
			}
		}
	}
	public function simpanKesehatan2()
	{
		$koperasi = $this->M_koperasi_kesehatan;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules_simpan());

		$post = $this->input->post();
		$nikKoperasi = $this->nikKoperasi = $post['nikKoperasi'];
		$tahun = $this->tahun = $post['tahun'];

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
		$bu_biayaSTBrjln = $this->biayaSTBrjln = $post['bu_biayaSTBrjln'];
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
			'bu_biayaSTBrjln' => $bu_biayaSTBrjln,
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


		$cek_data = $koperasi->cek_dataKesM($nikKoperasi, $tahun);
		$cek_dupKes2 = $koperasi->cek_dupKes2($nikKoperasi, $tahun);
		// check if data exist
		if ($cek_data == FALSE) {
			$id_sub = $koperasi->tambahKesehatan2($data1, $data2, $data3, $data4);
			$data5 = array(
				'idKoperasi' => $nikKoperasi,
				'tahun' => $tahun,
				'id_tb_kesehatan2Sub1' => $id_sub[0],
				'id_tb_kesehatan2Sub2' => $id_sub[1],
				'id_tb_kesehatan2Sub3' => $id_sub[2],
				'id_tb_kesehatan2Sub4' => $id_sub[3],
	
			);

			$id_hub = $koperasi->tambahKesehatan2Master($data5);

			$dataM = array(
				'idKoperasi' => $nikKoperasi,
				'tahun' => $tahun,
				'tb_dataKesehatan2' => $id_hub,
			);
			$koperasi->tambahdataKesehatanM($dataM);
			redirect('koperasi');
		} else {
			if ($cek_dupKes2 == TRUE){
				// data exist but id_tbKes2 = NULL
				$id_sub = $koperasi->tambahKesehatan2($data1, $data2, $data3, $data4);
				$data5 = array(
					'idKoperasi' => $nikKoperasi,
					'tahun' => $tahun,
					'id_tb_kesehatan2Sub1' => $id_sub[0],
					'id_tb_kesehatan2Sub2' => $id_sub[1],
					'id_tb_kesehatan2Sub3' => $id_sub[2],
					'id_tb_kesehatan2Sub4' => $id_sub[3],
		
				);
				
				$id_hub = $koperasi->tambahKesehatan2Master($data5);

				$id = $this->id = $cek_data->id;
				$dataM = array(
					'idKoperasi' => $cek_data->idKoperasi,
					'tahun' => $cek_data->tahun,
					'tb_dataKesehatan1' => $cek_data->tb_dataKesehatan1,
					'tb_dataKesehatan2' => $id_hub,
				);
				$koperasi->updatedataKesehatanM($dataM, $id);
				redirect('koperasi');
			}else{
				echo "Data Exist But id_TBKes 2 Not NULL";
				die();
			}
		}
	}
	public function updateKes2()
	{
		$koperasi = $this->M_koperasi_kesehatan;
		$validation = $this->form_validation;
		$validation->set_rules($koperasi->rules_simpan());

		$post = $this->input->post();
		$nikKoperasi = $this->nikKoperasi = 0;
		$tahun = $this->tahun = $post['tahun'];
		$idSub1 = $this->idSub1 = $post['kes2Sub1_id'];
		$idSub2 = $this->idSub1 = $post['kes2Sub2_id'];
		$idSub3 = $this->idSub1 = $post['kes2Sub3_id'];
		$idSub4 = $this->idSub1 = $post['kes2Sub4_id'];

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
		$bu_biayaSTBrjln = $this->biayaSTBrjln = $post['bu_biayaSTBrjln'];
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
			'bu_biayaSTBrjln' => $bu_biayaSTBrjln,
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
		$koperasi->updateKes2($data1,$data2,$data3,$data4,$idSub1,$idSub2,$idSub3,$idSub4);
		redirect('koperasi');
		// $cek_data = $koperasi->cek_dataKesM($nikKoperasi, $tahun);
		// if ($cek_data == FALSE) {
		// 	redirect('koperasi');
		// } else {
		// 	redirect('koperasi');
		// }
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
