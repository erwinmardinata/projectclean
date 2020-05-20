<?php

class Msurat_keluar extends CI_Model {

	function get_data() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('surat_keluar')->result();
	}

	function get_data_disposis($id) {
		$this->db->where('id_surat_keluar', $id);
		return $this->db->get('disposisi')->result();
	}
	function get_data_disposis_($id) {
		$this->db->where('id_surat_keluar', $id);
		return $this->db->get('disposisi')->row();
	}

	function insert_data($data) {
		return $this->db->insert('surat_keluar', $data);
	}

	function disposisi_insert($data) {
		return $this->db->insert('disposisi', $data);
	}

	function cek_data($id) {
		$this->db->where('id', $id);
		return $this->db->get('surat_keluar')->row();
	}

	function update_data($data, $id) {
		$this->db->where('id', $id);
		return $this->db->update('surat_keluar', $data);
	}

	function delete_data($id) {
		$this->db->where('id', $id);
		return $this->db->delete('surat_keluar');
	}

	function delete_data_disposisi($id) {
		$this->db->where('id', $id);
		return $this->db->delete('disposisi');
	}

	// function get_opd() {
	// 	$this->db->order_by('id', 'ASC');
	// 	return $this->db->get('opd')->result();
	// }	

	function get_klasifikasi() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('klasifikasi')->result();
	}	

	function get_sifat() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('sifat')->result();
	}	

	function make_query()
	{
		$this->db->select('surat_keluar.*')
				 ->from("surat_keluar");
				 // ->join("opd", "opd.id=surat_keluar.dari")
				 // ->join("opd", "opd.id=surat_keluar.ke")
				 // ->join("klasifikasi", "klasifikasi.id=surat_keluar.klasifikasi")
				 // ->join("sifat", "sifat.id=surat_keluar.sifat_surat");
			 if(isset($_POST["search"]["jenis"]))
			 {
						$this->db->like("surat_keluar.isi_ringkasan", $_POST["search"]["value"]);
						// $this->db->or_like("semester", $_POST["search"]["value"]);
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
			 $this->db->from("surat_keluar");
			 return $this->db->count_all_results();
	}


}
