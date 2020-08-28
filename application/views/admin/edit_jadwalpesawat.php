</html><!DOCTYPE html>
<html>
<head>
	<title>Edit Bandara</title>
	<link rel="icon" type="image/png" href="<?= base_url('assets/images/plane.png') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
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
	        <a class="nav-link text-light" href="<?= base_url('index.php/pesawat') ?>">Pesawat</a>
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
		<div class="row my-5 justify-content-center">
			<div class="col-md-5">
				<div class="card rounded shadow">
					<div class="card-header bg-primary text-light text-center">
						EDIT JADWAL
					</div>
					<div class="card-body">
						<form action="<?= base_url('index.php/editJadwalpesawat') ?>" method="POST">
							<input type="hidden" name="id" value="<?= $data_jadwalpesawat->id ?>">
							<div class="form-group">
								<label>Nama maskapai</label>
								<input type="text" name="nama_maskapai" placeholder="Masukan nama kereta" class="form-control" value="<?= $data_jadwalpesawat->nama_maskapai ?>" required>
							</div>
							<div class="form-group">	
								<label>Bandara Asal</label>
								<select class="form-control" name="asal" required>
									<optgroup label="TERPILIH">
										<option selected value="<?= $data_jadwalpesawat->asal ?>"><?= $data_jadwalpesawat->ASAL ?></option>
									</optgroup>
									<optgroup label="PILIHAN">
										<?php foreach ($bandara as $bd): ?>
										<option value="<?= $bd->id ?>"><?= $bd->nama_bandara ?></option>
										<?php endforeach; ?>
									</optgroup>
								</select>							
							</div>
							<div class="form-group">
								<label>bandara Tujuan</label>
								<select class="form-control" name="tujuan" required>
									<optgroup label="TERPILIH">
										<option selected value="<?= $data_jadwalpesawat->tujuan ?>"><?= $data_jadwalpesawat->TUJUAN ?></option>
									</optgroup>
									<optgroup label="PILIHAN">
										<?php foreach ($bandara as $bd): ?>
										<option value="<?= $bd->id ?>"><?= $bd->nama_bandara ?></option>
										<?php endforeach; ?>
									</optgroup>
								</select>
							</div>
							<div class="form-group">
								<label>Tanggal berangkat</label>
								<?php $date = date_create($data_jadwalpesawat->tgll_berangkat) ?>
								<input type="datetime-local" name="tgll_berangkat" min="<?= date_format($date, 'Y-m-d\TH:i'); ?>" value="<?= date_format($date, 'Y-m-d\TH:i'); ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Tanggal sampai</label>
								<?php $date = date_create($data_jadwalpesawat->tg_sampai) ?>
								<input type="datetime-local" name="tg_sampai" min="<?= date_format($date, 'Y-m-d\TH:i'); ?>" value="<?= date_format($date, 'Y-m-d\TH:i'); ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Kelas</label>
								<select class="form-control" name="kelas" required>
									<optgroup label="TERPILIH">
										<option selected value="<?= $data_jadwalpesawat->kelas ?>"><?= $data_jadwalpesawat->kelas ?></option>
									</optgroup>
									<optgroup label="PILIHAN">
										<option>BISNIS</option>
										<option>EKONOMI</option>
										<option>EKSEKUTIF</option>
									</optgroup>
								</select>
							</div>
							<button class="btn btn-primary float-right">Edit Jadwal</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>