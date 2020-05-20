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
        <div class="row">
  			  <div class="col-sm-12">
            <div class="tab-content">
              <div class="tab-pane active" id="home">
                <div class="form-group">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label for="name">Tujuan Disposisi</label>
                    <input type="hidden" name="id_surat_masuk" value="<?php echo $id; ?>" class="form-control" required="">
                    <input type="text" name="tujuan_disposisi" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Batas Waktu</label>
                    <input type="date" value="<?php echo date("Y-m-d") ?>" name="tanggal" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="name">Jam</label>
                    <input type="time" value="<?php echo date("h:i") ?>" name="jam" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label for="name">Isi Disposisi</label>
                    <textarea class="form-control" name="isi_disposisi" required=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label for="name">Catatan</label>
                    <textarea class="form-control" name="catatan"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label for="name">Sifat Disposisi</label>
                    <select class="form-control" required="" name="sifat_disposisi">
                      <option value="">-</option>
                      <option value="Biasa">Biasa</option>
                      <option value="Penting">Penting</option>
                      <option value="Segera">Segera</option>
                      <option value="Rahasia">Rahasia</option>
                    </select>
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