<?php

class Layanan extends Front_controller {

	function __construct() {

		parent::__construct();
		$this->load->model('Mlayanan', 'mdl');

	}

	function index() {

    $data_array = array();
    $data_array['program'] = $this->mdl->get_program();

		$title = "Layanan Kami";
		$deskripsi = "";
		$image = "";
		// $deskripsi = $data_array['agenda']->deskripsi;
		$subtitle = "layanan";
		$content = $this->load->view('user/layanan.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);

	}

  function detail($id) {
    $data_array = array();
		$data_array['data'] = $this->mdl->cek_data($id);

		$title = "Layanan Kami";
		$deskripsi = "";
		$image = "";
		// $deskripsi = $data_array['agenda']->deskripsi;
		$subtitle = "layanan";
		$content = $this->load->view('user/layanan_detail.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);
  }

}
