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
			<h3 class="text-center">Data Mahasiswa</h3>

			<form action="/mvc-example/?act=update-data" method="POST">
				<table class="table">
					<tbody>
						<tr>
							<td>ID</td>
							<td>:
								<?php
								echo $rs['id'];
								?>
								<input type="hidden" name="id" value="<?php echo $rs['id']; ?>">
							</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td>:
								<input type="text" name="nim" id="nim" value="<?php echo $rs['nim']; ?>">
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:
								<input type="text" name="nama" id="nama" value="<?php echo $rs['nama']; ?>">
							</td>
						</tr>
					</tbody>
				</table>

				<a href="/mvc-example/?act=tampil-data" class="btn btn-secondary">&laquo; Back</a>
				<input type="submit" class="btn btn-success" value="Update">
				<a href="/mvc-example/?act=delete-data&i=<?php echo $rs['id']; ?>" class="btn btn-danger">Delete</a>
			</form>
		</div>
		<div class="col-md-4">&nbsp;</div>
	</div>
</body>

</html>