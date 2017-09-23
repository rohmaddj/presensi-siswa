<?php
class Presensi extends CI_Controller {
	
	function __Construct() {
		parent ::__construct();
	}

	function index() {
		$data['title'] = "System Presensi Siswa";
		$this->load->view('index', $data);
	}

	function simpan() {
		$this->load->model('presensi_model');
		$this->presensi_model->view_data();
		$this->load->view('index');
	}

	function view() {
		$this->load->model('query_presensi');
		$this->query_presensi->view_data();
		$this->load->view('index');
	}
}