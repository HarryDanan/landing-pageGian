<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends AUTH_Controller {
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
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Manage Data Koperasi";

		$this->template->views('koperasi/home', $data);
	}

	public function add() {

	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['namaKoperasi']=$this->input->post('namaKoperasi');
			$data['nomorBadanHukum']=$this->input->post('nomorBadanHukum');
			$data['nomorPerubahan_terbaru']=$this->input->post('nomorPerubahan_terbaru');
			$data['tglPerubahan_terbaru']=$this->input->post('tglPerubahan_terbaru');
			$data['tglRAT_terakhir']=$this->input->post('tglRAT_terakhir');
			$data['alamatKoperasi']=$this->input->post('alamatKoperasi');
			$data['kelurahan']=$this->input->post('kelurahan');
			$data['kecamatan']=$this->input->post('kecamatan');
			$data['kabupaten']=$this->input->post('kabupaten');
			$data['provinsi']=$this->input->post('provinsi');
			$data['bentukKoperasi']=$this->input->post('bentukKoperasi');
			$data['sektorUsaha']=$this->input->post('sektorUsaha');
			$data['namaKetua']=$this->input->post('namaKetua');
			$data['namaSekretaris']=$this->input->post('namaSekretaris');
			$data['namaBendahara']=$this->input->post('namaBendahara');
			$data['namaPengawas']=$this->input->post('namaPengawas');
			$data['namaManager']=$this->input->post('namaManager');
			$data['jmlAnggota_pria']=$this->input->post('jmlAnggota_pria');
			$data['jmlAnggota_wanita']=$this->input->post('jmlAnggota_wanita');
			$data['totalAnggota']=$this->input->post('totalAnggota');
			$data['totalManager']=$this->input->post('totalManager');
			$data['totalKaryawan']=$this->input->post('totalKaryawan');
			$data['nikKoperasi']=$this->input->post('nikKoperasi');
			$data['statusNIK']=$this->input->post('statusNIK');
			$data['tglBerlaku_sertifikat']=$this->input->post('tglBerlaku_sertifikat');
			$data['statusGrade']=$this->input->post('statusGrade');
			$response=$this->M_koperasi->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
					redirect('Koperasi');
			}
			else{
					echo "Insert error !";
			}
		}
	}

	// 
	public function inputdata(){
		$data['userdata'] = $this->userdata;

		$data['page'] = "add_koperasi";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Tambah Data";
		$data['list_blahbatuh'] = $this->M_koperasi->list_kelurahanDesa_blahbatuh();
		$data['list_gianyar'] = $this->M_koperasi->list_kelurahanDesa_gianyar();
		$data['list_payangan'] = $this->M_koperasi->list_kelurahanDesa_payangan();
		$data['list_sukawati'] = $this->M_koperasi->list_kelurahanDesa_sukawati();
		$data['list_tampaksiring'] = $this->M_koperasi->list_kelurahanDesa_tampaksiring();
		$data['list_tegallalang'] = $this->M_koperasi->list_kelurahanDesa_tegallalang();
		$data['list_ubud'] = $this->M_koperasi->list_kelurahanDesa_ubud();

		$this->template->views('koperasi/add_data', $data);
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

		$this->template->views('koperasi/edit_data', $data);
        if (!$data['dataKoperasi']) show_404();
		// redirect('EditKoperasi',$data);
    }

    public function updatedata(){
        
        $koperasi = $this->M_koperasi;
        $validation = $this->form_validation;
        $validation->set_rules($koperasi->rules());

        if ($validation->run()){
            $koperasi->updatedata();
            $this->session->set_flashdata('success','Data Berhasil diperbaharui');            
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

