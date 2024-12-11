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
			<table class="table table-responsive table-bordered table-striped">
				<thead>
					<tr class="fw-bold">
						<td>No</td>
						<td>NIM</td>
						<td>Nama</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody class="align-middle">
					<?php
					$i = 1;
					if (isset($rs)) {
						foreach ($rs as $mahasiswa => $list) {
							echo '<tr><td>' . $i . '</td><td>' . $list['nim'] . '</td><td>' . $list['nama'] . '</td><td><a class="btn btn-info" href="?act=tampil-data&i=' . $list['id'] . '">Detail</a></td></tr>';
							$i++;
						}
					}
					?>
				</tbody>
			</table>
			<a class="btn btn-secondary" href="/mvc-example/">&laquo; Back</a>
		</div>
		<div class="col-md-4">&nbsp;</div>
	</div>
</body>

</html>