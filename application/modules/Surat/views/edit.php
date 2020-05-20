<section class="content-header">
  <h1>
	<?php echo $judul; ?>
	<small>Edit</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="<?php echo site_url($url); ?>"><?php echo $judul; ?></a></li>
	<li class="active">Edit</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<form method="POST" action="<?php echo site_url($url.'/update'); ?>" enctype="multipart/form-data">
  <div class="row">
	<!-- left column -->
	<div class="col-md-12">
	  <!-- general form elements -->
	  <div class="box box-primary">
		<div class="box-header with-border">
		  <h3 class="box-title"></h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		  <div class="box-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="tab-content">
              <div class="tab-pane active" id="home">
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Nomor Agenda</label>
                    <input type="hidden" name="id" value="<?php echo $data->id; ?>" class="form-control" required="">
                    <input type="text" name="nomor_agenda" value="<?php echo $data->nomor_agenda; ?>" class="form-control" required="">
                  </div>            
                </div>            
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Kode Surat</label>
                    <input type="text" name="kode" value="<?php echo $data->kode; ?>" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Nomor Surat</label>
                    <input type="text" name="nomor_surat" value="<?php echo $data->nomor_surat; ?>" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Index</label>
                    <input type="text" name="index" value="<?php echo $data->index; ?>" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Tanggal Surat Masuk</label>
                    <input type="date" name="tanggal_surat_masuk" value="<?php echo $data->tanggal_surat_masuk; ?>" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Perihan</label>
                    <input type="text" name="perihal" value="<?php echo $data->perihal; ?>" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label for="name">Asal Surat</label>
                    <input type="text" name="asal" value="<?php echo $data->asal; ?>" class="form-control" required="">
                  </div>            
                </div>            
                <div class="form-group">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label for="name">Isi Ringkasan</label>
                    <textarea class="form-control" name="isi_ringkasan" required=""><?php echo $data->isi_ringkasan; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Catatan</label>
                    <textarea class="form-control" name="catatan" required=""><?php echo $data->catatan; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Upload Lampiran Surat</label>
                    <input type="file" name="lampiran">
                    <small id="emailHelp" class="form-text text-muted">(Biarkan kosong jika tidak ada/tidak diedit)</small><br>
                    <?php
                      if($data->lampiran != NULL) {
                    ?>
                    <a target="_blank" href="<?php echo base_url('assets/lampiran/'.$data->lampiran); ?>" class="btn btn-primary">Lihat</a>
                    <?php
                      }  
                    ?>                    
                  </div>
                </div>
                <div class="card-footer">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                  <a href="<?php echo site_url($url); ?>" class="btn btn-sm btn-warning">
                    <i class="fa fa-angle-double-left"></i> Back</a>
                <button type="submit" class="btn btn-sm btn-primary">
                  <i class="fa fa-dot-circle-o"></i> Submit</button>
                <button type="reset" class="btn btn-sm btn-danger">
                  <i class="fa fa-ban"></i> Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>          
  			</div>
		  </div>
		  <!-- /.box-body -->

	  </div>
	  <!-- /.box -->

	</div>
	<!--/.col (left) -->
  </div>
</form>
  <!-- /.row -->
</section>
<!-- /.content -->
<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>
