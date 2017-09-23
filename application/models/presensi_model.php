<?php
class Presensi_model extends CI_model {
	
	function get_data() {
		$nim = $this->input->post('nim');
		$query = $this->db->query("select nama from siswa where 'nim' = $nim");
		$get_data = array(
			'nama'		=> $this->db->result($query),
			'tanggal'	=> $this->input->post('tgl'),
			'jam'		=> $this->input->post('jam')
		);
		$simpan = $this->db->insert('data_presensi', $get_data);
		return $simpan;
	}

	function view_data() {
		$query = $this->db->query("select * from siswa");
		return $query->result();
	}
}