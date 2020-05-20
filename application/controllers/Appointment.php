<?php

class Appointment extends Front_controller {

	function __construct() {

		parent::__construct();
		$this->load->model('Mappointment', 'mdl');

	}

	function index() {

	  $data_array = array();
		$data_array['program'] = $this->mdl->get_program();
		$data_array['jasa'] = $this->mdl->get_jasa();
		$title = "Appointment";
		$deskripsi = "";
		$image = "";
		// $deskripsi = $data_array['agenda']->deskripsi;
		$subtitle = "appointment";
		$content = $this->load->view('user/appointment.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);

	}

	function insert() {

		$post = $this->input->post();

		$query = $this->mdl->insert_data($post);

		$query == true ? $this->alert_info('Berhasil terkirim') : $this->alert_error('Gagal terkirim');

		redirect('appointment');


	}

	function get_jasa() {

		$id = $this->input->get('id');

		$jasa = $this->mdl->get_jasa2($id);

		// echo $id;exit;

		echo "<option value=''>- Pilih Jasa -</option>";
		foreach($jasa as $row){
			echo "<option value='".$row->id."'>".$row->nama."</option>";
		}

	}


}
