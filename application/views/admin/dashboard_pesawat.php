<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Pesawat</title>
	<link rel="icon" type="image/png" href="<?= base_url('assets/images/plane.png') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/fontawesome.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css')?>">
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-primary rounded shadow">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand text-light" href="#">Admin Panel</a>
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link text-light" href="<?= base_url('index.php/admin/dashboard') ?>">Kereta <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link text-light" href="<?= base_url('index.php/dashboardPesawat') ?>">Pesawat</a>
	      </li>
	    </ul>
	      <ul class="navbar-nav float-right">
	      	<li class="nav-item">
	      		<a class="nav-link text-light" href="<?= base_url('index.php/logout') ?>">Logout</a>
	      	</li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container-fluid">
		<div class="row my-5">
			<div class="col-md-8">
				<div class="card rounded shadow">
					<div class="card-header bg-primary text-light text-center">
						DAFTAR BANDARA
					</div>
					<div class="card-body">
						<div>
							<table class="table table-striped table-hover">
								<thead class="bg-warning">
									<tr class="text-light">
										<th>No</th>
										<th>Nama Stasiun</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1; 
									?>
									<?php foreach ($bandara as $bd): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $bd->nama_bandara?></td>
										<td>
											<a class="btn btn-danger" href="<?= base_url
											('index.php/hapusBandara/'.$bd->id)
											 ?>"><i class="fas fa-trash-alt"></i></a>
											<a class="btn btn-success" href="<?= base_url
											('index.php/admin/dashboard/editPesawat/'.$bd->id)
											 ?>"><i class="fas fa-edit"></i></a>
										</td>
									</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<form action="<?= base_url('index.php/tambahBandara') ?>" method="POST">
					<div class="form-group">
						<label>Nama Bandara</label>
						<input type="text" name="bandara" placeholder="Masukan nama bandara" class="form-control">
					</div>

					<a class="btn btn-success w-50" href="<?= base_url('index.php/dashboard/jadwalpesawat') ?>"><i class="fas fa-table float-left"></i>Kelola jadwal</a>
					<button class="btn btn-primary float-right"><i class="fas fa-save"></i> Tambahkan Bandara</button>
				</form>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/fontawesome/js/fontawesome.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/fontawesome/js/all.min.js')?>"></script>	
</body>
</html>