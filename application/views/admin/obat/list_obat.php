
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
				
						<a href="<?php echo site_url('admin/obat/addObat') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
					

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" height="100%" cellspacing="0">
								<thead>
									<tr>
										
										<th>Id Pasien</th>
										<th>Nama Obat</th>
										<th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                        <th>Action</th>
									

									</tr>
                                    <?php foreach ($obat as $ob ) :
$id=$ob['id_obat'];
$id_pasien=$ob['id_pasien'];
$nama_obat=$ob['nama_obat'];
$jumlah=$ob['jumlah'];
$harga=$ob['harga'];
$total=$ob['total'];

?>



								</thead>
								<tbody>
                                
										<tr>	
										<td width="150">
											<?php echo $id_pasien; ?>
										</td>
                                        <td>
											<?php echo $nama_obat; ?>
										</td>
										<td>
											<?php echo $jumlah; ?>
										</td>
										<td>
											<?php echo $harga; ?>
										</td>
                            
                                        <td>
                                        
											<?php echo $total;?>
										</td>
										
				
										<td width="250">
											<a href="<?php echo base_url('admin/obat/editObat/'.$id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/obat/delete/' .$id) ?>')"
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