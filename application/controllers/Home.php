<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_koperasi');
	}

	public function index() {
		$data['jml_koperasi'] 	= $this->M_koperasi->total_rows_koperasi();
		$data['jml_admin'] 	= $this->M_koperasi->total_rows_admin();
		$data['jml_user'] 	= $this->M_koperasi->total_rows_user();
		$data['jml_koperasi_blahbatuh'] 	= $this->M_koperasi->total_blahbatuh();
		$data['jml_koperasi_gianyar'] 	= $this->M_koperasi->total_gianyar();
		$data['jml_koperasi_payangan'] 	= $this->M_koperasi->total_payangan();
		$data['jml_koperasi_sukawati'] 	= $this->M_koperasi->total_sukawati();
		$data['jml_koperasi_tampaksiring'] 	= $this->M_koperasi->total_tampaksiring();
		$data['jml_koperasi_tegallalang'] 	= $this->M_koperasi->total_tegallalang();
		$data['jml_koperasi_ubud'] 	= $this->M_koperasi->total_ubud();
		$data['userdata'] 		= $this->userdata;

		$data['page'] 			= "home";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "Manage Data Koperasi";
		$this->template->views('home', $data);
	}
}