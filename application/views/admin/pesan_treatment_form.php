<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Pesanan</h1>
		</div>
		<?php $this->session->flashdata('pesan_treatment') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Jumlah: </label>
				<input type="text" name="jumlah" class="form-control" placeholder="Inputkan jumlah" 
				required value="<?php echo $jumlah; ?>" readonly>
			</div>
			<div class="form-group">
				<label>Status Pesanan </label><br>
				<input type="radio" name="status_pesantreatment" value="Sedang diproses"> Sedang diproses &nbsp;
				<input type="radio" name="status_pesantreatment" value="Sedang dikirim"> Sedang dikirim &nbsp;
				<input type="radio" name="status_pesantreatment" value="Dibatalkan"> Dibatalkan
			</div>			
			<input type="hidden" name="id_pesantreatment" value="<?php echo $id_pesantreatment; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('pesan_treatment')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>