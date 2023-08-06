<div class="page-header">
    <h3>Edit Mobil</h3>
</div>

<?php foreach ($mobil as $m) { ?>
<form action="<?php echo base_url() . 'admin/mobil_update' ?>" method="post">
    <div class="form-group">
        <label>Merk Mobil</label>
        <input type="hidden" name="id" value="<?php echo $m->mobil_id; ?>">
        <input type="text" class="form-control" name="merk" value="<?php echo $m->mobil_merk; ?>">
        <?php echo form_error('merk'); ?>
    </div>
    <div class="form-group">
        <label for="">No Plat Kendaraan</label>
        <input type="text" name="plat" class="form-control" value="<?php echo $m->mobil_plat; ?>">
    </div>
    <div class="form-group">
        <label for="">Warna</label>
        <input type="text" name="warna" class="form-control" value="<?php echo $m->mobil_warna; ?>">
    </div>
    <div class="form-group">
        <label for="">Tahun Kendaraan</label>
        <input type="text" name="tahun" class="form-control" value="<?php echo $m->mobil_tahun; ?>">
    </div>

    <div class="form-group">
        <label for="">Status Mobil</label>
        <select name="status" id="" class="form-control">
            <option <?php if ($m->mobil_status == "1") {
                            echo "selected='selected'";
                        }
                        echo $m->mobil_tahun; ?> value="1">
                Tersedia</option>
            <option <?php if ($m->mobil_status == "2") {
                            echo "selected='selected'";
                        }
                        echo $m->mobil_tahun; ?> value="2">
                Sedang di Rental</option>

        </select>
        <?php echo form_error('status'); ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn-info" name="" id="">
    </div>
</form>
<?php } ?>