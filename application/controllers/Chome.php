<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_absen');
	}

	public function index()
	{
		$userData = $this->session->userdata();


		$data = array('usernamenya' => $userData['username'], 'namanya' => $userData['nama'], 'levelnya' => $userData['level'], 'scripts' => array());
		$this->template->load('static', 'dashboard', $data);
	}
	public function pagi()
	{

		$this->load->library('ciqrcode');
		header("Content-Type: image/png");
		$ip = getHostByName(getHostName());
		$params['data'] =date('d').'_pagi'  ;
		$this->ciqrcode->generate($params);
	}
	public function siang()
    {

        $this->load->library('ciqrcode');
        header("Content-Type: image/png");
        $ip = getHostByName(getHostName());
        $params['data'] =date('d').'_siang';

        $this->ciqrcode->generate($params);
    }
    public function sore()
    {

        $this->load->library('ciqrcode');
        header("Content-Type: image/png");
        $ip = getHostByName(getHostName());
        $params['data'] =date('d').'_sore';

        $this->ciqrcode->generate($params);
    }
	public function pagiValidasi()
    {header('Content-Type:application/json');
        $id= explode('_',$this->input->post('id'));

        $tgl_absen = date('Y-m-d');

        if ($id[0] == date('d')) {
                $imei = $this->input->post('imei');
                $pagi = 1;
                $pegawai = $this->m_absen->getImei($imei);
               if ($pegawai != null) {
                   if($this->m_absen->validasiAbsen("absen_$id[1]",$pegawai[0]->nip,$tgl_absen)!=null){
                       $data=array(
                           'error'=>TRUE,
                           'message'=>'Anda sudah absen'
                       );
                   }
                   else {
                       foreach ($pegawai as $p) {
                           $simpan = array(
                               'nip' => $pegawai[0]->nip,
                               'tgl_absen' => $tgl_absen,
                               'absen_'.$id[1] => $pagi
                           );
                           $this->m_absen->tambah($simpan, 'absen_'.$id[1]);
                           $data = array(

                               'error' => false,
                               'message' => "Anda berhasil Absen $id[1]"
                           );

                       }
                   }
                }
               else {
                    $data = array(

                        'error' => TRUE,
                        'message' => "Anda tidak terdaftar , daftarkan imei anda. IMEI=$imei"
                    );
                }

            }
        else{
            $data=array(
                'error'=>TRUE,
                'message'=>'Absen tidak berlaku'
            );
        }
           /* else if($id[1]=="siang"){
                $imei = $this->input->post('imei');
                $siang = 1;


                $pegawai = $this->m_absen->getImei($imei);

                if ($this->m_absen->validasiAbsen("absen_siang",$pegawai[0]->nip, $tgl_absen)) {

                    $data = array(
                        'error' => true,
                        'message' => 'Anda Sudah Absen Siang'
                    );

                }else if ($pegawai != null) {
                    foreach ($pegawai as $p) {
                        $simpan = array(
                            'nip' => $pegawai[0]->nip,
                            'tgl_absen' => $tgl_absen,
                            'absen_siang' => $siang
                        );
                        $this->m_absen->tambah($simpan,'absen_siang');
                        $data = array(

                            'error' => false,
                            'message' => 'Anda berhasil Absen Siang'
                        );

                    }
                } else {
                    $data = array(
                        'imei' => $imei,
                        'error' => TRUE,
                        'message' => 'Anda tidak terdaftar'
                    );
                }
            }
            else if($id[1]="sore"){
                $imei = $this->input->post('imei');
                $sore = 1;


                $pegawai = $this->m_absen->getImei($imei);

                if ($this->m_absen->validasiAbsen("absen_sore",$pegawai[0]->nip, $tgl_absen)) {

                    $data = array(
                        'error' => true,
                        'message' => 'Anda Sudah Absen Sore'
                    );

                }else if ($pegawai != null) {
                    foreach ($pegawai as $p) {
                        $simpan = array(
                            'nip' => $pegawai[0]->nip,
                            'tgl_absen' => $tgl_absen,
                            'absen_sore' => $sore
                        );
                        $this->m_absen->tambah($simpan,'absen_sore');
                        $data = array(

                            'error' => false,
                            'message' => 'Anda berhasil Absen Sore'
                        );
                    }
                } else {
                    $data = array(
                        'imei' => $imei,
                        'error' => TRUE,
                        'message' => 'Anda tidak terdaftar'
                    );
                }
            }
            echo json_encode($data);
        }
        else{
            $data = array(
                'error' => true,
                'status' => 'Absen tidak berlaku',

            );
           */
            echo json_encode($data);
        }


}
