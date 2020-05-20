<?php

class Mjasa extends CI_Model {

	function get_data($id) {
		$this->db->order_by('id', 'ASC');
		$this->db->where('id_program_detail', $id);
		return $this->db->get('jasa')->result();
	}

	function insert_data($data) {
		return $this->db->insert('jasa', $data);
	}

	function cek_data($id) {
		$this->db->where('id', $id);
		return $this->db->get('jasa')->row();
	}

	function update_data($data, $id) {
		$this->db->where('id', $id);
		return $this->db->update('jasa', $data);
	}

	function delete_data($id) {
		$this->db->where('id', $id);
		return $this->db->delete('jasa');
	}

	function make_query()
	{
		$this->db->select('a.*')
				 ->from('jasa a');
			 if(isset($_POST["search"]["nama"]))
			 {
						$this->db->like("a.nama", $_POST["search"]["value"]);
						// $this->db->like("ks.kategori", $_POST["search"]["value"]);
			 }
			 if(isset($_POST["order"]))
			 {
						$this->db->order_by($_POST['order']['0']['column'], $_POST['order']['0']['dir']);
			 }
			 else
			 {
						$this->db->order_by('id', 'DESC');
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
			 $this->db->from("jasa");
			 return $this->db->count_all_results();
	}


}
