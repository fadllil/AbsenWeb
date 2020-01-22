<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cabsen_sore extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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

		$sore = $this->m_absen->tampil_sore()->result();
		$pegawai = $this->m_absen->tampil_pegawai()->result();

		$data = array('usernamenya' => $username, 'namanya' => $nama, 'levelnya' => $level, 'sore' => $sore, 'pegawai' => $pegawai, 'scripts' => array());
		$this->template->load('static', 'umum/vabsen_sore', $data);
	}

	public function tambah()
	{
		$nip = $this->input->post('nip');
		$absen_sore = $this->input->post('absen');

		$data = array(
			'nip' => $nip,
			'tgl_absen' => date('Y-m-d'),
			'absen_sore' => $absen_sore,
		);
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data Absen Berhasil disimpan</div>');
		$this->m_absen->tambah($data, 'absen_sore');
		redirect('umum/cabsen_sore');
	}

	public function hapus($id_absen)
	{
		$where = array('id_absen' => $id_absen);
		$this->m_absen->hapus($where, 'absen_sore');
		redirect('umum/cabsen_sore');
	}
}

/* End of file Cmasuk.php */
/* Location: ./application/controllers/admin/Cmasuk.php */
