<div class="panel-body">
    <div class="list-group">
        <?php foreach ($mobil as $m) { ?>
            <a href="#" class="list-group-item">
                <span class="badge"><?php if ($m->mobil_status == 1) {
                                        echo "Tersedia";
                                    } else {
                                        echo "Dirental";
                                    } ?></span>
                <i class="glyphicon glyphicon-user"></i> <?php echo $m->mobil_merk; ?>
            </a>
        <?php } ?>
    </div>
    <div class="text-right">
        <a href="<?php echo base_url() . 'admin/mobil' ?>">Lihat Semua Mobil <i class="glyphicon glyphicon-arrow-right"></i></a>
    </div>
</div>
</div>
</div>
<div class="col-lg-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="glyphicon glyphicon-user o"></i> Kostumer Terbaru</h3>
        </div>
        <div class="panel-body">
            <div class="list-group">
                <?php foreach ($kostumer as $k) { ?>
                    <a href="#" class="list-group-item">
                        <span class="badge"><?php echo $k->kostumer_jk ?></span>
                        <i class="glyphicon glyphicon-user"></i> <?php echo $k->kostumer_nama; ?>
                    </a>
                <?php } ?>
            </div>
            <div class="text-right">
                <a href="<?php echo base_url() . 'admin/kostumer' ?>">Lihat Semua Kostumer <i class="glyphicon glyphicon-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-5">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="glyphicon glyphicon-sort"></i> Peminjaman Terakhir</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Tgl. Transaksi</th>
                            <th>Tgl. Pinjam</th>
                            <th>Tgl. Kembali</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($transaksi as $t) {
                        ?>
                            <tr>
                                <td><?php echo date('d/m/Y', strtotime($t->transaksi_tgl)); ?></td>
                                <td><?php echo date('d/m/Y', strtotime($t->transaksi_tgl_pinjam)); ?></td>
                                <td><?php echo date('d/m/Y', strtotime($t->transaksi_tgl_kembali)); ?></td>
                                <td><?php echo "Rp. " . number_format($t->transaksi_harga) . " ,-"; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="text-right">
                <a href="<?php echo base_url() . 'admin/transaksi' ?>">Lihat Semua Transaksi <i class="glyphicon glyphicon-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.row -->