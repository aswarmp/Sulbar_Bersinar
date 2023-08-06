<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Konsultasi dokter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="colorlib.com">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="<?php echo base_url('form/fonts/material-design-iconic-font/css/material-design-iconic-font.css') ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo base_url('form/css/style.css') ?>">
</head>

<body>
	<div class="wrapper">
		<div class="image-holder">
			<img src="<?php echo base_url('form/images/form-wizard.png') ?>" alt="">
		</div>
		<form action="/Proses_assesment" method="post" enctype="multipart/form-data">
			<div id="wizard">
				<h4>Asessment Dan Konseling</h4>
				<hr>
				<?php if (!empty(session()->getFlashdata('error'))) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<h4>Periksa Entrian Form</h4>
						</hr />
						<?php echo session()->getFlashdata('error'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<div class="form-row form-group">
					<div class="form-holder">
						<label for="">
							Nama
						</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-holder">
						<label for="">
							Email
						</label>
						<input type="text" name="email" class="form-control">
					</div>
				</div>
				<div class="form-row form-group">
					<div class="form-holder">
						<label for="">
							No telpon
						</label>
						<input type="text" name="no_telp" class="form-control">
					</div>
					<div class="form-holder">
						<label for="">
							Tanggal
						</label>
						<input type="date" name="tanggal" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<label for="">
						Alamat
					</label>
					<input type="text" name="alamat" class="form-control" style="margin-bottom: 20px">
				</div>
				<div class="form-row form-group">
					<div class="form-holder">
						<label for="">
							Kelurahan / Desa
						</label>
						<input type="text" name="kelurahan" class="form-control">
					</div>
					<div class="form-holder">
						<label for="">
							Kecamatan
						</label>
						<input type="text" name="kecamatan" class="form-control">
					</div>
				</div>

				<div class="form-row form-group">
					<div class="form-holder">
						<label for="">
							Kabupaten
						</label>
						<input type="text" name="kabupaten" class="form-control">
					</div>
					<div class="form-holder">
						<label for="">
							Provinsi
						</label>
						<input type="text" name="provinsi" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<label for="">
						KTP/KK
					</label>
					<input type="file" name="gambar" class="form-control">
				</div>
				<div class="form-row">
					<label for="">
						Catatan
					</label>
					<input type="text" name="catatan" class="form-control">
				</div>
				<div class="form-row">
					<input type="hidden" name="jenis_layanan" value="Asesmen dan Konseling">
				</div>
				<div class="form-row">
					<input type="hidden" name="status" value="approve">
				</div>
				<button type="submit" class="btn btn-outline-primary">Kirim</button>
				<button type="reset" class="btn btn-outline-danger">Batal</button>
			</div>
		</form>
	</div>

	<script src="<?php echo base_url('form/js/jquery-3.3.1.min.js') ?>"></script>

	<!-- JQUERY STEP -->
	<script src="<?php echo base_url('form/js/jquery.steps.js') ?>"></script>

	<script src="<?php echo base_url('form/js/main.js') ?>"></script>
	<!-- Template created and distributed by Colorlib -->
</body>

</html>