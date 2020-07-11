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

						<a href="<?php echo site_url('admin/pasien/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/riwayat/editRiwayat') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_riwayat" value="<?php echo $verifi['id_riwayat']?>" />

							<div class="form-group">
								<label for="id_pasien">Id Pasien*</label>
								<input class="form-control <?php echo form_error('id_pasien') ? 'is-invalid':'' ?>"
								 type="number" name="id_pasien" placeholder="Id Pasien" value="<?php echo $verifi['id_pasien'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_pasien') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal_periksa">Tanggal Periksa*</label>
								<input class="form-control <?php echo form_error('tanggal_periksa') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal_periksa" min="0" placeholder=" Tanggal Periksa "  value="<?php echo $verifi['tanggal_periksa'] ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_periksa') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="keluhan_utama">Keluhan Utama*</label>
								<input class="form-control-file <?php echo form_error('keluhan_utama') ? 'is-invalid':'' ?>"
								 type="text" name="keluhan_utama"  min="0" placeholder="  Keluhan Utama"  value="<?php echo $verifi['keluhan_utama'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('keluhan_utama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="riwayat_sekarang">Riwayat Penyakit Sekarang*</label>
								<input class="form-control-file <?php echo form_error('riwayat_sekarang') ? 'is-invalid':'' ?>"
								 type="text" name="riwayat_sekarang"  min="0" placeholder=" Riwayat Penyakit Sekarang " value="<?php echo $verifi['riwayat_sekarang'] ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('riwayat_sekarang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="riwayat_dahulu">Riwayat Penyakit Dahulu*</label>
								<input class="form-control-file <?php echo form_error('riwayat_dahulu') ? 'is-invalid':'' ?>"
								 type="text" name="riwayat_dahulu"  min="0" placeholder="  Riwayat Penyakit Dahulu"  value="<?php echo $verifi['riwayat_dahulu'] ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('riwayat_dahulu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="riwayat_keluarga">Riwayat Penyakit Keluarga*</label>
								<input class="form-control-file <?php echo form_error('riwayat_keluarga') ? 'is-invalid':'' ?>"
								 type="text" name="riwayat_keluarga"  min="0" placeholder="  Riwayat Penyakit Keluarga"  value="<?php echo $verifi['riwayat_keluarga'] ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('riwayat_keluarga') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="riwayat_alergi">Riwayat Alergi*</label>
								<input class="form-control-file <?php echo form_error('riwayat_alergi') ? 'is-invalid':'' ?>"
								 type="text" name="riwayat_alergi"  min="0" placeholder="  Riwayat Alergi"  value="<?php echo $verifi['riwayat_alergi'] ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('riwayat_alergi') ?>
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