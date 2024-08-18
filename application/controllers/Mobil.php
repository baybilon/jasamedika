<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {
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
		$data['get_mobil'] = $this->MdlMobil->get_mobil();
        $data['app'] = 'mobil/mobils';
		$data['footer'] = 'template/footer';
		
		$this->load->view('index',$data);

	}

    public function regis(){

        $data['navbar'] = 'template/navbar';
        $data['sidebar'] = 'template/sidebar';
        $data['app'] = 'mobil/reg_mobil';
		$data['footer'] = 'template/footer';

		$this->load->view('index',$data);

    }

	public function insert_mobil(){
		
		$nopol = $this->input->post('nopol');
		$merk = $this->input->post('merk');
		$model = $this->input->post('model');

		$data = array(
			'nopol' => $nopol,
			'merk' => $merk,
			'model' => $model,
			'ketersediaan' => 1,
		);

		// $this->db->trans_start();
		// 	$this->db->insert('mobil', $data);
		// $this->db->trans_complete();

		$this->db->insert('mobil', $data);

		// if ($this->db->trans_status() === FALSE) {
		//     $dataRes = array(
		//     	'status' => 'error',
		//     	'msg' => '<b>Failed</b>',
		//     	'style' => 'alert-danger'
		//     );
		//     $this->session->set_flashdata('alert', $dataRes);
		//     echo json_encode($dataRes);			
		// } 

	}

}