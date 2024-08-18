<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_model extends CI_Model 
{
	public function __construct() {
		parent::__construct();
	}

    public function get_mobil(){
        $sql = "SELECT * FROM mobil";
        $query = $this->db->query($sql);
        return $query->result_array();
		// $sql; exit();
    }
    

}