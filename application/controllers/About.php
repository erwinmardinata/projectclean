<?php

class About extends Front_controller {

	function __construct() {

		parent::__construct();
		$this->load->model('Mabout', 'mdl');

	}

	function index() {

	    $data_array = array();
		$data_array['tentang'] = $this->mdl->get_tentang();
		$data_array['visi'] = $this->mdl->get_visi();
		$data_array['misi'] = $this->mdl->get_misi();
		$data_array['pegawai'] = $this->mdl->get_pegawai();
		$data_array['unggulan'] = $this->mdl->get_unggulan();

		$title = "Tentang Kami";
		$deskripsi = "";
		$image = "";
		// $deskripsi = $data_array['agenda']->deskripsi;
		$subtitle = "about";
		$content = $this->load->view('user/tentang_kami.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);

	}

}
