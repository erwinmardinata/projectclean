<section class="content-header">
  <h1>
	Kategori Pajak
	<small>Daftar Data</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Kategori</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
	<div class="col-md-12">

	  <div class="box">
		<div class="box-header">
		  <h3 class="box-title">Data Tabel Kategori Pajak</h3>
		</div>
		<div class="col-md-12">
			<a href="<?php echo site_url('Kategori/add'); ?>" class="btn btn-success" style="float: right;margin-right: 12px;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a><br><br>
		</div>
		<div class="col-md-12">
			<?php echo $this->session->flashdata('message'); ?>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		  <table id="user_data" class="table table-bordered table-striped">
			<thead>
			<tr>
			  <th width="3%">No</th>
			  <th>Kategori</th>
			  <th width="10%">#</th>
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
       "serverSide":true,
       "order":[],
       "ajax":{
            url:"<?php echo site_url('Kategori/get_data'); ?>",
            type:"POST"
       },
       "columnDefs":[
            {
                 "targets":[0, 1, 2],
                 "orderable":false,
            },
       ],
  });

});
</script>
