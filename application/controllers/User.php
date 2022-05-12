<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends AUTH_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_list_user');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['userdata'] = $this->userdata;
        $data['list_user'] = $this->M_list_user->getAll();

        $data['page'] = "list_user";
        $data['judul'] = "Data Admin Koperasi";
        $data['deskripsi'] = "Manage Data Admin Koperasi";

        $this->template->views('user/home', $data);
    }
    public function inputdata()
    {
        $data['userdata'] = $this->userdata;

        $data['page'] = "add_admin";
        $data['judul'] = "Data Admin Koperasi";
        $data['deskripsi'] = "Tambah Data";

        $this->template->views('user/add_data', $data);
    }

    public function simpandata()
    {
        $list_user = $this->M_list_user;
        $validation = $this->form_validation;
        $validation->set_rules($list_user->rules());

        if ($validation->run()) {
            $list_user->simpan();
            $this->session->set_flashdata('success', 'Data Berhasil disimpan!');
            redirect(site_url('user'));
        }

        redirect(site_url('user'));
    }

    public function editdata($id = null)
    {
        if (!isset($id)) redirect('user');

        $data['dataUser'] = $this->M_list_user->getByID($id);
        $data['userdata'] = $this->userdata;

        $data['page'] = "edit_admin";
        $data['judul'] = "Data Admin Koperasi";
        $data['deskripsi'] = "Edit Data";

        $this->template->views('user/edit_data', $data);
        if (!$data['dataUser']) show_404();
    }

    public function updatedata()
    {

        $list_user = $this->M_list_user;
        $validation = $this->form_validation;
        $validation->set_rules($list_user->rules());

        if ($validation->run()) {
            $list_user->updatedata();
            $this->session->set_flashdata('update', 'Data Berhasil diperbaharui');
            redirect(site_url('user'));
        }
    }

    public function hapusdata($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_koperasi->hapus($id)) {
            $this->session->set_flashdata('delete', 'Data Berhasil Dihapus!');
            redirect(site_url('user'));
        }
    }
}
