<?php

class Mappointment extends CI_Model {

	function get_program() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('program_detail')->result();

	}

	function get_jasa() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('jasa')->result();

	}

	function insert_data($data) {

		return $this->db->insert('booking', $data);

	}

	function get_jasa2($id) {
		$this->db->where('id_program_detail', $id);
		return $this->db->get('jasa')->result();

	}

}
