
<?php $this->load->view('templates/header'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top:20px;margin-bottom:10px;">
			<?php echo anchor(site_url('customer/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?>
		</div>
	</div>
</div>
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id customer </th>
			<th>nama customer</th>
			<th>password </th>
			<th>Nomer Handphone </th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_customer as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_customer; ?></td>
			<td><?php echo $row->nama_customer; ?> </td>
			<td><?php echo $row->password; ?> </td>
			<td><?php echo $row->nohp; ?> </td>
					<td>
				<?php echo anchor(site_url('customer/edit/'.$row->id_customer),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('customer/delete/'.$row->id_customer),
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

