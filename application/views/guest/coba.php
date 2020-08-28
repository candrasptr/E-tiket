<div class="container-fluid">
    <?php if (!isset($tiket)): ?>
            
    <?php else: ?>
    <div class="row">
        <?php if ($tiket !== NULL): ?>
       
        <?php foreach ($tiket as $tk) { ?>
        <div class="col-md-6 mt-3">
            <div class="card mb-3 border-secondary rounded shadow-sm">
                <div class="row no-gutters">
                    <div class="col-2 mt-2">
                        <img src="<?= base_url('assets/images/ka.png') ?>" width="40px" class="ml-4 ">
                    </div>
                    <div class="col-10 mt-2">
                        <h5 class="card-text">
                            <b><?= $tk->nama_kereta ?></b>
                        </h5>
                    </div>
                    <div class="col-2 mt-2">
                        <p class="text-secondary mr-1 float-right"><b><?php $date = date_create($tk->tgll_berangkat); echo date_format($date, "h:i:"); ?></b></p>
                                                    
                    </div>
                    <div class="col-2 mt-2">
                        <p class="text-secondary">.......................</p>
                    </div>
                    <div class="col-3 mt-2">
                        <p class="text-secondary"><b><?php $date = date_create($tk->tg_sampai); echo date_format($date, "h:i"); ?></b></p>
                    </div>
                    <div class="col-5 mt-2">
                        <p class="text-danger"><?= 'Rp.'.number_format($tk->harga,0,',','.') ?></p>
                    </div>
                    <div class="col-2">
                        <p class="text-secondary float-right mr-2">
                        <?= $tk->ASAL ?>
                        </p>
                    </div>
                    <div class="col-2">
                        
                    </div>
                    <div class="col-3">
                        <p class="text-secondary">
                            <?= $tk->TUJUAN ?>
                        </p>
                    </div>
                    <div class="col-5">
                        <p class="text-secondary">
                            per orang <br> <p class="text-success">Tersedia</p>
                        </p>
                    </div>
                    <div class="col-4">
                        <p class="text-secondary ml-2"><i class="fas fa-train"></i> <?= $tk->kelas ?></p>
                    </div>
                    <div class="col-2 offset-5">
                        <a href="<?= base_url('index.php/pesan/'.$tk->id.'?p='.$penumpang) ?>" class="btn btn-primary btn-block mb-3 rounded shadow-sm">PESAN</a>
                    </div>
                </div>
            </div>  
        </div>
        <?php } ?>
        <?php else: ?>
            <?php echo "tidak ada"; ?>
        <?php endif ?>
    </div>
    <?php endif ?>
</div>