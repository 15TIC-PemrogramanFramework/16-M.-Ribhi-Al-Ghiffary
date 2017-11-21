<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>username</label>
		<input type="text" class="form-control" name="username" required placeholder="Masukkan username" value="<?php echo $username;?>" />
	</div>

	<div class="form-group">
		<label>nama</label>
		<input type="text" class="form-control" name="nama" required placeholder="Masukkan nama customer" value="<?php echo $nama;?>" />
	</div>

	<div class="form-group">
		<label>password</label>
		<input type="password" class="form-control" name="password" required placeholder="Masukkan password" value="<?php echo $password;?>" />
	</div>


	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('admin') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>