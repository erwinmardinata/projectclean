<?php

class Mtentang_desa extends CI_Model {

	function get_data() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('tentang_desa')->row();

	}

	function cek_data($id) {

		$this->db->where('id', $id);
		return $this->db->get('tentang_desa')->row();

	}

	function insert_data($data) {

		return $this->db->insert('tentang_desa', $data);

	}

	function update_data($data, $id) {

		$this->db->where('id', $id);
		return $this->db->update('tentang_desa', $data);

	}

	function delete_data($id) {

		$this->db->where('id', $id);
		return $this->db->delete('tentang_desa');

	}

}
