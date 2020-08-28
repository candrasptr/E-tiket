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
						EDIT BANDARA
					</div>
					<div class="card-body">
						<form action="<?= base_url('index.php/editBandara') ?>" method="POST">
							<input type="hidden" name="id" value="<?= $data_bandara->id ?>">
							<div class="form-group">
								<label>Nama Bandara</label>
								<input type="text" name="namabandara" class="form-control" value="<?= $data_bandara->nama_bandara ?>">
							</div>
							<button class="btn btn-primary float-right">Edit Stasiun</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>