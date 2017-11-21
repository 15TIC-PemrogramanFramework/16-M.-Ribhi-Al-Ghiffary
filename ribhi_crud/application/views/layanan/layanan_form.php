<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>id layanan</label>
		<input type="text" class="form-control" name="id_layanan" required placeholder="Masukkan id layanan" value="<?php echo $id_layanan;?>" />
	</div>

	<div class="form-group">
		<label>kendaraan layanan</label>
		<input type="text" class="form-control" name="kendaraan_layanan" required placeholder="Masukkan kendaraan layanan" value="<?php echo $kendaraan_layanan;?>" />
	</div>

	<div class="form-group">
		<label>keterangan layanan</label>
		<input type="text" class="form-control" name="keterangan_layanan" required placeholder="Masukkan keterangan layanan" value="<?php echo $keterangan_layanan;?>" />
	</div>

	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('layanan') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>