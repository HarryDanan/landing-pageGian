<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_user extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_User/M_home');
		$this->load->model('M_koperasi');
	}

	public function index() {
		$data['userdata'] 		= $this->userdata;
		$data['dataKoperasi'] = $this->M_koperasi->getAll_user($data['userdata']->idKop);
		$data['page'] 			= "home_user";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "Manage Data User Koperasi";

		$this->template_user->views('dashboard_user/home', $data);
	}
	public function home($idKop = null) {
		$data['userdata'] = $this->userdata;
		$data['dataKoperasi'] = $this->M_koperasi->getAll_user($idKop);

		$data['page'] = "koperasi_user";
		$data['judul'] = "Data Koperasi Anda";
		$data['deskripsi'] = "Manage Data Koperasi";

		$data['list_blahbatuh'] = $this->M_koperasi->list_kelurahanDesa_blahbatuh();
		$data['list_gianyar'] = $this->M_koperasi->list_kelurahanDesa_gianyar();
		$data['list_payangan'] = $this->M_koperasi->list_kelurahanDesa_payangan();
		$data['list_sukawati'] = $this->M_koperasi->list_kelurahanDesa_sukawati();
		$data['list_tampaksiring'] = $this->M_koperasi->list_kelurahanDesa_tampaksiring();
		$data['list_tegallalang'] = $this->M_koperasi->list_kelurahanDesa_tegallalang();
		$data['list_ubud'] = $this->M_koperasi->list_kelurahanDesa_ubud();

		$this->template_user->views('dashboard_user/koperasi/home', $data);
	}
}