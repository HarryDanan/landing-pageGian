<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_koperasi');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataKoperasi'] = $this->M_koperasi->select_all();
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();

		$data['page'] = "koperasi";
		$data['judul'] = "Data Koperasi";
		$data['deskripsi'] = "Manage Data Koperasi";

		// $data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('koperasi/home', $data);
	}

	public function tampil() {
		$data['dataKoperasi'] = $this->M_koperasi->select_all();
		$this->load->view('koperasi/list_data', $data);
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

		$data['dataKoperasi'] = $this->M_koperasi->select_by_id($id);
		// $data['dataPosisi'] = $this->M_posisi->select_all();
		// $data['dataKota'] = $this->M_kota->select_all();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_koperasi', 'update-koperasi', $data);
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

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_koperasi->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Pegawai Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Pegawai Gagal dihapus', '20px');
		}
	}

	public function export() {
		error_reporting(E_ALL);
    
		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();

		$data = $this->M_koperasi->select_all_pegawai();

		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0); 
		$rowCount = 1; 

		$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, "ID");
		$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, "Nama");
		$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, "Nomor Telepon");
		$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, "ID Kota");
		$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, "ID Kelamin");
		$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, "ID Posisi");
		$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, "Status");
		$rowCount++;

		foreach($data as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->id); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value->nama); 
		    $objPHPExcel->getActiveSheet()->setCellValueExplicit('C'.$rowCount, $value->telp, PHPExcel_Cell_DataType::TYPE_STRING);
		    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->id_kota); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->id_kelamin); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->id_posisi); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->status); 
		    $rowCount++; 
		} 

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
		$objWriter->save('./assets/excel/Data Pegawai.xlsx'); 

		$this->load->helper('download');
		force_download('./assets/excel/Data Pegawai.xlsx', NULL);
	}

	public function import() {
		$this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {
			$this->session->set_flashdata('msg', 'File harus diisi');
		} else {
			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('excel')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data = $this->upload->data();
				
				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' .$data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

				$index = 0;
				foreach ($sheetData as $key => $value) {
					if ($key != 1) {
						$id = md5(DATE('ymdhms').rand());
						$check = $this->M_koperasi->check_nama($value['B']);

						if ($check != 1) {
							$resultData[$index]['id'] = $id;
							$resultData[$index]['nama'] = ucwords($value['B']);
							$resultData[$index]['telp'] = $value['C'];
							$resultData[$index]['id_kota'] = $value['D'];
							$resultData[$index]['id_kelamin'] = $value['E'];
							$resultData[$index]['id_posisi'] = $value['F'];
							$resultData[$index]['status'] = $value['G'];
						}
					}
					$index++;
				}

				unlink('./assets/excel/' .$data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_koperasi->insert_batch($resultData);
					if ($result > 0) {
						$this->session->set_flashdata('msg', show_succ_msg('Data Pegawai Berhasil diimport ke database'));
						redirect('Pegawai');
					}
				} else {
					$this->session->set_flashdata('msg', show_msg('Data Pegawai Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('Pegawai');
				}

			}
		}
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */