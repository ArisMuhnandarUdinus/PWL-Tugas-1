<html>

<head>
	<title>Native MVC Example</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="row">
		<div class="col-md-4">&nbsp;</div>
		<div class="col-md-4 mt-5">
			<h3 class="text-center">Isikan data Anda di sini</h3>
			<form method="post" action="/mvc-example/?act=simpan">
				<div class="mb-3">
					<label for="exampleInputNim">NIM</label>
					<input type="text" class="form-control" id="exampleInputNim" name="nim" placeholder="NIM">
				</div>
				<div class="mb-3">
					<label for="exampleInputNama">Nama</label>
					<input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama">
				</div>

				<div class="mb-3 d-flex justify-content-between">
					<button type="submit" class="btn btn-primary">Submit</button>
					<a href="/mvc-example/?act=tampil-data" class="btn btn-secondary">Lihat Hasil Input &raquo;</a>
				</div>
			</form>
		</div>
		<div class="col-md-4">&nbsp;</div>
	</div>
</body>

</html>