<section class="content-header">
  <h1>
  <?php echo $judul; ?>
	<small></small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Data <?php echo $judul; ?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<form method="POST" action="<?php echo site_url($url.'/disposisi_insert'); ?>">  
  <div class="row">
	<div class="col-md-12">

	  <div class="box">
		<div class="box-header">
		  <h3 class="box-title">Disposisi <?php echo $judul; ?></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
        <div class="rows">
          <table class="table">
            <tr>
              <td width="50%"><strong>Tujuan Surat</strong> :<br>
                <?php
                  $cek = $this->db->where('id', $data->ke)->get('opd')->row();
                  echo $cek->nama; 
                ?>
              </td>
              <td width="50%"><strong>Kode Surat</strong> :<br>
                <?php echo $data->kode; ?>
              </td>
            </tr>
            <tr>
              <td><strong>Nomor Surat</strong> :<br>
                <?php echo $data->nomor_surat; ?>
              </td>
              <td><strong>Index</strong> :<br>
                <?php echo $data->index; ?>
              </td>
            </tr>
            <tr>
              <td><strong>Tanggal Surat</strong> :<br>
                <?php
                            $day = date('D', strtotime($data->tanggal_surat_masuk));
                            $dayList = array(
                              'Sun' => 'Minggu',
                              'Mon' => 'Senin',
                              'Tue' => 'Selasa',
                              'Wed' => 'Rabu',
                              'Thu' => 'Kamis',
                              'Fri' => 'Jumat',
                              'Sat' => 'Sabtu'
                            );

                            $bulan = array(
                              '01' => 'Jan',
                              '02' => 'Feb',
                              '03' => 'Mar',
                              '04' => 'Apr',
                              '05' => 'Mei',
                              '06' => 'Jun',
                              '07' => 'Jul',
                              '08' => 'Agu',
                              '09' => 'Sep',
                              '10' => 'Okt',
                              '11' => 'Nov',
                              '12' => 'Des'
                            );

                            $tgl = explode("-", $data->tanggal_surat_masuk);
                            $bln = $tgl[1];

                            $tanggal = $dayList[$day].', '.$tgl[2].' '.$bulan[$bln].' '.$tgl[0];

                  echo $tanggal; 
                ?>
              </td>
              <td><strong>Tanggal Diteruskan</strong> :<br>
                <?php
                            $day = date('D', strtotime($data->tanggal_diteruskan));
                            $dayList = array(
                              'Sun' => 'Minggu',
                              'Mon' => 'Senin',
                              'Tue' => 'Selasa',
                              'Wed' => 'Rabu',
                              'Thu' => 'Kamis',
                              'Fri' => 'Jumat',
                              'Sat' => 'Sabtu'
                            );

                            $bulan = array(
                              '01' => 'Jan',
                              '02' => 'Feb',
                              '03' => 'Mar',
                              '04' => 'Apr',
                              '05' => 'Mei',
                              '06' => 'Jun',
                              '07' => 'Jul',
                              '08' => 'Agu',
                              '09' => 'Sep',
                              '10' => 'Okt',
                              '11' => 'Nov',
                              '12' => 'Des'
                            );

                            $tgl = explode("-", $data->tanggal_diteruskan);
                            $bln = $tgl[1];

                            $tanggal = $dayList[$day].', '.$tgl[2].' '.$bulan[$bln].' '.$tgl[0];

                  echo $tanggal; 
                ?>
              </td>
            </tr>
            <tr>
              <td><strong>Perihan</strong> :<br>
                <?php echo $data->perihal; ?>
              </td>
              <td><strong>Klasifikasi Surat</strong> :<br>
                <?php echo $data->klasifikasi; ?>
              </td>
            </tr>
            <tr>
              <td><strong>Sifat Surat</strong> :<br>
                <?php echo $data->sifat_surat; ?>
              </td>
              <td><strong>Isi Ringkasan</strong> :<br>
                <?php echo $data->isi_ringkasan; ?>
              </td>
            </tr>
            <tr>
              <td><strong>Catatan</strong> :<br>
                <?php echo $data->catatan; ?>
              </td>
              <td><strong>Lampiran Surat</strong> :<br>
                <?php
                  if($data->lampiran != NULL) {
                ?>
                <a href="<?php echo base_url('assets/lampiran/'.$data->lampiran); ?>" class="btn btn-primary">Lihat</a>
                <?php
                  }  
                ?>
              </td>
            </tr>
          </table>
          <div class="card-footer" style="text-align: right;margin-bottom: 17px">
              <a href="<?php echo site_url($url); ?>" class="btn btn-sm btn-warning">
                <i class="fa fa-angle-double-left"></i> Back</a>
              <a href="<?php echo site_url('Surat_masuk/buat_disposisi/'.$id); ?>" class="btn btn-sm btn-primary">
                <i class="fa fa-plus"></i> Tambah Disposisi</a>
          </div>
          <table class="table">
            <thead class="bg-primary">
              <tr>
                <th style="text-align: center" colspan="4"><strong>DAFTAR DISPOSISI SURAT</strong></th>
              </tr>         
              <tr>
                <th width="2%">No.</th>
                <th>Disposisi Oleh</th>
                <th>Diteruskan ke Unit</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>No.</td>
                <td>Penerima</td>
                <td>Penerima</td>
                <td>Tanggal</td>
              </tr>
            </tbody>
          </table>          
        </div>

		</div>
		<!-- /.box-body -->
	  </div>
	  <!-- /.box -->
	</div>
	<!-- /.col -->
  </div>
  <!-- /.row -->
</form>
</section>
<!-- /.content -->
<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>