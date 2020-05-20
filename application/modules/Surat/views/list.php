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
		  <h3 class="box-title">Data Tabel <?php echo $judul; ?></h3>
		</div>
		<div class="col-md-12">
			<a href="<?php echo site_url($url.'/add'); ?>" class="btn btn-success" style="float: right;margin-right: 12px;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a><br><br>
		</div>
		<div class="col-md-12">
			<?php echo $this->session->flashdata('message'); ?>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		  <table id="user_data" class="table table-bordered table-striped">
			<thead>
			<tr>
			  <th width="5%">No</th>
		        <th>Nomor Agenda</th>
		        <th>Asal Surat</th>
		        <th>Index</th>
		        <th>Kode</th>
		        <th>Nomor</th>
		        <th>Isi Ringkasan</th>
		        <th>Tanggal Masuk</th>
		        <!-- <th>Status</th> -->
			  <th width="7%">#</th>
			</tr>
			</thead>
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
<script>
$(document).ready(function(){
  var dataTable = $('#user_data').DataTable({
       "processing":true,
       "responsive": true,
       "serverSide":true,
       "order":[],
       "ajax":{
            url:"<?php echo site_url($url.'/get_data'); ?>",
            type:"POST"
       },
       "columnDefs":[
            {
                 "targets":[0, 1, 2,3],
                 "orderable":false,
            },
       ],
  });

});
</script>
