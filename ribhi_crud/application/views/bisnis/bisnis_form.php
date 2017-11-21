<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>id bisnis</label>
		<input type="text" class="form-control" name="id_bisnis" required placeholder="Masukkan id bisnis" value="<?php echo $id_bisnis;?>" />
	</div>

	<div class="form-group">
		<label>id customer</label>
	<select name="id_customer">
<?php
$this->db->select('id_customer');
$id_cust = $this->db->get('customer');

foreach($id_cust->result() as $row){
echo "<option value='".$row->id_customer."'>".$row->id_customer."</option>";
}
?></select>
	</div>

	<div class="form-group">
		<label>id layanan</label>
			<select name="id_layanan">
<?php
$this->db->select('id_layanan');
$id_pkt = $this->db->get('layanan');

foreach($id_pkt->result() as $row){
echo "<option value='".$row->id_layanan."'>".$row->id_layanan."</option>";
}
?></select>
	</div>

	<div class="form-group">
		<label>tanggal transaksi</label>
		<input type="text" class="form-control" name="tanggal_transaksi" required placeholder="Masukkan tanggal bisnis" value="<?php echo $tanggal_transaksi;?>" />
	</div>

	<div class="form-group">
		<label>biaya</label>
		<input type="text" class="form-control" name="biaya" required placeholder="Masukkan tanggal selesai" value="<?php echo $biaya;?>" />
	</div>


	<div class="form-group">
		<label>keterangan</label>
		<input type="text" class="form-control" name="keterangan" required placeholder="Masukkan keterangan" value="<?php echo $keterangan;?>" />
	</div>
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('bisnis') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>