 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
			$userData = $this->session->userdata();
			$data = array('usernamenya' => $userData['username'],'namanya' => $userData['nama'],'levelnya' => $userData['level'],'scripts' =>array());
			$this->template->load('admin/static','admin/dashboard',$data);
	}
}