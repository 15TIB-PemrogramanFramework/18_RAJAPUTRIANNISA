<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Insert Data treatment</h1>
		</div>
		<?php $this->session->flashdata('pesan_treatment') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama treatment: </label>
				<input type="text" name="nama_treatment" class="form-control" placeholder="Inputkan Nama treatment" 
				required value="<?php echo $nama_treatment; ?>">
			</div>
			
			<div class="form-group">
				<label>Harga treatment: </label>
				<input type="text" name="harga_treatment" class="form-control" placeholder="Inputkan Harga treatment" 
				required value="<?php echo $harga_treatment; ?>">
			</div>
			<div class="form-group">
				<label>Deskripsi treatment: </label><br/>
				<input type="text" name="deskripsi_treatment" class="form-control" placeholder="Inputkan Deskripsi Treatment" 
				required value="<?php echo $deskripsi_treatment; ?>">
			</div>
			<div class="form-group">
				<label>Gambar treatment: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar treatment">
			</div>
			<input type="hidden" name="id_treatment" value="<?php echo $id_treatment; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('treatment')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>