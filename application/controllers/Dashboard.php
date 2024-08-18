<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();

		// if ($this->MdlAuth->session_verf()==false) {
		// 	$this->session->sess_destroy();
		// 	redirect(base_url().'login');
		// }
	}

	public function index() {
        
		$data['navbar'] = 'template/navbar';
        $data['sidebar'] = 'template/sidebar';
        $data['app'] = 'dashboard';
		$data['footer'] = 'template/footer';
		// $data['get_user'] = $this->MdlSetting->get_user();
		// $data['get_sidebar_menu'] = $this->MdlMain->get_sidebar_menu();
		// $data['get_menu'] = $this->MdlMain->get_menu();
		$this->load->view('index',$data);

	}

	
}
