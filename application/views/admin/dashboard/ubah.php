<div class="col-lg-12 col-md-12 col-sm-12">
    <form action="<?= base_url('dashboard/simpan_ubah')?>" method="POST">
    <div class="form-group">
                <label for="nama_acara">Nama Acara</label>
                <input type="hidden" name="id_acara" value="<?= $dashboard['id_acara']; ?>">
                <input type="text" class="form-control" name="nama_acara" value="<?= $dashboard['nama_acara']; ?>">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="<?= $dashboard['tanggal']; ?>">
                <label for="id_unit">Unit Kerja</label>
                <select name="id_unit" class="form-control">
                        <?php foreach($unitkerja as $data ): ?>
                        <option value="<?= $data['id_unit']; ?>"><?= $data['nama_unit']; ?></option>
                            
                    <?php endforeach; ?>
                 </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
</div>