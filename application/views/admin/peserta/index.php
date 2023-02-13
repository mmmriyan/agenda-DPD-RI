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
                <th>Nama Peserta</th>
                <th>Email</th>
                <th>Unit Kerja</th>
                <th>Acara</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                $no=1;
                foreach ($absen as $data): 
                ?>
    
                <td><?= $no++; ?></td>
                <td><?= $data['nama_peserta']; ?></td>
                <td><?= $data['email']; ?></td>    
                <td><?= $data['id_unit']; ?></td>
                <td><?= $data['id_acara']; ?></td>
                
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