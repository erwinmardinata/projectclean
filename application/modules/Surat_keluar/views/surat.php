<?php
	$tanggal1 = $disposisi->tanggal;
	$tanggal2 = $data->tanggal_surat_masuk;
	$day = date('D', strtotime($tanggal2));
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
		'01' => 'Januari',
		'02' => 'Februari',
		'03' => 'Maret',
		'04' => 'April',
		'05' => 'Mei',
		'06' => 'Juni',
		'07' => 'Juli',
		'08' => 'Agustus',
		'09' => 'September',
		'10' => 'Oktober',
		'11' => 'November',
		'12' => 'Desember'
	);

	$tgl2 = explode("-", $tanggal2);
	$bulan2 = $tgl2[1];
	$tgl1 = explode("-", $tanggal1);
	$bulan1 = $tgl1[1];

	$profil_web = $this->db->get('profil_web')->row();

?>

<table style="border-bottom: 3px solid #000">
	<tr>
		<td width="13%"><img src="<?php //echo base_url($profil_web->favicon); ?>" style="width: 50px"/></td>
		<td style="text-align: center; width:80%">
			<p style="line-height: 15px; font-size: 14px">
				<strong>
					<span style="font-size: 25px">L P K S I</span><br>
			        Lembaga Pengkajian Kebijakan Strategis Indonesia<br>
				</strong>
				<span style="font-size: 9px;font-style: italic;"><?php echo $profil_web->alamat; ?></span><br>
				<span style="font-size: 9px;font-style: italic;"><?php echo $profil_web->email; ?></span>
			</p>
		</td>
		<td width="13%"></td>
	</tr>
</table>
<br>
<br>
<style type="text/css">
	.table {
		padding : 5px;
		font-size: 10px
	}
</style>
<table style="width: 100%" class="table">
	<tr>
		<td style="text-align: center" colspan="2"><strong>LEMBAR DISPOSISI</strong></td>
	</tr>
	<tr>
		<td width="25%">Index Berkas</td>
		<td width="3%">:</td>
		<td width="35%"><?php echo $data->index; ?></td>
		<td width="15%">Kode :</td>
		<td width=""><?php echo $data->kode; ?></td>
	</tr>
	<tr>
		<td width="25%">Tanggal Surat</td>
		<td width="3%">:</td>
		<td colspan="2"><?php echo $tgl2[2].' '.$bulan[$bulan2].' '.$tgl2[0]; ?></td>
	</tr>
	<tr>
		<td width="25%">Nomor Surat</td>
		<td width="3%">:</td>
		<td colspan="2"><?php echo $data->nomor_surat; ?></td>
	</tr>
	<tr>
		<td width="25%">Asal Surat</td>
		<td width="3%">:</td>
		<td width="35%"><?php echo $data->asal; ?></td>
		<td width="15%">No. Agenda :</td>
		<td width=""><?php echo $data->nomor_agenda; ?></td>		
	</tr>
	<tr>
		<td width="25%">Isi Ringkasan</td>
		<td width="3%">:</td>
		<td colspan="2"><?php echo $data->isi_ringkasan; ?></td>
	</tr>
	<tr>
		<td width="25%">Diterima Tanggal</td>
		<td width="3%">:</td>
		<td colspan="2"><?php echo $data->index; ?></td>
	</tr>
</table>
<table class="table" style="border: 1px solid #000">
	<tr>
		<td width="68%">Isi Disposisi :<br>
			<?php echo $disposisi->isi_disposisi; ?>
			<br>
			<br>
			<br>
			<br>
			<br>
			Batas Waktu : <?php echo $tgl1[2].' '.$bulan[$bulan1].' '.$tgl1[0]; ?><br>
			Sifat : <?php echo $disposisi->sifat_disposisi; ?><br>
			Catatan : <br>
			<?php echo $disposisi->catatan; ?>
			<br>
			<br>
			<br>
		</td>
		<td width="32%">Diteruskan Kepada :<br>
			<?php echo $disposisi->tujuan_disposisi; ?>
		</td>
	</tr>
</table>
<br>
<br>
<table class="table">
	<tr>
		<td width="68%">
		</td>
		<td width="32%">Direktur<br><br><br><br><br><br>
			<u>Erwin Mardinata</u>
		</td>
	</tr>
</table>