<?php

class Surat extends Back_controller {

	public $judul = "Surat";
	public $url = "Surat";

	function __construct() {

		parent::__construct();
		$this->load->model('Msurat', 'mdl');
		$cek = $this->session->userdata('hak_akses');
		if(!($cek)) {
			redirect('Datacenter');
		}

	}

	function index() {

		$data_array = array();

		$data_array['data'] = $this->mdl->get_data();
		$data_array['judul'] = $this->judul;
		$data_array['url'] = $this->url;

		$title = "Data ".$this->judul;
		$subtitle = $this->judul;
		$content = $this->load->view('list.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function detail($id) {
		$data_array = array();
		$data_array['judul'] = $this->judul;
		$data_array['data']	= $this->mdl->cek_data($id);
		$data_array['disposisi'] = $this->mdl->get_data_disposis($id);
		$data_array['url'] = $this->url;
		$data_array['id'] = $id;

		$title = "Detail Data ".$this->judul;
		$subtitle = $this->judul;
		$content = $this->load->view('detail.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function disposisi($id) {
		$data_array = array();
		$data_array['judul'] = $this->judul;
		$data_array['data']	= $this->mdl->cek_data($id);
		$data_array['disposisi'] = $this->mdl->get_data_disposis($id);
		$data_array['url'] = $this->url;
		$data_array['id'] = $id;

		$title = "Disposisi Data ".$this->judul;
		$subtitle = $this->judul;
		$content = $this->load->view('disposisi.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function buat_disposisi($id) {
		$data_array = array();
		$data_array['judul'] = $this->judul;
		$data_array['data']	= $this->mdl->cek_data($id);
		$data_array['url'] = $this->url;
		$data_array['id'] = $id;

		$title = "Disposisi Data ".$this->judul;
		$subtitle = $this->judul;
		$content = $this->load->view('disposisi_add.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function hapus_disposisi($id, $id2) {

		$query = $this->mdl->delete_data_disposisi($id);

		$query == true ? $this->alert_info('Berhasil Hapus Data') : $this->alert_error('Gagal Hapus Data');

		redirect($this->url.'/detail/'.$id2);

	}

	function add() {

		$data_array = array();
		$data_array['judul'] = $this->judul;
		$data_array['url'] = $this->url;

		$title = "Tambah Data ".$this->judul;
		$subtitle = $this->judul;
		$content = $this->load->view('add.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function edit($id) {

		$data_array = array();
		$data_array['judul'] = $this->judul;
		$data_array['data']	= $this->mdl->cek_data($id);
		$data_array['url'] = $this->url;

		$title = "Edit Data ".$this->judul;
		$subtitle = $this->judul;
		$content = $this->load->view('edit.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function insert() {

		$post = $this->input->post();

		$media = $_FILES['lampiran']['name'];
		// echo $cek->photo;exit;
		if(empty($media)) {
			$name = "";
		} else {
			$config = array(
				'file_name'    => $media,
				'upload_path'  => './assets/lampiran/',
				'allowed_types' => 'jpg|jpeg|png|pdf|docx|doc',
				'max_size'      => 0
			);

			$this->upload->initialize($config);
			if(!$this->upload->do_upload('lampiran')) {
				$error = $this->upload->display_errors();
				$this->alert_error($error);
				redirect($url.'/add');
			}
			$get_name = $this->upload->data();
			$name = $get_name['file_name'];
		}

		$data = array(
			'nomor_agenda' => $post['nomor_agenda'],
			'asal' => $post['asal'],
			'kode' => $post['kode'],
			'nomor_surat' => $post['nomor_surat'],
			'index' => $post['index'],
			'tanggal_surat_masuk' => $post['tanggal_surat_masuk'],
			'perihal' => $post['perihal'],
			'isi_ringkasan' => $post['isi_ringkasan'],
			'catatan' => $post['catatan'],
			'lampiran' => $name
		);

		$query = $this->mdl->insert_data($data);

		$query == true ? $this->alert_info('Berhasil Tambah Data') : $this->alert_error('Gagal Tambah Data');

		redirect($this->url.'/add');

	}

	function disposisi_insert() {

		$post = $this->input->post();

		$query = $this->mdl->disposisi_insert($post);

		$query == true ? $this->alert_info('Berhasil Kirim Disposisi') : $this->alert_error('Gagal Kirim Disposisi');

		redirect($this->url.'/detail/'.$post['id_surat_masuk']);

	}

	function update() {

		$post = $this->input->post();
		$cek = $this->mdl->cek_data($post['id']);
		$media = $_FILES['lampiran']['name'];
		// echo $cek->photo;exit;
		if(empty($media)) {
			$name = $cek->foto;
		} else {
			$config = array(
				'file_name'    => $media,
				'upload_path'  => './assets/lampiran/',
				'allowed_types' => 'jpg|jpeg|png|pdf|docx|doc',
				'max_size'      => 0
			);

			$this->upload->initialize($config);

			if(!$this->upload->do_upload('lampiran')) {
				$error = $this->upload->display_errors();
				$this->alert_error($error);
				redirect($url.'edit/'.$post['id_surat_masuk']);
			}
			$get_name = $this->upload->data();
			$name = $get_name['file_name'];
			//hapus photo sebelumnya
			unlink('assets/lampiran/'.$cek->foto);
		}

		$data = array(
			'nomor_agenda' => $post['nomor_agenda'],
			'asal' => $post['asal'],
			'kode' => $post['kode'],
			'nomor_surat' => $post['nomor_surat'],
			'index' => $post['index'],
			'tanggal_surat_masuk' => $post['tanggal_surat_masuk'],
			'perihal' => $post['perihal'],
			'isi_ringkasan' => $post['isi_ringkasan'],
			'catatan' => $post['catatan'],
			'lampiran' => $name
		);

		$query = $this->mdl->update_data($data, $post['id']);

		$query == true ? $this->alert_info('Berhasil Ubah Data') : $this->alert_error('Gagal Ubah Data');

		redirect($this->url);

	}

	function hapus($id) {

		$query = $this->mdl->delete_data($id);

		$query == true ? $this->alert_info('Berhasil Hapus Data') : $this->alert_error('Gagal Hapus Data');

		redirect($this->url);

	}

	function get_data() {
		$fetch_data = $this->mdl->make_datatables();
		$data = array();
		$no=1;
		foreach($fetch_data as $row)
		{
				 $sub_array = array();
				 $sub_array[] = $no++;
				 $sub_array[] = $row->nomor_agenda;
				 $sub_array[] = $row->asal;
				 $sub_array[] = $row->index;
				 $sub_array[] = $row->kode;
				 $sub_array[] = $row->nomor_surat;
				 $sub_array[] = $row->isi_ringkasan;
				 $sub_array[] = $row->tanggal_surat_masuk;
				 // $sub_array[] = $row->status;
				 $sub_array[] = '
								<!-- Single button -->
								<div class="btn-group">
								  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Action <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
								    <li><a href="'.site_url($this->url.'/detail/'.$row->id).'">Detail</a></li>
								    <li><a href="'.site_url($this->url.'/print_surat/'.$row->id).'">Print</a></li>
								    <li><a href="'.site_url($this->url.'/edit/'.$row->id).'">Edit</a></li>
								    <li><a href="'.site_url($this->url.'/hapus/'.$row->id).'" onclick="return confirm(\'Apakah Anda Yakin?\')">Hapus</a></li>
								  </ul>
								</div>';
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

	function print_surat($id) {

		$data_array = array();
		$data_array['judul'] = $this->judul;
		$data_array['data']	= $this->mdl->cek_data($id);
		$data_array['disposisi'] = $this->mdl->get_data_disposis_($id);
		$data_array['url'] = $this->url;
		$data_array['id'] = $id;

		include APPPATH.'libraries/tcpdf/tcpdf.php';
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('LPKSI');
		$pdf->SetTitle('Surat LPKSI');
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

		//view header/footer
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->SetMargins(20, 10, 20, true); // put space of 10 on top
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		$pdf->AddPage('P', 'LEGAL');

		$html = $this->load->view('surat', $data_array, true);

		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


		$pdf->Output("surat_keterangan_usaha.pdf", 'I');

	}


}
