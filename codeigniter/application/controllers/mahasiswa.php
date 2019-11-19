<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index() {
		$data['mahasiswa'] = $this->Mahasiswa_model->getmahasiswa();
		
		$this->load->view('v_mahasiswa',$data);
	}
}
