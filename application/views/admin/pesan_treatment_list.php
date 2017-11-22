<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Pesanan treatment</h1>
		</div><?=$this->session->flashdata('pesan_treatment')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Pesan</th>
					<th>treatment</th>
					<th>Nama Pemesan</th>
					<th>Jumlah</th>
				
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesan_treatment as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_pesantreatment; ?></td>
					<td><?php echo $value->nama_member; ?> </td>
					<td><?php echo $value->nama_treatment; ?></td>
					<td><?php echo $value->jumlah; ?></td>
					
					<td>
						<a href="<?php echo site_url('pesan_treatment/delete/'.$value->id_pesantreatment); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('pesan_treatment/update/'.$value->id_pesantreatment); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
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