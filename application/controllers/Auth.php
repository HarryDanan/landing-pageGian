<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
		$this->load->model('M_list_user');
		$this->load->model('M_koperasi');
	}

	public function index()
	{
		$session = $this->session->userdata('status');
		$data['koperasi'] = $this->M_koperasi->getAll();

		if ($session == '') {
			$this->load->view('login', $data);
		} else {
			redirect('Home');
		}
	}
	public function viewdata($id = null)
	{
		if (!isset($id)) redirect('login');

		$data['dataKoperasi'] = $this->M_koperasi->getByID($id);

		$this->load->view('view_data', $data);
		if (!$data['dataKoperasi']) show_404();
	}


	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->M_auth->login($username, $password);

			if ($data == false) {
				$this->session->set_flashdata('error_msg_auth1', 'Username / Password Anda Salah.');
				redirect('Auth');
			} else {
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				$this->session->set_userdata($session);
				redirect('Home');

			}
		} else {
			$this->session->set_flashdata('error_msg_auth2', validation_errors());
			redirect('Auth');
		}
	}
	public function login_koperasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->M_auth->login_koperasi($username, $password);

			if ($data == false) {
				$this->session->set_flashdata('error_msg_auth1', 'Username / Password Anda Salah.');
				redirect('Auth');
			} else {
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				$this->session->set_userdata($session);
				redirect('C_user/Home_user');
			}
		} else {
			$this->session->set_flashdata('error_msg_auth2', validation_errors());
			redirect('Auth');
		}
	}
    public function simpandata(){
        $user = $this->M_list_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()){
            $user->simpan();            
            $this->session->set_flashdata('success','Data Berhasil disimpan!');
            redirect(site_url('Auth'));   
            
        }

        redirect(site_url('Auth'));
             
    }

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}
}
