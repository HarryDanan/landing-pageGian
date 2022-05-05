<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddKoperasi extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_addkoperasi');
		// $this->load->model('M_posisi');
		// $this->load->model('M_kota');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		// $data['dataPegawai'] = $this->M_koperasi->select_all();
		// $data['dataPosisi'] = $this->M_posisi->select_all();
		// $data['dataKota'] = $this->M_kota->select_all();

		$data['page'] = "add_koperasi";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Tambah Data Baru";

		// $data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('koperasi/add_data', $data);
	}

	// public function tampil() {
	// 	$data['dataKoperasi'] = $this->M_koperasi->select_all();
	// 	$this->load->view('koperasi/list_data', $data);
	// }

	public function prosesTambah() {
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_koperasi->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pegawai Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Pegawai Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataPegawai'] = $this->M_koperasi->select_by_id($id);
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_pegawai', 'update-pegawai', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_koperasi->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pegawai Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pegawai Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function add()
    {
        $data = $this->M_addkoperasi;
        $validation = $this->form_validation;
        // $validation->set_rules($data->rules());
        $data->save();
        // if ($validation->run()) {
        //     $product->save();
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

        $this->load->view("koperasi/add_data");
    }
	public function savedata()
	{

	
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
			$response=$this->M_addkoperasi->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
					redirect('AddKoperasi');
			}
			else{
					echo "Insert error !";
			}
		}
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */