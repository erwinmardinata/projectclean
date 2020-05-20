<?php

class Tentang_web extends Back_controller {

	function __construct() {

		parent::__construct();
		$this->load->model('Mtentang_desa', 'mdl');
		$cek = $this->session->userdata('hak_akses');

		if(!($cek)) {
			redirect('Datacenter');
		}

	}

	function index() {

		$data_array = array();

		$data_array['data']	= $this->mdl->get_data();

		$title = "Tentang";
		$subtitle = "tentang_desa";
		$content = $this->load->view('list.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function add() {

		$data_array = array();

		$title = "Tambah Sambutan";
		$subtitle = "profile_web";
		$content = $this->load->view('add.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function edit($id) {

		$data_array = array();

		$data_array['data']	= $this->mdl->cek_data($id);

		$title = "Edit Sambutan";
		$subtitle = "profile_web";
		$content = $this->load->view('edit.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function insert() {

		$post = $this->input->post();

		$query = $this->mdl->insert_data($post);

		$query == true ? $this->alert_info('Berhasil Tambah Sambutan Baru') : $this->alert_error('Gagal Tambah Sambutan Baru');

		redirect('Tentang_web');

	}

	function update() {

		$post = $this->input->post();

		$query = $this->mdl->update_data($post, $post['id']);

		$query == true ? $this->alert_info('Berhasil Ubah Sambutan') : $this->alert_error('Gagal Ubah Sambutan');

		redirect('Tentang_web');

	}

	function delete($id) {

		$query = $this->mdl->delete_data($id);
		$query == true ? $this->alert_info('Berhasil Hapus Sambutan') : $this->alert_error('Gagal Hapus Sambutan');
		redirect('Slider');

	}

}
