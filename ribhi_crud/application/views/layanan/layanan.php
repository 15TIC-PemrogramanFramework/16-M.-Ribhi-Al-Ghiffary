
<?php $this->load->view('templates/header'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top:20px;margin-bottom:10px;">
			<?php echo anchor(site_url('layanan/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?>
		</div>
	</div>
</div>
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id layanan </th>
			<th>kendaraan layanan</th>
			<th>keterangan layanan </th>
				<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_layanan as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_layanan; ?></td>
			<td><?php echo $row->kendaraan_layanan; ?> </td>
			<td><?php echo $row->keterangan_layanan; ?> </td>
		
				<td>
				<?php echo anchor(site_url('layanan/edit/'.$row->id_layanan),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('layanan/delete/'.$row->id_layanan),
					'<i class="fa fa-trash" ></i>',
					'class="btn btn-danger"'); ?>
			</td>
		</tr>
<?php } ?>

	</tbody>
</table>
<?php $this->load->view('templates/footer');  ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});

</script>

