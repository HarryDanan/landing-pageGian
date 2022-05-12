<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends AUTH_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_list_admin');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['userdata'] = $this->userdata;
        $data['list_admin'] = $this->M_list_admin->getAll();

        $data['page'] = "list_admin";
        $data['judul'] = "Data Admin Dinas";
        $data['deskripsi'] = "Manage Data Admin Dinas";

        $this->template->views('admin/home', $data);
    }
    public function inputdata()
    {
        $data['userdata'] = $this->userdata;

        $data['page'] = "add_admin";
        $data['judul'] = "Data Admin Dinas";
        $data['deskripsi'] = "Tambah Data";

        $this->template->views('admin/add_data', $data);
    }

    public function simpandata()
    {
        $list_admin = $this->M_list_admin;
        $validation = $this->form_validation;
        $validation->set_rules($list_admin->rules());

        if ($validation->run()) {
            $list_admin->simpan();
            $this->session->set_flashdata('success', 'Data Berhasil disimpan!');
            redirect(site_url('admin'));
        }

        redirect(site_url('admin'));
    }

    public function editdata($id = null)
    {
        if (!isset($id)) redirect('admin');

        $data['dataAdmin'] = $this->M_list_admin->getByID($id);
        $data['userdata'] = $this->userdata;

        $data['page'] = "edit_admin";
        $data['judul'] = "Data Admin Dinas";
        $data['deskripsi'] = "Edit Data";

        $this->template->views('admin/edit_data', $data);
        if (!$data['dataAdmin']) show_404();
    }

    public function updatedata()
    {

        $list_admin = $this->M_list_admin;
        $validation = $this->form_validation;
        $validation->set_rules($list_admin->rules());

        if ($validation->run()) {
            $list_admin->updatedata();
            $this->session->set_flashdata('update', 'Data Berhasil diperbaharui');
            redirect(site_url('admin'));
        }
    }

    public function hapusdata($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_koperasi->hapus($id)) {
            $this->session->set_flashdata('delete', 'Data Berhasil Dihapus!');
            redirect(site_url('admin'));
        }
    }
}
