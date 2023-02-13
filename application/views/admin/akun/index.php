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
        Tambah Unit Kerja
    </button>
    <br>
    <br>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Unit Kerja</th>
                <th>email</th>
                <th>Id Unit Kerja</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                $no=1;
                foreach ($unitkerja as $data): 
                ?>
    
                <td><?= $no++; ?></td>
                <td><?= $data['nama_unit']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['id_unit'] ?></td>
                <td>
                    <a href="<?= base_url('akun/ubah/' .$data['id_unit']) ?>" class="btn btn-primary btn-sm">edit</a>
                    <a onclick="return confirm('Hapus Unit Kerja ini ?')" href="<?= base_url('akun/hapus/' .$data['id_unit'])?>" class="btn btn-danger btn-sm">delete</a>
                </td>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Unit Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('akun/tambah'); ?>" method="POST">
                    <div class="group">
                        <label for="nama_unit">Nama Unit Kerja</label>
                        <input type="text" class="form-control" name="nama_unit" placeholder="masukan nama unit kerja">
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email" placeholder="masukan email">
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