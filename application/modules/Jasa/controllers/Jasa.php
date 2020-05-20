<?php

class Jasa extends Back_controller {

	public $judul = "Data Jasa";
	public $url = "Jasa";

	function __construct() {

		parent::__construct();
		$this->load->model('Mjasa', 'mdl');
		$cek = $this->session->userdata('logged_in');
		if(!($cek)) {
			redirect('Auth');
		}

	}

	function index($id) {

		$data_array = array();

		$data_array['data'] = $this->mdl->get_data($id);
		$data_array['judul'] = $this->judul;
		$data_array['opd'] = $this->db->where('id', $id)->get('program_detail')->row();
		$data_array['url'] = $this->url;
		$data_array['id'] = $id;

		$title = "Data ".$this->judul;
		$subtitle = "Program_detail";
		$content = $this->load->view('list.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function add($id) {

		$data_array = array();
		$data_array['judul'] = $this->judul;
		$data_array['url'] = $this->url;
		$data_array['id'] = $id;
		$data_array['opd'] = $this->db->where('id', $id)->get('program_detail')->row();

		$title = "Tambah Data ".$this->judul;
		$subtitle = "Program_detail";
		$content = $this->load->view('add.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function edit($id, $id2) {

		$data_array = array();
		$data_array['judul'] = $this->judul;
		$data_array['data']	= $this->mdl->cek_data($id);
		$data_array['url'] = $this->url;
		$data_array['opd'] = $this->db->where('id', $id)->get('program_detail')->row();
		$data_array['id'] = $id2;

		$title = "Edit Data ".$this->judul;
		$subtitle = "Program_detail";
		$content = $this->load->view('edit.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function insert() {

		$post = $this->input->post();
		// echo json_encode($data);exit;
		$query = $this->mdl->insert_data($post);

		$query == true ? $this->alert_info('Berhasil Tambah Data') : $this->alert_error('Gagal Tambah Data');

		redirect($this->url.'/add/'.$post['id_program_detail']);

	}

	function update() {

		$post = $this->input->post();

		$query = $this->mdl->update_data($post, $post['id']);

		$query == true ? $this->alert_info('Berhasil Ubah Data') : $this->alert_error('Gagal Ubah Data');

		redirect($this->url.'/index/'.$post['id_program_detail']);

	}

	function hapus($id, $id2) {

		$query = $this->mdl->delete_data($id);

		$query == true ? $this->alert_info('Berhasil Hapus Data') : $this->alert_error('Gagal Hapus Data');

		redirect($this->url.'/index/'.$id2);

	}

	function get_data() {
		$fetch_data = $this->mdl->make_datatables();
		$data = array();
		$no=1;
		foreach($fetch_data as $row)
		{
				 $sub_array = array();
				 $sub_array[] = $no++;
				 $sub_array[] = $row->nama;
				 $sub_array[] = '<a href="'.site_url($this->url.'/edit/'.$row->id).'" class="btn btn-info btn-xs update">Edit</a>
				 <a href="'.site_url($this->url.'/hapus/'.$row->id).'" onclick="return confirm(\'Apakah Anda Yakin?\')" class="btn btn-danger btn-xs delete">Delete</a>';
				 $data[] = $sub_array;
		}
		$output = array(
				 "draw"                    =>     intval($_POST["draw"]),
				 "recordsTotal"          =>      $this->mdl->get_all_data(),
				 "recordsFiltered"     =>     $this->mdl->get_filtered_data(),
				 "data"                    =>     $data
		);
		echo json_encode($output);

	}

}
