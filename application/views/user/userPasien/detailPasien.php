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
				

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pasien
            </div>
            <div class="card-body">
                <h5 class="card-title"><?=$pasien['nama'];?></h5>
                <p class="card-text">
                <label for=""><b> Alamat:</b></label>
                <?= $pasien['alamat'];?></p>
                
                <p class="card-text">
                <label for=""><b> Umur:</b></label>
                <?= $pasien['umur'];?></p>
                <p class="card-text">
                <label for=""><b> Keluhan:</b></label>
                <?= $pasien['keluhan'];?></p>
                <p class="card-text">
                <label for=""><b> Ruang Rawat Inap:</b></label>
                <?= $pasien['ruanginap'];?></p>
                <label for=""><b> Telepon:</b></label>
                <?= $pasien['telepon'];?></p>
                <label for=""><b> Email:</b></label>
                <?= $pasien['email'];?></p>
                <p class="card-text">
                <label for=""><b> Foto :</b></label>
                <img src="<?php echo base_url('upload/pasien/'.$pasien['image']) ?>" width="100" /></p>
                <a href="<?php echo site_url('user/datapasien/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
    
</div>

		</div>
		<!-- /.content-wrapper -->
        <?php $this->load->view("user/_partials/footer.php") ?>
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