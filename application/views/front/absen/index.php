<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda DPD RI</title>
</head>

<body>
  <header>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/') ?>assets/img/logo-dpd-ri.png" width="30" height="30"
          class="d-inline-block align-top" alt="logo">
        <strong>DPD RI</strong>
      </a>
      <span class="navbar-text">
        website absensi rapat DPD RI
      </span>
    </nav>
  </header>
  <br>
  <br>

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
  <div class="card">
  <div class="card-header">
    Daftar Agenda Kegiatan
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Acara</th>
                <th>Tanggal</th>
                <th>Unit Kerja</th>
                <th>Aksi</th>
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
                <td><?= $data['id_unit']; ?></td>
                <td>
                    <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">absen</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tr>
        </tbody>
    </table>
      <!-- <footer class="blockquote-footer">tekan tombol absen untuk melakukan absensi</footer> -->
    </blockquote>
  </div>
</div>
    
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengisian data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('absen/tambah')?>" method="POST">
                    <div class="group">
                        <label for="nama_peserta">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_peserta" placeholder="masukan nama lengkap">
                        <label for="id_unit">Unit Kerja</label>
                        <select name="id_unit" class="form-control">
                            <?php foreach($unitkerja as $data ): ?>
                                <option value="<?= $data['id_unit']; ?>"> <?= $data['nama_unit']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                        <label for="acara">Nama Acara</label>
                        <select name="id_acara" class="form-control">
                            <?php foreach($dashboard as $data ): ?>
                                <option value="<?= $data['id_acara']; ?>"> <?= $data['nama_acara']; ?></option>
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
</body>
</html>

<br>