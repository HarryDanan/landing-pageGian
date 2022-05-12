<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi_user extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_koperasi');
        $this->load->library('form_validation');   
        $this->load->helper('url');   
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['koperasi'] = $this->M_koperasi->getAll();

		$data['page'] = "koperasi";
		$data['judul'] = "Data Koperasi Anda";
		$data['deskripsi'] = "Manage Data Koperasi";

		$this->template_user->views('dashboard_user/koperasi/home', $data);
	}

	public function inputdata(){
		$data['userdata'] = $this->userdata;

		$data['page'] = "add_koperasi";
		$data['judul'] = "Data Koperasi Anda";
		$data['deskripsi'] = "Tambah Data";
		$data['list_blahbatuh'] = $this->M_koperasi->list_kelurahanDesa_blahbatuh();
		$data['list_gianyar'] = $this->M_koperasi->list_kelurahanDesa_gianyar();
		$data['list_payangan'] = $this->M_koperasi->list_kelurahanDesa_payangan();
		$data['list_sukawati'] = $this->M_koperasi->list_kelurahanDesa_sukawati();
		$data['list_tampaksiring'] = $this->M_koperasi->list_kelurahanDesa_tampaksiring();
		$data['list_tegallalang'] = $this->M_koperasi->list_kelurahanDesa_tegallalang();
		$data['list_ubud'] = $this->M_koperasi->list_kelurahanDesa_ubud();

		$this->template_user->views('dashboard_user/koperasi/add_data', $data);
    }

    public function simpandata(){
        $koperasi = $this->M_koperasi;
        $validation = $this->form_validation;
        $validation->set_rules($koperasi->rules());

        if ($validation->run()){
            $koperasi->simpan();            
            $this->session->set_flashdata('success','Data Berhasil disimpan!');
            redirect(site_url('koperasi'));   
            
        }

        redirect(site_url('koperasi'));
             
    }

    public function editdata($id = null){
        if(!isset($id)) redirect('koperasi');

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

		$this->template_user->views('koperasi/edit_data', $data);
        if (!$data['dataKoperasi']) show_404();
		// redirect('EditKoperasi',$data);
    }

    public function updatedata(){
        
        $koperasi = $this->M_koperasi;
        $validation = $this->form_validation;
        $validation->set_rules($koperasi->rules());

        if ($validation->run()){
            $koperasi->updatedata();
            $this->session->set_flashdata('update','Data Berhasil diperbaharui');            
            redirect(site_url('koperasi'));
        }
    
    }    

    public function hapusdata($id = null){
        if (!isset($id)) show_404();

        if ($this->M_koperasi->hapus($id)){
            $this->session->set_flashdata('delete','Data Berhasil Dihapus!');
            redirect(site_url('koperasi'));
        }
    }

}

