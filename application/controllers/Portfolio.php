<?php

class Portfolio extends Front_controller {

	function __construct() {

		parent::__construct();
		$this->load->model('Mportfolio', 'mdl');

	}

	function index() {
    $data_array = array();
		$data_array['data'] = $this->mdl->get_ketegori_foto();

		$title = "PORTFOLIO";
		$deskripsi = "";
		$image = "";
		$subtitle = "portfolio";
		$content = $this->load->view('user/portfolio.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);
	}

	function detail($id) {
		$data_array = array();
		$data_array['data'] = $this->mdl->get_foto($id);
		$data_array['data2'] = $this->db->where('id', $id)->get('kategori_foto')->row();

		$title = "PORTFOLIO";
		$deskripsi = "";
		$image = "";
		$subtitle = "portfolio";
		$content = $this->load->view('user/portfolio_detail.php', $data_array, true);

		$this->load_content($title, $deskripsi, $image, $subtitle, $content);
	}

}
