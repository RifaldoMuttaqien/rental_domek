<div class="page-header">
    <h3>Edit Mobil</h3>
</div>

<?php foreach ($kostumer as $k) { ?>
<form action="<?php echo base_url() . 'admin/kostumer_update' ?>" method="post">
    <div class="form-group">
        <label>Nama Kostumer</label>
        <input type="hidden" name="id" value="<?php echo $k->kostumer_id; ?>">
        <input type="text" class="form-control" name="nama" value="<?php echo $k->kostumer_nama; ?>">
        <?php echo form_error('nama'); ?>
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $k->kostumer_alamat; ?>">
    </div>
    <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <select name="jk" id="" class="form-control">
            <option value="L">Laki-laki</option>


        </select>

    </div>
    <div class="form-group">
        <label for="">HP</label>
        <input type="number" name="hp" class="form-control" value="<?php echo $k->kostumer_hp; ?>">
    </div>

    <div class="form-group">
        <label for="">No. KTP</label>
        <input type="number" name="ktp" class="form-control" value="<?php echo $k->kostumer_ktp; ?>">
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn-info" name="" id="">
    </div>
</form>
<?php } ?>