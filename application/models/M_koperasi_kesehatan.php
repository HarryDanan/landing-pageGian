<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_koperasi_kesehatan extends CI_Model
{

	private $_table = "tb_datakoperasi";
	private $tb_asset = "tb_asset";
	private $tb_kelembagaan = "tb_kelembagaan";

	public function cek_dataKesM($nikKoperasi, $tahun)
	{
		$this->db->select('*');
		$this->db->from('tb_datakesehatanm');
		$this->db->where('idKoperasi', $nikKoperasi);
		$this->db->where('tahun', $tahun);

		$cek_data = $this->db->get();
		
		if ($cek_data->num_rows() == 1) {
			return $cek_data->row();
		} else {
			return false;
		}
	}

	public function rules_simpan()
	{
		return [
			[
				'field' => 'nikKoperasi',
				'label' => 'NIK Koperasi',
				'rules' => 'trim|required'
			],
			[
				'field' => 'namaKoperasi',
				'label' => 'Nama Koperasi',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomorBadanHukum',
				'label' => 'Nomor Badan Hukum',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomorPerubahan_terbaru',
				'label' => 'Nomor Badan Hukum Pendirian',
				'rules' => 'trim'
			],
			[
				'field' => 'alamatKoperasi',
				'label' => 'Alamat',
				'rules' => 'trim'
			],
			[
				'field' => 'kelurahan',
				'label' => 'Kelurahan',
				'rules' => 'trim'
			],
			[
				'field' => 'kecamatan',
				'label' => 'Kecamatan',
				'rules' => 'trim'
			],
			[
				'field' => 'kabupaten',
				'label' => 'Kabupaten',
				'rules' => 'trim'
			],
			[
				'field' => 'provinsi',
				'label' => 'Provinsi',
				'rules' => 'trim'
			],
			[
				'field' => 'kodePos',
				'label' => 'Kode Pos',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telepon1',
				'label' => 'No Telepon 1',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telepon2',
				'label' => 'No telepon 2',
				'rules' => 'trim'
			],
			[
				'field' => 'faksmili',
				'label' => 'FAKSMILI',
				'rules' => 'trim'
			],
			[
				'field' => 'emaill',
				'label' => 'Email',
				'rules' => 'trim'
			],
			[
				'field' => 'website',
				'label' => 'Website',
				'rules' => 'trim'
			],
			[
				'field' => 'statusAktif',
				'label' => 'Status Aktif',
				'rules' => 'trim'
			],
			[
				'field' => 'bentukKoperasi',
				'label' => 'Bentuk Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'jenisKoperasi',
				'label' => 'Jenis Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'kelompokKoperasi',
				'label' => 'Kelompok Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'sektorUsaha',
				'label' => 'Sektor Usaha',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_ketua',
				'label' => 'No Telp Ketua',
				'rules' => 'trim'
			],
			[
				'field' => 'namaSekretaris',
				'label' => 'Nama Sekretaris',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_sekretaris',
				'label' => 'No Telp Sekretaris',
				'rules' => 'trim'
			],
			[
				'field' => 'namaBendahara',
				'label' => 'Nama Bendahara',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_bendahara',
				'label' => 'No Telp Bendahara',
				'rules' => 'trim'
			],
			[
				'field' => 'namaPengawas',
				'label' => 'Nama Pengawas',
				'rules' => 'trim'
			],
			[
				'field' => 'namaManager',
				'label' => 'Nama Manager',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlAnggota_pria',
				'label' => 'Jumlah Anggota Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlAnggota_wanita',
				'label' => 'Jumlah Anggota Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalAnggota',
				'label' => 'Total Anggota',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlManager_pria',
				'label' => 'Jumlah Manager Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlManager_wanita',
				'label' => 'Jumlah Manager Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalManager',
				'label' => 'Total Manager',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlKaryawan_pria',
				'label' => 'Jumlah Karyawan Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlKaryawan_wanita',
				'label' => 'Jumlah Karyawan Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalKaryawan',
				'label' => 'Total Karyawan',
				'rules' => 'trim'
			],
			[
				'field' => 'statusNIK',
				'label' => 'Status NIK',
				'rules' => 'trim'
			],
			[
				'field' => 'statusGrade',
				'label' => 'Status Grade',
				'rules' => 'trim'
			],
			[
				'field' => 'statusValid',
				'label' => 'status Valid',
				'rules' => 'trim'
			],
		];
	}
	public function rules_update()
	{
		return [
			[
				'field' => 'nikKoperasi',
				'label' => 'NIK Koperasi',
				'rules' => 'trim|required'
			],
			[
				'field' => 'namaKoperasi',
				'label' => 'Nama Koperasi',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomorBadanHukum',
				'label' => 'Nomor Badan Hukum',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomorPerubahan_terbaru',
				'label' => 'Nomor Badan Hukum Pendirian',
				'rules' => 'trim'
			],
			[
				'field' => 'alamatKoperasi',
				'label' => 'Alamat',
				'rules' => 'trim'
			],
			[
				'field' => 'kelurahan',
				'label' => 'Kelurahan',
				'rules' => 'trim'
			],
			[
				'field' => 'kecamatan',
				'label' => 'Kecamatan',
				'rules' => 'trim'
			],
			[
				'field' => 'kabupaten',
				'label' => 'Kabupaten',
				'rules' => 'trim'
			],
			[
				'field' => 'provinsi',
				'label' => 'Provinsi',
				'rules' => 'trim'
			],
			[
				'field' => 'kodePos',
				'label' => 'Kode Pos',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telepon1',
				'label' => 'No Telepon 1',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telepon2',
				'label' => 'No telepon 2',
				'rules' => 'trim'
			],
			[
				'field' => 'faksmili',
				'label' => 'FAKSMILI',
				'rules' => 'trim'
			],
			[
				'field' => 'emaill',
				'label' => 'Email',
				'rules' => 'trim'
			],
			[
				'field' => 'website',
				'label' => 'Website',
				'rules' => 'trim'
			],
			[
				'field' => 'statusAktif',
				'label' => 'Status Aktif',
				'rules' => 'trim'
			],
			[
				'field' => 'bentukKoperasi',
				'label' => 'Bentuk Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'jenisKoperasi',
				'label' => 'Jenis Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'kelompokKoperasi',
				'label' => 'Kelompok Koperasi',
				'rules' => 'trim'
			],
			[
				'field' => 'sektorUsaha',
				'label' => 'Sektor Usaha',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_ketua',
				'label' => 'No Telp Ketua',
				'rules' => 'trim'
			],
			[
				'field' => 'namaSekretaris',
				'label' => 'Nama Sekretaris',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_sekretaris',
				'label' => 'No Telp Sekretaris',
				'rules' => 'trim'
			],
			[
				'field' => 'namaBendahara',
				'label' => 'Nama Bendahara',
				'rules' => 'trim'
			],
			[
				'field' => 'no_telp_bendahara',
				'label' => 'No Telp Bendahara',
				'rules' => 'trim'
			],
			[
				'field' => 'namaPengawas',
				'label' => 'Nama Pengawas',
				'rules' => 'trim'
			],
			[
				'field' => 'namaManager',
				'label' => 'Nama Manager',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlAnggota_pria',
				'label' => 'Jumlah Anggota Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlAnggota_wanita',
				'label' => 'Jumlah Anggota Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalAnggota',
				'label' => 'Total Anggota',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlManager_pria',
				'label' => 'Jumlah Manager Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlManager_wanita',
				'label' => 'Jumlah Manager Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalManager',
				'label' => 'Total Manager',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlKaryawan_pria',
				'label' => 'Jumlah Karyawan Pria',
				'rules' => 'trim'
			],
			[
				'field' => 'jmlKaryawan_wanita',
				'label' => 'Jumlah Karyawan Wanita',
				'rules' => 'trim'
			],
			[
				'field' => 'totalKaryawan',
				'label' => 'Total Karyawan',
				'rules' => 'trim'
			],
			[
				'field' => 'statusNIK',
				'label' => 'Status NIK',
				'rules' => 'trim'
			],
			[
				'field' => 'statusGrade',
				'label' => 'Status Grade',
				'rules' => 'trim'
			],
			[
				'field' => 'statusValid',
				'label' => 'status Valid',
				'rules' => 'trim'
			],
		];
	}

	public function getByID($id)
	{
		return $this->db->get_where('tb_datakesehatanm', ["id" => $id])->row();
	}
	public function getKes1ByID($id_tb_dataKesehatan1)
	{
		$sql = "SELECT * FROM `tb_datakesehatan1` JOIN tb_kesehatan1sub1 ON tb_datakesehatan1.id_tb_kesehatan1sub1 = tb_kesehatan1sub1.id JOIN tb_kesehatan1sub2 ON tb_datakesehatan1.id_tb_kesehatan1sub2 = tb_kesehatan1sub2.id JOIN tb_kesehatan1sub3 ON tb_datakesehatan1.id_tb_kesehatan1sub3 = tb_kesehatan1sub3.id JOIN tb_kesehatan1sub4 ON tb_datakesehatan1.id_tb_kesehatan1sub4 = tb_kesehatan1sub4.id JOIN tb_kesehatan1sub5 ON tb_datakesehatan1.id_tb_kesehatan1sub5 = tb_kesehatan1sub5.id WHERE tb_datakesehatan1.id = $id_tb_dataKesehatan1";
		$data = $this->db->query($sql);
		return $data->row();

		// return $this->db->get_where('tb_datakesehatan1', ["id" => $id_tb_dataKesehatan1])->row();
	}
	public function getKes2ByID($id_tb_dataKesehatan2)
	{
		$sql = "SELECT * FROM tb_datakeuangan JOIN tb_kesehatan2sub1 ON tb_datakeuangan.id_tb_kesehatan2Sub1 = tb_kesehatan2sub1.id JOIN tb_kesehatan2sub2 ON tb_datakeuangan.id_tb_kesehatan2Sub2 = tb_kesehatan2sub2.id JOIN tb_kesehatan2sub3 ON tb_datakeuangan.id_tb_kesehatan2Sub3 = tb_kesehatan2sub3.id JOIN tb_kesehatan2sub4 ON tb_datakeuangan.id_tb_kesehatan2Sub4 = tb_kesehatan2sub4.id WHERE tb_datakeuangan.id = $id_tb_dataKesehatan2";
		$data = $this->db->query($sql);
		return $data->row();
		// return $this->db->get_where('tb_datakeuangan', ["id" => $id_tb_dataKesehatan2])->row();
	}
	public function getKelembagaan($idKoperasi)
	{
		return $this->db->get_where($this->tb_kelembagaan, ["idKoperasi" => $idKoperasi])->result();
	}
	public function getAsset($idKoperasi)
	{
		return $this->db->get_where($this->tb_asset, ["idKoperasi" => $idKoperasi])->result();
	}
	public function getAll_user($idKop)
	{
		return $this->db->get_where($this->_table, ["nikKoperasi" => $idKop])->row();
	}


	public function simpan($data1,$data2)
	{
		$this->db->insert('tb_datakoperasi', $data1);
		$this->db->insert('tb_kelembagaan', $data2);
	}
	public function tambahKelembagaan($data1)
	{
		$this->db->insert('tb_kelembagaan', $data1);
	}
	public function tambahAsset($data1)
	{
		$this->db->insert('tb_asset', $data1);
	}

	// data quiz
	public function tambahKesehatan1($data1,$data2,$data3,$data4,$data5){
		$this->db->insert('tb_kesehatan1Sub1',$data1);
		$id_sub1 = $this->db->insert_id();
		$this->db->insert('tb_kesehatan1Sub2',$data2);
		$id_sub2 = $this->db->insert_id();
		$this->db->insert('tb_kesehatan1Sub3',$data3);
		$id_sub3 = $this->db->insert_id();
		$this->db->insert('tb_kesehatan1Sub4',$data4);
		$id_sub4 = $this->db->insert_id();
		$this->db->insert('tb_kesehatan1Sub5',$data5);
		$id_sub5 = $this->db->insert_id();
		$id_sub = array ($id_sub1,$id_sub2,$id_sub3,$id_sub4,$id_sub5);
		return $id_sub;

	}
	public function tambahKesehatan1Master($data6){
		$this->db->insert('tb_datakesehatan1',$data6);
		$id_hub = $this->db->insert_id();
		return $id_hub;
	}

	// data keuangan
	public function tambahKesehatan2($data1,$data2,$data3,$data4){
		$this->db->insert('tb_kesehatan2Sub1',$data1);
		$id_sub1 = $this->db->insert_id();
		$this->db->insert('tb_kesehatan2Sub2',$data2);
		$id_sub2 = $this->db->insert_id();
		$this->db->insert('tb_kesehatan2Sub3',$data3);
		$id_sub3 = $this->db->insert_id();
		$this->db->insert('tb_kesehatan2Sub4',$data4);
		$id_sub4 = $this->db->insert_id();
		$id_sub = array ($id_sub1,$id_sub2,$id_sub3,$id_sub4);
		return $id_sub;
	}
	public function tambahKesehatan2Master($data5){
		$this->db->insert('tb_datakeuangan',$data5);
		$id_hub =  $this->db->insert_id();
		return $id_hub;
	}
	
	public function tambahdataKesehatanM($dataM){
		$this->db->insert('tb_datakesehatanm',$dataM);
	}


	public function updatedataUmum($data1,$id)
	{
		$this->db->update('tb_datakoperasi', $data1, array('id' => $id));
	}
	public function updateKelembagaan($data1,$id)
	{
		$this->db->update('tb_kelembagaan', $data1, array('id' => $id));
	}
	public function updateAsset($data1,$id)
	{
		$this->db->update('tb_asset', $data1, array('id' => $id));
	}
	public function updatedataKesehatanM($dataM,$id)
	{
		$this->db->update('tb_datakesehatanm', $dataM, array('id' => $id));
	}

	public function hapus($id)
	{
		return $this->db->delete($this->_table, array('id' => $id));
	}
	public function hapusKelembagaan($id)
	{
		return $this->db->delete($this->tb_kelembagaan, array('id' => $id));
	}
	public function hapusAsset($id)
	{
		return $this->db->delete($this->tb_asset, array('id' => $id));
	}

}
