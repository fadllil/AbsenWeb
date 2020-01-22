<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pns extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('m_pns');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$pegawai = $this->m_pns->tampil()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'pegawai' => $pegawai,'scripts' =>array());
		$this->template->load('admin/static','admin/pns',$data);
	}

	public function tambah()
	{	
		$this->form_validation->set_rules(
			'nip',
			'nip',
			'trim|required|is_unique[pegawai.nip]'
		);
		$this->form_validation->set_rules(
		    'imei',
            'imei',
            'is_unique[pegawai.imei]'
        );
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
				Gagal Menambahkan Data!!<br>
				nip sudah digunakan!!
				
			</div>');
			redirect('admin/pns');
		}else{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$pangkat = $this->input->post('pangkat');
		$golongan = $this->input->post('pangkat');
		$jabatan = $this->input->post('jabatan');
		$unitkerja = $this->input->post('unitkerja');
		$status = ($this->input->post('status'));
        $imei=$this->input->post('imei');

		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'pangkat' => $pangkat,
			'golongan' => $golongan,
			'jabatan' => $jabatan,
			'unitkerja' => $unitkerja,
			'status' => $status,
            'imei'=>$imei
			);
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data Pegawai Berhasil disimpan</div>');
		$this->m_pns->tambah($data,'pegawai');
		redirect('admin/pns');
		}
	}

	public function update()
	{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$pangkat = $this->input->post('pangkat');
		$golongan = $this->input->post('golongan');
		$jabatan = $this->input->post('jabatan');
		$unitkerja = $this->input->post('unitkerja');
		$status = ($this->input->post('status'));
		$imei=$this->input->post('imei');

	$data = array(
		'nip' => $nip,
			'nama' => $nama,
			'pangkat' => $pangkat,
			'golongan' => $golongan,
			'jabatan' => $jabatan,
			'unitkerja' => $unitkerja,
			'status' => $status,
            'imei'=>$imei
	);

	$where = array(
		'nip' => $nip
	);


	$this->m_pns->update($where,$data,'pegawai');
	redirect('admin/pns');
	}


	public function hapus($nip)
	{
		$where = array('nip' => $nip);
		$this->m_pns->hapus($where,'pegawai');
		redirect('admin/pns');
	}

	
}
