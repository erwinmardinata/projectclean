<section class="content-header">
  <h1>
    <?php echo $judul; ?>
	<small>Tambah</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="<?php echo site_url($url); ?>"><?php echo $judul; ?></a></li>
	<li class="active">Tambah</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<form method="POST" action="<?php echo site_url($url.'/insert'); ?>" enctype="multipart/form-data">
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
                    <input type="text" name="nomor_agenda" class="form-control" required="">
                  </div>            
                </div>            
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Kode Surat</label>
                    <input type="text" name="kode" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Nomor Surat</label>
                    <input type="text" name="nomor_surat" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Tanggal Surat</label>
                    <input type="date" name="tanggal_surat" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label for="name">Tujuan Surat</label>
                    <input type="text" name="tujuan" class="form-control" required="">
                  </div>            
                </div>            
                <div class="form-group">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label for="name">Isi Ringkasan</label>
                    <textarea class="form-control" name="isi_ringkasan" required=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Catatan</label>
                    <textarea class="form-control" name="catatan" required=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Upload Lampiran Surat</label>
                    <input type="file" name="lampiran">
                    <small id="emailHelp" class="form-text text-muted">(Biarkan kosong jika tidak ada)</small>
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
