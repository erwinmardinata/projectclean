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
  <div class="row">
	<div class="col-md-12">

	  <div class="box">
		<div class="box-header">
		  <h3 class="box-title">Detail <?php echo $judul; ?></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table class="table">
				<tr>
					<td><strong>Asal Surat</strong> :<br>
						<?php echo $data->asal; ?>
					</td>
					<td><strong>Nomor Surat</strong> :<br>
						<?php echo $data->nomor_surat; ?>
					</td>
				</tr>
				<tr>
					<td><strong>Index</strong> :<br>
						<?php echo $data->index; ?>
					</td>
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
				</tr>
				<tr>
					<td><strong>Perihan</strong> :<br>
						<?php echo $data->perihal; ?>
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
				<?php
					$cek = $this->db->where('id_surat_masuk', $id)->get('disposisi')->row();
					if(!$cek) {
				?>
	          	<a href="<?php echo site_url($url.'/buat_disposisi/'.$id); ?>" class="btn btn-sm btn-primary">
              	<i class="fa fa-plus"></i> Tambah Disposisi</a>
				<?php
					}
				?>              	
	        </div>
			<table class="table">
				<thead class="bg-primary">
					<tr>
						<th style="text-align: center" colspan="6"><strong>DAFTAR DISPOSISI SURAT</strong></th>
					</tr>					
					<tr>
						<th width="2%">No.</th>
						<th>Tujuan Disposis</th>
						<th>Isi Disposisi</th>
						<th>Sifat Disposisi</th>
						<th>Tanggal</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						foreach ($disposisi as $row) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php
							echo $row->tujuan_disposisi;
						?></td>
						<td><?php
							echo $row->isi_disposisi;
						?></td>
						<td><?php
							echo $row->sifat_disposisi;
						?></td>
						<td>
                <?php
                            $day = date('D', strtotime($row->tanggal));
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

                            $tgl = explode("-", $row->tanggal);
                            $bln = $tgl[1];

                            $tanggal = $dayList[$day].', '.$tgl[2].' '.$bulan[$bln].' '.$tgl[0];

                  echo $tanggal.' '.$row->jam; 
                ?>							
						</td>
						<td>
							<a href="<?php echo site_url($url.'/hapus_disposisi/'.$row->id.'/'.$row->id_surat_masuk); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
		<!-- /.box-body -->
	  </div>
	  <!-- /.box -->
	</div>
	<!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>