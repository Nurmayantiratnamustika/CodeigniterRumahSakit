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
										<th>Nama Dokter</th>
										<th>Tanggal</th>
										<th>Tindakan</th>
										<th>Tarif</th>
										<th>Action</th>

									</tr>
									<?php foreach ($bayar as $by) :
									
									$id_pasien=$by['pasien_id'];
$nama_dokter=$by['nama_dokter'];
$tanggal=$by['tanggal'];
$id=$by['id_bayar'];
$tindakan=$by['jenis_tindakan'];
$tarif=$by['tarif'];

?>

								</thead>
								<tbody>
										<tr>	
										<td width="150">
									
											<?php echo $nama_dokter; ?>
										</td>
                                        <td>
											<?php echo $tanggal; ?>
										</td>
                                        <td>
											<?php echo $tindakan; ?>
										</td>
                                        <td>
											<?php echo $tarif; ?>
										</td>
			
									
			
									</tr>
									<?php endforeach; ?>

								</tbody>

                                <tr>
                                <th  colspan="3">Total :</th>
                                <td> <?= $total['total']; ?> </td>
								<td width="250">
								<a href="<?php echo site_url('user/userbayar/laporan_pdf/'.$id_pasien) ?>"
											 class="btn btn-small"><i class="fa fa-print"></i> Print</a> 
											 </td>
                                </tr>
							</table>
						</div>
					</div>
				</div>

			</div>
			
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("user/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("user/_partials/scrolltop.php") ?>
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