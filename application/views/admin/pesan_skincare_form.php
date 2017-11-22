<?php $this->load->view('templates/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Pesanan</h1>
		</div>
		<?php $this->session->flashdata('pesan_skincare') ?>
		<form action="<?php echo $aksi; ?>" method="get" enctype="multipart/form-data">
			<div class="form-group">
				<label>Jumlah: </label>
				<input type="text" name="jumlah" class="form-control" placeholder="Inputkan jumlah" 
				required value="<?php echo $jumlah; ?>" readonly>
			</div>
			
			<input type="hidden" name="id_pesanskincare" value="<?php echo $id_pesanskincare; ?>">
			<input type="hidden" name="id_member" value="<?php echo $this->session->userdata('id_member'); ?>">
			<input type="hidden" name="id_skincare" value="<?php echo $id_skincare; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('pesan_skincare')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/footer'); ?>