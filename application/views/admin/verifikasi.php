
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
				
				
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" height="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Pengguna</th>
										<th>Email</th>
										<th>Active</th>
                                        <th>Action</th>
									

									</tr>
                                    <?php foreach ($verifi as $ver) :
$id=$ver['id'];
$nama_user=$ver['username'];
$email=$ver['email'];



?>

								</thead>
								<tbody>
										<tr>	
										<td width="150">
											<?php echo $nama_user; ?>
										</td>
                                        <td>
											<?php echo $email; ?>
										</td>
										<td>
											<?php echo 'belum active'; ?>
										</td>
										
										<td width="250">
											<a href="<?php echo base_url('admin/verifi/verifi/'.$id) ?>"
											 class="btn btn-small"><i class="fa fa-check-circle text-danger"></i> Verified </a>
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