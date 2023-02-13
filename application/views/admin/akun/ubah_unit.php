<div class="col-lg-12 col-md-12 col-sm-12">
    <form action="<?= base_url('akun/simpan_ubah') ?>" method="POST">
        <div class="form-group">
            <label for="nama_unit">Nama Unit Kerja</label>
            <input type="hidden" name="id_unit" value="<?= $unitkerja['id_unit'];?>">
            <input type="text" class="form-control" name="nama_unit" value="<?= $unitkerja['nama_unit']; ?>">
            <label for="email">email</label>
            <input type="email" class="form-control" name="email" value="<?= $unitkerja['email']; ?>">
            <br>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
    </form>
</div>