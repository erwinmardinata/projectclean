<?php

class Mprogram_detail extends CI_Model {

	function get_data() {

		$this->db->order_by('id', 'ASC');
		return $this->db->get('program_detail')->result();

	}

	function cek_data($id) {

		$this->db->where('id', $id);
		return $this->db->get('program_detail')->row();

	}

	function insert_data($data) {

		return $this->db->insert('program_detail', $data);

	}

	function update_data($data, $id) {

		$this->db->where('id', $id);
		return $this->db->update('program_detail', $data);

	}

	function delete_data($id) {

		$this->db->where('id', $id);
		return $this->db->delete('program_detail');

	}

	function make_query()
	{
		$this->db->select('program_detail.*')
				 ->from("program_detail");
			 if(isset($_POST["search"]["value"]))
			 {
						$this->db->like("judul", $_POST["search"]["value"]);
			 }
			 if(isset($_POST["order"]))
			 {
						$this->db->order_by($_POST['order']['0']['column'], $_POST['order']['0']['dir']);
			 }
			 else
			 {
						$this->db->order_by('id', 'ASC');
			 }
	}

	function make_datatables(){
			 $this->make_query();
			 if($_POST["length"] != -1)
			 {
						$this->db->limit($_POST['length'], $_POST['start']);
			 }
			 $query = $this->db->get();
			 return $query->result();
	}

	function get_filtered_data(){
			 $this->make_query();
			 $query = $this->db->get();
			 return $query->num_rows();
	}

	function get_all_data()
	{
			 $this->db->select("*");
			 $this->db->from("program_detail");
			 return $this->db->count_all_results();
	}


}
