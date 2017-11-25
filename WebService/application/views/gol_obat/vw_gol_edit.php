<div class="page-head text-center">
    <h1>Ubah Data Golongan Obat <?php echo $g->golongan ?></h1>
</div>

<div class="col-md-8 offset-md-2">
    <?php foreach ($gol_obat as $g) { ?>
    <form action="<?php echo base_url().'index.php/gol_obat/update_action'; ?>" method="post">
        <div class="form-group row">
            <label class="col-form-label col-sm-3">Kode Golongan</label>
            <div class="col-sm-6">
                <input class="form-control" name="kd_gol" type="text" value="<?php echo $g->kd_gol; ?>" maxlength="4">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-sm-3">Nama Golongan</label>
            <div class="col-sm-6">
                <input class="form-control" name="golongan" type="text" value="<?php echo $g->golongan ?>" maxlength="30">
            </div>
        </div>
        
        <nav>
            <button class="btn btn-outline-secondary pull-left" onclick="goBack()">Kembali</button>
            <input type="submit" class="btn btn-primary pull-right" value="Simpan">
        </nav>
    </form>
    <?php } ?>
</div>
