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
								<label for="id_pasien">Id Pasien*</label>
								<input class="form-control <?php echo form_error('id_pasien') ? 'is-invalid':'' ?>"
								 type="text" name="id_pasien" placeholder=" Id Pasien " />
								<div class="invalid-feedback">
									<?php echo form_error('id_pasien') ?>
								</div>
							</div>



							<div class="form-group">
								<label for="nama_dokter">Nama Dokter*</label>
								<input class="form-control <?php echo form_error('nama_dokter') ? 'is-invalid':'' ?>"
								 type="text" name="nama_dokter" min="0" placeholder="Nama Dokter" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_dokter') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal">Tanggal*</label>
								<input class="form-control-file <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal"  min="0" placeholder="Tanggal"  />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_tindakan">Id Tindakan*</label>
								<input class="form-control-file <?php echo form_error('id_tindakan') ? 'is-invalid':'' ?>"
								 type="number" name="id_tindakan"  min="0" placeholder="id tindakan"  />
								<div class="invalid-feedback">
									<?php echo form_error('id_tindakan') ?>
								</div>
							</div>


					
							<div class="form-group">
								<label for="tindakan">Jenis Tindakan *</label>
								<input class="form-control-file <?php echo form_error('tindakan') ? 'is-invalid':'' ?>"
								 type="text" name="tindakan"  min="0" placeholder=" Jenis Tindakan "  />
								<div class="invalid-feedback">
									<?php echo form_error('tindakan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_bayar1">Id Pembayaran*</label>
								<input class="form-control <?php echo form_error('id_bayar1') ? 'is-invalid':'' ?>"
								 type="text" name="id_bayar1" placeholder=" Id Pembayaran " />
								<div class="invalid-feedback">
									<?php echo form_error('id_bayar1') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_pasien1">Id Pasien*</label>
								<input class="form-control <?php echo form_error('id_pasien1') ? 'is-invalid':'' ?>"
								 type="text" name="id_pasien1" placeholder=" Id Pasien " />
								<div class="invalid-feedback">
									<?php echo form_error('id_pasien1') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tarif">Tarif*</label>
								<input class="form-control-file <?php echo form_error('tarif') ? 'is-invalid':'' ?>"
								 type="number" name="tarif"  min="0" placeholder="  Tarif "  />
								<div class="invalid-feedback">
									<?php echo form_error('tarif') ?>
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