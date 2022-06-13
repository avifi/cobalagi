<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}
 
	public function index()
	{
		$data = array(
			'no' => 1,
			'mhs' => $this->m_mahasiswa->get() );
		$this->load->view('v_mahasiswa', $data);
	}
 
}