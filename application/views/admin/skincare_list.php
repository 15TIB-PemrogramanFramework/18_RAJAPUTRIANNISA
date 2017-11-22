<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data skincare</h1>
		</div><?=$this->session->flashdata('pesan_skincare')?>	
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('skincare/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
		</div>	

	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Deskripsi</th>
					<th style="width:200px">gambar_skincare</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
<?php foreach ($skincare as $key => $value) { ?>
									<tr>
										<td><?php echo $value->id_skincare; ?></td>
										<td><?php echo $value->nama_skincare; ?></td>
										<td><?php echo $value->harga_skincare; ?></td>
										<td><?php echo $value->deskripsi_skincare; ?></td>
										<td><?php echo $value->gambar_skincare; ?></td>
										<td><?php
												$harga = $value->harga_skincare;
												$tampil =  number_format($harga, 2, ',' ,'.');
												echo 'Rp '.$tampil; ?>
										</td>
										<td><?php echo nl2br($value->deskripsi_skincare);?></td>
										<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/uploads/<?php echo $value->gambar_skincare; ?>"></td>
										<td>
											<a href="<?php echo site_url('skincare/delete/'.$value->id_skincare); ?>"
												class="btn btn-danger">
												<i class="material-icons">delete</i>
											</a>
											<a href="<?php echo site_url('skincare/update/'.$value->id_skincare); ?>"
												class="btn btn-warning">
												<i class="material-icons">edit</i>
											</a>
										</td>	
									</tr>
									<?php } ?>
								</tbody>
		
		</table>
	</div>
	<?php $this->load->view('templates/admin/footer'); ?>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>