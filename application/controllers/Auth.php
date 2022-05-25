<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		$this->template->views('welcome');
	}
	public function view_informasi()
	{
		$this->template->views('informasi');
	}
	public function view_panduan()
	{
		$this->template->views('panduan');
	}
	public function view_faq()
	{
		$this->template->views('faq');
	}
	public function view_hubungi()
	{
		$this->template->views('hubungi');
	}

}
