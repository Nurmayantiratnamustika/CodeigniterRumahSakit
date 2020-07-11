<html lang="en">

<head>
	<?php $this->load->view("user/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("user/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("user/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("user/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
		
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
										<th>Telepon</th>
										<th>Email</th>
										<th>Foto</th>
										<th>Action</th>

									</tr>
									<?php foreach ($pasien as $ps) :
					
$pasien_nama=$ps['nama'];
$pasien_alamat=$ps['alamat'];
$pasien_umur=$ps['umur'];
$pasien_keluhan=$ps['keluhan'];
$pasien_ruang=$ps['ruanginap'];
$pasien_tlp=$ps['telepon'];
$pasien_email=$ps['email'];
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
											<?php echo $pasien_tlp; ?>
										</td>
										<td>
											<?php echo $pasien_email; ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/pasien/'.$pasien_gambar) ?>" width="64" />
										</td>
										<td width="190">
										<a href="<?php echo site_url('user/datapasien/detail/'.$ps['id']) ?>"
											 class="btn btn-small text-success" ><i class="fa fa-info-circle"></i> Detail</a>
											 
											<a href="<?php echo site_url('user/datapasien/laporan_pdf/'.$ps['id']) ?>"
											 class="btn btn-small"><i class="fa fa-print"></i> Print</a>
											
							
										</td>







								
			
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
			
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->

		</div>
			<?php $this->load->view("user/_partials/footer.php") ?>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("user/_partials/modal.php") ?>

    <?php $this->load->view("user/_partials/js.php") ?>
    
    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>