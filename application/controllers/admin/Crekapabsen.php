<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crekapabsen extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('m_absen');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$rekap= $this->m_absen->rekap()->result();
		$jlhap= $this->m_absen->jlhap()->result();
		$pegawai= $this->m_absen->tampil_pegawai()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'rekap' => $rekap,'jlhap' => $jlhap,'pegawai' => $pegawai,'scripts' =>array());
		$this->template->load('admin/static','admin/vrekap_absen',$data);
	}
}

/* End of file Cmasuk.php */
/* Location: ./application/controllers/admin/Cmasuk.php */