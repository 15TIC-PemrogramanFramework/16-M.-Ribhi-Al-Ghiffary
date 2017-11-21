<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>id customer</label>
		<input type="text" class="form-control" name="id_customer" required placeholder="Masukkan id customer" value="<?php echo $id_customer;?>" />
	</div>

	<div class="form-group">
		<label>nama customer</label>
		<input type="text" class="form-control" name="nama_customer" required placeholder="Masukkan nama customer" value="<?php echo $nama_customer;?>" />
	</div>

	<div class="form-group">
		<label>password</label>
		<input type="password" class="form-control" name="password" required placeholder="Masukkan password" value="<?php echo $password;?>" />
	</div>

	<div class="form-group">
		<label>Nomer Handphone</label>
		<input type="text" class="form-control" name="nohp" required placeholder="Masukkan tanggal bergabung" value="<?php echo $nohp;?>" />
	</div>

	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('customer') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>