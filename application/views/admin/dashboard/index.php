<div class="col-lg-12 col-md-12 col-sm-12">

<?php if($this->session->flashdata('pesan') != null): ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>success! </strong><?= $this->session->flashdata('pesan'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php else: ?>
<?php endif;?>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Acara
    </button>
    <br>
    <br>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Acara</th>
                <th>Tanggal</th>
                <th>Peserta</th>
                <th>Aksi</th>
                <th>Unit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                $no=1;
                foreach ($dashboard as $data): 
                ?>
    
                <td><?= $no++; ?></td>
                <td><?= $data['nama_acara']; ?></td>
                <td><?= $data['tanggal']; ?></td>
                <td>
                    <a href="<?= base_url('peserta')?>" class="btn btn-warning btn-sm">lihat peserta</a>
                </td>
                <td>
                    <a href="<?= base_url('dashboard/ubah/' . $data['id_acara'])?>" class="btn btn-primary btn-sm">edit</a>
                    <a onclick="return confirm('Hapus acara ini ?')" href="<?= base_url('dashboard/hapus/' . $data['id_acara'])?>" class="btn btn-danger btn-sm">delete</a>
                </td>
                <td><?= $data['id_unit']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tr>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Acara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('dashboard/tambah'); ?>" method="POST">
                    <div class="group">
                        <label for="nama_acara">Nama Acara</label>
                        <input type="text" class="form-control" name="nama_acara" placeholder="masukan nama acara">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="yyyy-mm-dd">
                        <label for="id_unit">Unit Kerja</label>
                        <select name="id_unit" class="form-control">
                            <?php foreach($unitkerja as $data ): ?>
                                <option value="<?= $data['id_unit']; ?>"> <?= $data['nama_unit']; ?> </option>
                            
                            <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>