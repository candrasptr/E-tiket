
<!-- jumbotron -->
<br><br><br><br>
  <div class="container">
    <div class="row">
    	<div class="col-md-8">
    		<br><br><br><br>
    		<h1 class="display-4">Tiket Pesawat</h1>
    		<p class="lead">Anda dapat melakukan pemesanan tiket dengan mudah</p>
    	</div>
    	<div class="col-md-4">
    		<form action="<?= base_url('index.php/cariTiketpesawat') ?>" method="POST">
    			<div class="form-group">
    				<label>Bandara Asal</label>
    				<select name="asal" class="form-control rounded shadow-sm">
    					<?php foreach ($bandara as $bd): ?>
                            <option value="<?= $bd->id ?>"><?= $bd->nama_bandara ?></option>
                        <?php endforeach ?>
    				</select>
    			</div>
    			<div class="form-group">
    				<label>Bandara Tujuan</label>
    				<select name="tujuan" class="form-control rounded shadow-sm">
                        <?php foreach ($bandara as $bd): ?>
                            <option value="<?= $bd->id ?>"><?= $bd->nama_bandara ?></option>
                        <?php endforeach ?>    				
                    </select>
    			</div>
    			<div class="form-group">
    				<label>Tanggal Berangkat</label>
    				<input type="date" name="tanggal" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" class="form-control rounded shadow-sm">
    			</div>
    			<div class="form-group">
    				<label>Jumlah Penumpang</label>
    				<select name="jumlah" class="form-control rounded shadow-sm">
    					<?php for ($i=1; $i <=5 ; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?> Penumpang</option>
                        <?php endfor; ?>
    				</select>
    			</div>
    			<button class="btn btn-primary btn-block rounded shadow-sm"><i class="fas fa-search float-left pt-1"></i>Cari tiket</button>
    		</form>
    	</div>
    </div>
  </div>
  <div class="container-fluid">
          <?php if (!isset($tiketpesawat)): ?>
                
          <?php else: ?>
          <hr>
          <div class="table-responsive">
            <table class="table table-hover">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Maskapai</th>
                        <th>Tanggal berangkat</th>
                        <th>Tanggal sampai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($tiketpesawat === NULL) ?>
                    <?php $no = 1; ?>
                    <?php foreach ($tiketpesawat as $tkp) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $tkp->nama_maskapai ?></td>
                            <td><?php $date = date_create($tkp->tgll_berangkat); echo date_format($date, "d-m-y h:i:s"); ?></td>
                            <td><?php $date = date_create($tkp->tg_sampai); echo date_format($date, "d-m-y h:i:s"); ?></td>
                            <td>
                                <a class="btn btn-success" href="<?= base_url('index.php/pesanPesawat/'.$tkp->id.'?p='.$penumpang) ?>">Pesan</a>
                            </td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
          </div>
        <?php endif ?>  
  </div>