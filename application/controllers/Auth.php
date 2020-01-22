<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_absen');
	}
	public function index()
	{
		$pagi = $this->m_absen->tampil()->result();
		$siang = $this->m_absen->tampil_siang()->result();
		$sore = $this->m_absen->tampil_sore()->result();
		$pegawai = $this->m_absen->tampil_pegawai()->result();

		$data = array('pagi' => $pagi, 'siang' => $siang, 'sore' => $sore, 'pegawai' => $pegawai, 'scripts' => array());
		$this->load->view('home', $data);
	}
	public function tampillogin()
	{
		$this->load->view('login');
	}
	public function tambahpagi()
	{
		$nip = $this->input->post('nip');
		$absen_pagi = $this->input->post('absen');

		$data = array(
			'nip' => $nip,
			'tgl_absen' => date('Y-m-d'),
			'absen_pagi' => $absen_pagi,
		);
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data Absen Berhasil disimpan</div>');
		$this->m_absen->tambah($data, 'absen_pagi');
		redirect('auth');
	}

	public function tambahsiang()
	{
		$nip = $this->input->post('nip');
		$absen_siang = $this->input->post('absen');

		$data = array(
			'nip' => $nip,
			'tgl_absen' => date('Y-m-d'),
			'absen_siang' => $absen_siang,
		);
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data Absen Berhasil disimpan</div>');
		$this->m_absen->tambah($data, 'absen_siang');
		redirect('auth');
	}

	public function tambahsore()
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
		redirect('auth');
	}

	public function hapus($id_absen)
	{
		$where = array('id_absen' => $id_absen);
		$this->m_absen->hapus($where, 'absen_pagi');
		redirect('sekretariat/cabsen_pagi');
	}
	public function do_login()
	{
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE))
		);
		$hasil = $this->m_login->validasi($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['isUser'] = TRUE;
				$sess_data['nip'] = $sess->nip;
				$sess_data['username'] = $sess->username;
				$sess_data['nama'] = $sess->nama;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);

				$userData = $this->session->userdata();
			}
			if ($userData['level'] == '1') {
				redirect('chome');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal login: Cek username, password!</div>');
			redirect('Auth/tampillogin');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth', 'refresh');
	}
}
