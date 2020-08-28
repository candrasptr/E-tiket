
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<br><br>
			<div class="card rounded shadow-sm">
				<div class="card-header bg-primary text-light">
					<i class="fas fa-info"></i> INFO PERJALANAN
				</div>
				<div class="card-body">
					<div class="form-group form-inline">
						<div class="col-md-4">
							<label class="float-left">Nama kereta</label><span class="float-right">:</span>
						</div>
						<div class="col-md-8">
							<input type="text" readonly disabled class="float-left form-control bg-transparent border-light" value="<?= $info->nama_maskapai ?>">
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="col-md-4">
							<label class="float-left">Waktu berangkat</label><span class="float-right">:</span>
						</div>
						<div class="col-md-8">
							<input type="text" readonly disabled class="float-left form-control bg-transparent border-light" value="<?= $info->tgll_berangkat ?>">
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="col-md-4">
							<label class="float-left">Waktu sampai</label><span class="float-right">:</span>
						</div>
						<div class="col-md-8">
							<input type="text" readonly disabled class="float-left form-control bg-transparent border-light" value="<?= $info->tg_sampai ?>">
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="col-md-4">
							<label class="float-left">Rute</label><span class="float-right">:</span>
						</div>
						<div class="col-md-8">
							<input type="text" readonly disabled class="form-control bg-transparent border-light" value="DARI <?= $info->ASAL ?>">
							<input type="text" readonly disabled class="form-control bg-transparent border-light mt-1" value="KE <?= $info->TUJUAN ?>">
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="col-md-4">
							<label class="float-left">Harga per tiket</label><span class="float-right">:</span>
						</div>
						<div class="col-md-8">
							<input type="text" readonly disabled class="float-left form-control bg-transparent border-light" value="<?= 'Rp.'.number_format($info->harga,0,',','.') ?>">
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="col-md-4">
							<label class="float-left">Jumlah Penumpang</label><span class="float-right">:</span>
						</div>
						<div class="col-md-8">
							<input type="text" readonly disabled class="float-left form-control bg-transparent border-light" value="<?= $_GET['p'] ?>">
						</div>
					</div>
				</div>
				<br><br><br>
				<img class="mx-auto" src="<?= base_url('assets/images/LOGO.PNG') ?>" width="280px">
				<br><br><br>
			</div>
		</div>
		<div class="col-md-6">
			<form action="<?= base_url('index.php/pesanTiketPesawat') ?>" method="POST">
				<input type="hidden" name="penumpang" value="<?= $_GET['p'] ?>">
				<input type="hidden" name="id_jadwal" value="<?= $id_jadwal ?>">
				<input type="hidden" name="harga" value="<?= $info->harga ?>">
				<br><br>
				<div class="card rounded shadow-sm">
						<div class="card-header bg-primary text-light">
							<i class="far fa-address-card"></i> DETAIL PENUMPANG
						</div>
						<div class="card-body">
							<div class="table">
								<table class="table table-borderless">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<td class="text-danger">Umur( <i class="fas fa-child"></i> bayi <3 tahun tidak dihitung)</td>
											<th class="text-danger">>= 17 Tahun Nomor ID(KTP, SIM, PASPORT)*</th>
										</tr>
									</thead>
									<tbody>
									<?php for ($i=1; $i<=$_GET['p'];$i++):?>
										<tr>
											<td><?= $i ?></td>
											<td>
												<input type="text" class="form-control" name="nama<?= $i ?>">
											</td>
											<td>
												<select class="form-control" name="jenis_penumpang<?= $i ?>" required>
													<option>Anak-anak</option>
													<option>Dewasa</option>
												</select>
											</td>
											<td>
												<input type="text" class="form-control" name="identitas<?= $i ?>">
											</td>
										</tr>
									<?php endfor; ?>
								</tbody>
								</table>
								<small class="text-danger">
									Ket:<br>
									<i class="fas fa-child"></i> Anak-anak : >=3 tahun <br>
									<i class="fas fa-user"></i> Dewasa : >=17 Tahun
								</small>
							</div>
						</div>
					</div>
					<br>
					<div class="card rounded shadow-sm">
						<div class="card-header bg-primary text-light">
							<i class="far fa-address-card"></i>  DETAIL PEMESAN
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Nama</label>
										<input class="form-control" type="text" name="nama_pemesan" placeholder="Nama pemesan" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" type="text" name="email" placeholder="Email pemesan" autocomplete="off" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>No.telepon</label>
										<input class="form-control" type="text" name="telepon" placeholder="Telepon pemesan" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat</label>
										<textarea class="form-control" rows="4"  name="alamat" placeholder="Alamat pemesan" required></textarea>
									</div>
								</div>
							</div>
							<button class="btn btn-primary float-right"><i class="fas fa-save"></i> NEXT</button>
						</div>
					</div>
				</form>
			</div>
			<hr>
		</div>
	</div>
	</div>
</div>

<footer class="footer text-center p-2 text-muted bg-transparent text-dark">
	<small>
		<a href="<?= base_url() ?>">Home</a> | <a href="<?= base_url() ?>">About</a><br>
		Copyright &copy; e-Travel 2020
	</small>
</footer>



		
			
		