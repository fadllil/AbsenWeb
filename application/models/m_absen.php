<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_absen extends CI_Model
{
	public function tampil()
	{
		$data = $this->db->query("SELECT a.id_absen, a.nip, a.tgl_absen, a.absen_pagi, b.nama, b.nip from absen_pagi a join pegawai b on a.nip=b.nip");
		return $data;
	}
	public function tampil_siang()
	{
		$data = $this->db->query("SELECT a.id_absen, a.nip, a.tgl_absen, a.absen_siang, b.nama, b.nip from absen_siang a join pegawai b on a.nip=b.nip");
		return $data;
	}
	public function tampil_sore()
	{
		$data = $this->db->query("SELECT a.id_absen, a.nip, a.tgl_absen, a.absen_sore, b.nama, b.nip from absen_sore a join pegawai b on a.nip=b.nip");
		return $data;
	}
	public function tampil_pegawai()
	{
		$data = $this->db->query("SELECT * FROM pegawai order by nama asc");
		return $data;
	}
	public function tambah($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function getImei($imei){
	    return $this->db->get_where('pegawai',array('imei'=>$imei))->result();
    }

    public function validasiAbsen($table, $imei, $tgl_absen){

	    return $this->db->get_where($table, array('nip'=>$imei, 'tgl_absen'=>$tgl_absen))->result();



    }











}





