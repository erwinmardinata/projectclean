<section class="content-header">
  <h1>
  <?php echo $judul; ?>
	<small><?php echo $opd->judul; ?></small>
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
			<a href="<?php echo site_url($url.'/add/'.$id); ?>" class="btn btn-success" style="float: right;margin-right: 12px;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a><br><br>
		</div>
		<div class="col-md-12">
			<?php echo $this->session->flashdata('message'); ?>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		  <table id="myTable" class="table table-bordered table-striped">
			<thead>
			<tr>
			  <th width="5%">No</th>
		        <th>Layanan/Jasa</th>
			  <th width="10%">#</th>
			</tr>
			</thead>
			<tbody>
				<?php
					$no = 1;
					foreach($data as $row):
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row->nama; ?></td>
					<td>
						<a href="<?php echo site_url($url.'/edit/'.$row->id.'/'.$id); ?>" class="btn btn-info btn-xs update">Edit</a>
						 <a href="<?php echo site_url($url.'/hapus/'.$row->id.'/'.$id); ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs delete">Delete</a>
					</td>
				</tr>
				<?php
					endforeach;
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
<script>
$(document).ready(function(){
  var dataTable = $('#user_data').DataTable({
       "processing":true,
       "serverSide":true,
       "order":[],
       "ajax":{
            url:"<?php echo site_url($url.'/get_data'); ?>",
            type:"POST"
       },
       "columnDefs":[
            {
                 "targets":[0, 1],
                 "orderable":false,
            },
       ],
  });

});
</script>
<script>
$(document).ready(function(){
    $("#myTable").DataTable();
  });

 </script>
