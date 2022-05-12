<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_user extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_User/M_home');
	}

	public function index() {
		$data['userdata'] 		= $this->userdata;

		$data['page'] 			= "home";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "Manage Data User Koperasi";
		$this->template_user->views('dashboard_user/home', $data);
	}
}