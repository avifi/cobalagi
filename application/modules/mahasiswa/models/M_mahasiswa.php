<?php 
/**
 * 
 */
class M_mahasiswa extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function get()
	{
		return $this->db->get('tbl_mahasiswa');
	}
}