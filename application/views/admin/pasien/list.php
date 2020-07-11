

<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pasien/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
					

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Alamat</th>
										<th>Umur</th>
										<th>Keluhan</th>
										<th>Ruang Rawat Inap</th>
										<th>Email</th>
										<th>Telepon</th>
										<th>Foto</th>
										<th>Action</th>

									</tr>
									<?php foreach ($pasien as $ps) :
					
$pasien_nama=$ps['nama'];
$pasien_alamat=$ps['alamat'];
$pasien_umur=$ps['umur'];
$pasien_keluhan=$ps['keluhan'];
$pasien_email=$ps['email'];
$pasien_telepon=$ps['telepon'];
$pasien_ruang=$ps['ruanginap'];
$pasien_gambar=$ps['image'];

?>

								</thead>
								<tbody>
										<tr>	
										<td width="150">
											<?php echo $pasien_nama; ?>
										</td>
										<td>
											<?php echo $pasien_alamat; ?>
										</td>
										<td>
											<?php echo $pasien_umur; ?>
										</td>
										<td>
											<?php echo $pasien_keluhan; ?>
										</td>
										<td>
											<?php echo $pasien_ruang; ?>
										</td>
										<td>
											<?php echo $pasien_email; ?>
										</td>
										<td>
											<?php echo $pasien_telepon; ?>
										</td>
										<td >
											<img src="<?php echo base_url('upload/pasien/'.$pasien_gambar) ?>" width="100 " />
										</td>
										<td width="300">
											<a href="<?php echo site_url('admin/pasien/edit/'.$ps['id']) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 
											<a onclick="deleteConfirm('<?php echo site_url('admin/pasien/delete/' .$ps['id']) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>






								
			
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>
    
    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>