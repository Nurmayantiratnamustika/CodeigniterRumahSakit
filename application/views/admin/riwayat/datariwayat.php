
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
				
						<a href="<?php echo site_url('admin/riwayat/addRiwayat ') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
					

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" height="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Id Pasien</th>
										<th>Tanggal Periksa</th>
										<th>Keluhan Utama</th>
										<th>Riwayat Penyakit Sekarang</th>
                                        <th>Riwayat Penyakit Dahulu</th>
                                        <th>Riwayat Penyakit Keluarga</th>
                                        <th>Riwayat Alergi</th>
                                        <th>Action</th>
									

									</tr>
                                    <?php foreach ($riwayat as $rw) :
$id=$rw['id_riwayat'];
$id_pasien=$rw['id_pasien'];
$tgl=$rw['tanggal_periksa'];
$keluhan=$rw['keluhan_utama'];
$rw_skrg=$rw['riwayat_sekarang'];
$rw_dhl=$rw['riwayat_dahulu'];
$rw_klrg=$rw['riwayat_keluarga'];
$rw_alergi=$rw['riwayat_alergi'];


?>

								</thead>
								<tbody>
										<tr>	
										<td width="150">
											<?php echo $id_pasien; ?>
										</td>
                                        <td>
											<?php echo  $tgl ;?>
										</td>
										<td>
											<?php echo $keluhan; ?>
										</td>
										<td>
											<?php echo $rw_skrg; ?>
										</td>
										<td>
											<?php echo $rw_dhl; ?>
										</td>
                                        <td>
											<?php echo $rw_klrg; ?>
										</td>
                                        <td>
											<?php echo $rw_alergi; ?>
										</td>
				
										<td width="250">
											<a href="<?php echo base_url('admin/riwayat/editRiwayat/'.$id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/riwayat/delete/' .$id) ?>')"
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

<!-- date('d-m-y',strtotime($tgl)); -->