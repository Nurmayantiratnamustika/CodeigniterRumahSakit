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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pasien/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/riwayat/addRiwayat') ?>" method="post" enctype="multipart/form-data" >
									
							<div class="form-group">
								<label for="id_pasien">Id Pasien*</label>
								<input class="form-control <?php echo form_error('id_pasien') ? 'is-invalid':'' ?>"
								 type="text" name="id_pasien" placeholder=" Id Pasien " />
								<div class="invalid-feedback">
									<?php echo form_error('id_pasien') ?>
								</div>
							</div>



							<div class="form-group">
								<label for="tanggal_periksa">Tanggal Pemeriksaan*</label>
								<input class="form-control <?php echo form_error('tanggal_periksa') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal_periksa" min="0" placeholder="Tanggal Pemeriksaan" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_periksa') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="keluhan_utama">Keluhan Utama*</label>
								<input class="form-control-file <?php echo form_error('keluhan_utama') ? 'is-invalid':'' ?>"
								 type="text" name="keluhan_utama"  min="0" placeholder="Keluhan Utama"  />
								<div class="invalid-feedback">
									<?php echo form_error('keluhan_utama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="riwayat_sekarang">Riwayat Penyakit Sekarang*</label>
								<input class="form-control-file <?php echo form_error('riwayat_sekarang') ? 'is-invalid':'' ?>"
								 type="text" name="riwayat_sekarang"  min="0" placeholder="Riwayat Penyakit Sekarang"  />
								<div class="invalid-feedback">
									<?php echo form_error('riwayat_sekarang') ?>
								</div>
							</div>


					
							<div class="form-group">
								<label for="riwayat_dahulu">Riwayat Penyakit Dahulu *</label>
								<input class="form-control-file <?php echo form_error('riwayat_dahulu') ? 'is-invalid':'' ?>"
								 type="text" name="riwayat_dahulu"  min="0" placeholder=" Riwayat Penyakit Dahulu "  />
								<div class="invalid-feedback">
									<?php echo form_error('riwayat_dahulu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="riwayat_keluarga">Riwayat Penyakit Keluarga*</label>
								<input class="form-control <?php echo form_error('riwayat_keluarga') ? 'is-invalid':'' ?>"
								 type="text" name="riwayat_keluarga" placeholder=" Riwayat Penyakit Keluarga " />
								<div class="invalid-feedback">
									<?php echo form_error('riwayat_keluarga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="riwayat_alergi">Riwayat Alergi*</label>
								<input class="form-control <?php echo form_error('riwayat_alergi') ? 'is-invalid':'' ?>"
								 type="text" name="riwayat_alergi" placeholder=" Riwayat Alergi " />
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

				<!-- Sticky Footer
				<?php $this->load->view("admin/_partials/footer.php") ?>

				 -->

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

</div>
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>