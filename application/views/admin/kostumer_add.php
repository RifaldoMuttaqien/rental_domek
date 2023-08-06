<div class="page-header">
    <h3>Kostumer Baru</h3>
</div>

<form action="<?php echo base_url() . 'admin/kostumer_add_act' ?>" method="post">
    <div class="form-group">
        <label>Nama Kostumer</label>
        <input type="nama" name="nama" class="form-control">
        <?php echo form_error('nama'); ?>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>

    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jk" class="form-control">
            <option value="L">Laki - Laki</option>

        </select>

    </div>
    <div class="form-group">
        <label>HP</label>
        <input type="number" name="hp" class="form-control">

    </div>

    <div class="form-group">
        <label>No. KTP</label>
        <input type="number" name="ktp" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="" id="" class="btn btn-info" value="Simpan">
    </div>
</form>