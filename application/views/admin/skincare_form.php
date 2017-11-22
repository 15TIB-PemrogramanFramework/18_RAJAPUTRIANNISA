<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Insert Data skincare</h1>
		</div>
		<?php $this->session->flashdata('pesan_skincare') ?>
		<form action="<?php echo $aksi; ?>" method="get" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama skincare: </label>
				<input type="text" name="nama_skincare" class="form-control" placeholder="Inputkan Nama skincare" 
				required value="<?php echo $nama_skincare; ?>">
			</div>
			
			<div class="form-group">
				<label>Harga skincare: </label>
				<input type="text" name="harga_skincare" class="form-control" placeholder="Inputkan Harga skincare" 
				required value="<?php echo $harga_skincare; ?>">
			</div>
			<div class="form-group">
				<label>Deskripsi skincare: </label><br/>
				<input type="text" name="deskripsi_skincare" class="form-control" placeholder="Inputkan Deskripsi skincare" 
				required value="<?php echo $deskripsi_skincare; ?>">
			</div>
			<div class="form-group">
				<label>Gambar skincare: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar skincare">
			</div>
			<input type="hidden" name="id_skincare" value="<?php echo $id_skincare; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('skincare')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>