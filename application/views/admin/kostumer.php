<div class="page-header">
    <h3>Data Kostumer</h3>
</div>

<a href="<?php echo base_url() . 'admin/kostumer_add'; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>Kostumer Baru</a>
<br /><br />
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="table-datatable">
        <thead>
            <th>NO</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>HP</th>
            <th>No. KTP</th>
            <th></th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($kostumer as $k) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $k->kostumer_nama ?></td>

                    <td><?php echo $k->kostumer_jk ?></td>
                    <td><?php echo $k->kostumer_alamat ?></td>
                    <td><?php echo $k->kostumer_hp ?></td>
                    <td><?php echo $k->kostumer_ktp ?></td>


                    <td>
                        <a class="btn btn-warning btn-sm" href="<?php echo base_url() . 'admin/kostumer_edit/' . $k->kostumer_id; ?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url() . 'admin/kostumer_hapus/' . $k->kostumer_id; ?>"><span class="glyphicon glyphicon-trash"></span>Hapus</a>

                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>