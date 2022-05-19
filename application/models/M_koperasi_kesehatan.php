<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_koperasi_kesehatan extends CI_Model
{

	private $_table = "tb_datakoperasi";
	private $tb_asset = "tb_asset";
	private $tb_kelembagaan = "tb_kelembagaan";

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

	public function getAll()
	{
		$this->db->order_by('id');
		return $this->db->get($this->_table)->result();
	}

	public function getByID($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
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
