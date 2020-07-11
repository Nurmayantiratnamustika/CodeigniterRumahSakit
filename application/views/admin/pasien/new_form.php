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

						<form action="<?php base_url('admin/pasien/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nama">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder=" Nama Pasien " />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" min="0" placeholder=" Alamat Pasien " />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="umur">Umur*</label>
								<input class="form-control-file <?php echo form_error('umur') ? 'is-invalid':'' ?>"
								 type="number" name="umur"  min="0" placeholder="  Umur Pasien"  />
								<div class="invalid-feedback">
									<?php echo form_error('umur') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="keluhan">Keluhan*</label>
								<input class="form-control-file <?php echo form_error('keluhan') ? 'is-invalid':'' ?>"
								 type="text" name="keluhan"  min="0" placeholder="  Keluhan Pasien"  />
								<div class="invalid-feedback">
									<?php echo form_error('keluhan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ruanginap">Ruang Inap*</label>
								<input class="form-control-file <?php echo form_error('ruanginap') ? 'is-invalid':'' ?>"
								 type="text" name="ruanginap"  min="0" placeholder="  Ruang Inap Pasien"  />
								<div class="invalid-feedback">
									<?php echo form_error('ruanginap') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="email">Email*</label>
								<input class="form-control-file <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email"  min="0" placeholder="  Email Pasien"  />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="telepon">Telepon*</label>
								<input class="form-control-file <?php echo form_error('telepon') ? 'is-invalid':'' ?>"
								 type="text" name="telepon"  min="0" placeholder="  Telepon Pasien"  />
								<div class="invalid-feedback">
									<?php echo form_error('telepon') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
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