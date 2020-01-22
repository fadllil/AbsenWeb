<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmperencanaan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('Mperencanaan');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$perencanaan= $this->Mperencanaan->tampil()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'perencanaan' => $perencanaan,'scripts' =>array());
		$this->template->load('admin/static','admin/vperencanaan',$data);
	}

	public function tambah()
	{	
		$this->form_validation->set_rules(
			'no',
			'no',
			'trim|required|is_unique[perencanaan.no]'
		);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
				Gagal Menambahkan Data!!<br>
				No sudah digunakan!!
				
			</div>');
			redirect('admin/cmperencanaan');
		}else{
		$no = $this->input->post('no');
		$kode = $this->input->post('kode');
		$sekolah = $this->input->post('sekolah');
		$tanggal = $this->input->post('tanggal');
		$alamat = $this->input->post('alamat');
		$keringkasan = $this->input->post('keringkasan');
 
		$data = array(
			'no' => $no,
			'kode' => $kode,
			'sekolah' => $sekolah,
			'tanggal' => $tanggal,
			'alamat' => $alamat,
			'keringkasan' => $keringkasan
			);
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data User Berhasil disimpan</div>');
		$this->Mperencanaan->tambah($data,'perencanaan');
		redirect('admin/cmperencanaan');
		}
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$jk = $this->input->post('jk');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');

	$data = array(
		'nama' => $nama,
		'username' => $username,
		'jenis_kelamin' => $jk,
		'no_hp' => $no_hp,
		'jabatan' => $jabatan,
		'email' => $email,
		'password' => $password,
		'level' => $level
	);

	$where = array(
		'id' => $id
	);


	$this->m_user->update($where,$data,'user');
	redirect('kepala/user');
	}


	public function hapus($no)
	{
		$where = array('no' => $no);
		$this->Mperencanaan->hapus($where,'perencanaan');
		redirect('admin/cmperencanaan');
	}

}

/* End of file Cmasuk.php */
/* Location: ./application/controllers/admin/Cmasuk.php */