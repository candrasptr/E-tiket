<!DOCTYPE html>
<html>
<head>
	<title>Jadwal Kereta</title>
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
						JADWAL KERETA
					</div>
					<div class="card-body">
						<div>
							<table class="table table-striped table-hover">
								<thead class="bg-warning">
									<tr class="text-light">
										<th>No</th>
										<th>Nama Stasiun</th>
										<th>Asal</th>
										<th>Tujuan</th>
										<th>tanggal berangkat</th>
										<th>tanggal sampai</th>
										<th>kelas</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($jadwal as $jd): ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $jd->nama_kereta ?></td>
											<td><?= $jd->ASAL ?></td>
											<td><?= $jd->TUJUAN ?></td>
											<td><?= $jd->tgll_berangkat ?></td>
											<td><?= $jd->tg_sampai ?></td>
											<td><?= $jd->kelas ?></td>
											<td>
												<div class="btn-group">
													<a class="btn btn-danger" href="
													<?= base_url('index.php/hapusJadwal/'.$jd->id) ?>"><i class="fas fa-trash-alt"></i></a>
													<a class="btn btn-success" href="
													<?= base_url('index.php/admin/dashboard/editJadwal/'.$jd->id) ?>"><i class="fas fa-edit"></i></a>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<form action="<?= base_url('index.php/tambahJadwalKereta') ?>" method="POST">
					<div class="form-group">
						<label>Nama kereta</label>
						<input type="text" name="nama_kereta" placeholder="Masukan nama kereta" class="form-control" required>
					</div>
					<div class="form-group">	
						<label>Stasiun Asal</label>
						<select class="form-control" name="asal" required>
							<?php foreach ($stasiun as $st): ?>
							<option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>
							<?php endforeach; ?>
						</select>							
					</div>
					<div class="form-group">
						<label>Stasiun Tujuan</label>
						<select class="form-control" name="tujuan" required>
							<?php foreach ($stasiun as $st): ?>
							<option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Tanggal berangkat</label>
						<input type="datetime-local" name="tgll_berangkat" min="<?= date('Y-m-d\TH:i') ?>" value="<?= date('Y-m-d\TH:i') ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tanggal sampai</label>
						<input type="datetime-local" name="tg_sampai" min="<?= date('Y-m-d\TH:i') ?>" value="<?= date('Y-m-d\TH:i') ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<select class="form-control" name="kelas" required>
							<option>BISNIS</option>
							<option>EKONOMI</option>
							<option>EKSEKUTIF</option>
						</select>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="number" name="harga" required placeholder="Masukan harga" class="form-control">
					</div>
					
					<button class="btn btn-primary btn-block"><i class="fas fa-save float-left"></i> Tambahkan jadwal</button>
				</form>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/fontawesome/js/fontawesome.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/fontawesome/js/all.min.js')?>"></script>
</body>
</html>