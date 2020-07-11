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
                Detail Riwayat
            </div>
            <div class="card-body">
                <h5 class="card-title"><?=$riwayat['id_pasien'];?></h5>
                <p class="card-text">
                <label for=""><b> Tanggal Periksa:</b></label>
                <?= $riwayat['tanggal_periksa'];?></p>
                
                <p class="card-text">
                <label for=""><b> Keluhan Utama:</b></label>
                <?= $riwayat['keluhan_utama'];?></p>
                <p class="card-text">
                <label for=""><b> Riwayat Penyakit Sekarang:</b></label>
                <?= $riwayat['riwayat_sekarang'];?></p>
                <p class="card-text">
                <label for=""><b> Ruang Penyakit Dahulu:</b></label>
                <?= $riwayat['riwayat_dahulu'];?></p>
                <label for=""><b> Riwayat Penyakit Keluarga:</b></label>
                <?= $riwayat['riwayat_keluarga'];?></p>
                <label for=""><b> Riwayat ALergi:</b></label>
                <?= $riwayat['riwayat_alergi'];?></p>
                <p class="card-text">
               
                <a href="<?php echo site_url('user/userriwayat/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
      
    </div>
    
  

</div>
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