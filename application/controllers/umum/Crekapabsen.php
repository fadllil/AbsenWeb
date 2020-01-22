<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crekapabsen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$level = $this->session->userdata('level');
		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('m_rekap');
		$this->load->model('m_absen');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$ap = $this->m_rekap->jlhap()->result();
		$asi = $this->m_rekap->jlhasi()->result();
		$aso = $this->m_rekap->jlhaso()->result();
		$sakit = $this->m_rekap->sakit()->result();
		$izin = $this->m_rekap->izin()->result();
		$alfa = $this->m_rekap->alfa()->result();
		$dinas_luar = $this->m_rekap->dinas_luar()->result();
		$cuti = $this->m_rekap->cuti()->result();
		$rekap = $this->m_rekap->rekap()->result();
		$pegawai = $this->m_absen->tampil_pegawai()->result();

		$data = array(
			'usernamenya' => $username,
			'namanya' => $nama,
			'levelnya' => $level,
			'ap' => $ap,
			'asi' => $asi,
			'aso' => $aso,
			'sakit' => $sakit,
			'izin' => $izin,
			'alfa' => $alfa,
			'dinas_luar' => $dinas_luar,
			'cuti' => $cuti,
			'rekap' => $rekap,
			'pegawai' => $pegawai,
			'scripts' => array()
		);

		$this->template->load('static', 'umum/vrekap_absen', $data);
	}

	public function cetak_rekap()
	{
		$ap = $this->m_rekap->jlhap()->result();
		$asi = $this->m_rekap->jlhasi()->result();
		$aso = $this->m_rekap->jlhaso()->result();
		$sakit = $this->m_rekap->sakit()->result();
		$izin = $this->m_rekap->izin()->result();
		$alfa = $this->m_rekap->alfa()->result();
		$dinas_luar = $this->m_rekap->dinas_luar()->result();
		$cuti = $this->m_rekap->cuti()->result();
		$rekap = $this->m_rekap->rekap()->result();
		$dt = $this->m_rekap->print()->result();

		$this->load->library('pdf');

		$data = array(
			'ap' => $ap,
			'asi' => $asi,
			'aso' => $aso,
			'sakit' => $sakit,
			'izin' => $izin,
			'alfa' => $alfa,
			'dinas_luar' => $dinas_luar,
			'cuti' => $cuti,
			'rekap' => $rekap,
			'dt' => $dt,
			'scripts' => array()
		);

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "rekap_absen.pdf";
		$this->pdf->load_view('umum/Vcetakrekap', $data);
	}
}

/* End of file Cmasuk.php */
/* Location: ./application/controllers/admin/Cmasuk.php */
