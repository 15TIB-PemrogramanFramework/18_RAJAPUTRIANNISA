<?php $this->load->view('templates/header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Pesanan Skincare</h1>
		</div><?=$this->session->flashdata('pesan_skincare')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Pesan</th>
					<th>Nama Pemesan</th>
					<th>Nama Skincare</th>
					<th>Jumlah Pesanan</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesan_skincare as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_pesanskincare; ?></td>
					<td><?php echo $value->nama_member; ?> </td>
					<td><?php echo $value->nama_skincare; ?></td>
					<td><?php echo $value->jumlah; ?></td>
					<td>
						<a href="<?php echo site_url('pesan_skincare/delete/'.$value->id_pesanskincare); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('pesan_skincare/update/'.$value->id_pesanskincare); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('templates/footer'); ?>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>