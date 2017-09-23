<?php
class query_presensi extends CI_model {

	function view_data() {
		$query = $this->db->query("select * from siswa");
		return $query->result();
	}
}