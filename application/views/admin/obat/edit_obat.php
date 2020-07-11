<!DOCTYPE html>
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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/obat/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

					<form action="<?php base_url('admin/obat/addObat') ?>" method="post" enctype="multipart/form-data" >
					<input type="hidden" name="id" value="<?php echo $obat['id_obat']?>" />
							<div class="form-group">
								<label for="id_pasien">Id Pasien*</label>
								<input class="form-control <?php echo form_error('id_pasien') ? 'is-invalid':'' ?>"
								 type="text" name="id_pasien" placeholder=" Id Pasien " value="<?php echo $obat['id_pasien'] ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('id_pasien') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_obat">Nama Obat*</label>
								<input class="form-control <?php echo form_error('nama_obat') ? 'is-invalid':'' ?>"
								 type="text" name="nama_obat" min="0" placeholder=" Nama Obat " value="<?php echo $obat['nama_obat'] ?> " />
								<div class="invalid-feedback">
									<?php echo form_error('nama_obat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jumlah">Jumlah*</label>
								<input class="form-control-file <?php echo form_error('jumlah') ? 'is-invalid':'' ?>"
								 type="text" name="jumlah"  min="0" placeholder=" Jumlah " value="<?php echo $obat['jumlah'] ?>  "/>
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>


						

							<div class="form-group">
								<label for="harga">Harga*</label>
								<input class="form-control-file <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="text" name="harga"  min="0" placeholder=" Harga Obat " value="<?php echo $obat['harga'] ?>  "/>
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>

			



							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>