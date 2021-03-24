<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-0 text-gray-800">Data Peruqyah</h1>
  <br>
  <!-- Membuat alert -->
  <?php if ($this->session->flashdata('flashtambah')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Peruqyah<strong> <?php echo $this->session->flashdata('flashtambah'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('flashhapus')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Data Peruqyah<strong> <?php echo $this->session->flashdata('flashhapus'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('flashupdate')) : ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      Data Peruqyah<strong> <?php echo $this->session->flashdata('flashupdate'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <!-- kondisi jika pencarian data tidak ditemukan -->
  <?php if (empty($dataperuqyah)) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Data tidak ditemukan
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>
  <!-- akhir alert -->

  <!-- Button untuk menuju form tambah -->
  <button type="button" class="btn btn-success" style="position: absolute;" data-toggle="modal" data-target=".form-tambah">
    Tambah Data
  </button>

  <br>

  <!-- Modal -->
  <div class="modal fade form-tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart('dataperuqyah/tambah'); ?>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" value="<?php echo set_value('nama'); ?>" name="nama" id="nama" placeholder="masukkan nama">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat">
          </div>
          <div class="form-group">
            <label for="no_hp">No Hp</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="masukkan no hp">
          </div>
          <div class="form-group">
            <label for="photo">Foto</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="photo" name="photo">
              <label class="custom-file-label" for="photo">Pilih Gambar</label>
            </div>
          </div>
          <button class="btn btn-block btn-success" type="submit">
            Submit
          </button>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- cari data -->
  <form action="" method="post" style="position:relative; bottom:25px; left: 140px;">
    <div class="input-group w-50">
      <input type="text" class="form-control" name="keyword" placeholder="Cari Data">
      <div class="input-group-append">
        <button class="btn btn-outline-primary" type="submit">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
  </form>
  <!-- akhir cari data -->

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="bg bg-info text-white text-center">
        <tr>
          <th scope="col" style="width: 5%;">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">No Hp</th>
          <th scope="col">Photo</th>
          <th scope="col" style="width: 15%;">Aksi</th>
        </tr>
      </thead>
      <tbody class="bg bg-light">
        <?php $no = 1; ?>
        <?php foreach ($dataperuqyah as $peruqyah) : ?>
          <tr>
            <th scope="row" class="text-center">
              <button class="btn btn-light" disabled>
                <?php echo $no; ?>
              </button>
            </th>
            <td>
              <button class="btn btn-light" disabled>
                <?php echo $peruqyah["nama"]; ?>
              </button>
            </td>
            <td>
              <button class="btn btn-light" disabled>
                <?php echo $peruqyah["alamat"]; ?>
              </button>
            </td>
            <td>
              <button class="btn btn-light" disabled>
                <?php echo $peruqyah["no_hp"]; ?>
              </button>
            </td>
            <td class="text-center">
              <img src="<?php echo base_url(); ?>assets/img/<?php echo $peruqyah['photo']; ?>" alt="gambar rak ono woy" width="100px" height="100px">
            </td>
            <td class="text-center">
              <a href="<?php echo base_url(); ?>dataperuqyah/hapus/<?php echo $peruqyah['id']; ?>" onclick="return confirm('Apakah yakin dihapus ?');" class="btn btn-outline-danger">
                <i class="fa fa-trash"></i>
              </a>
              <a href="<?php echo base_url(); ?>dataperuqyah/id/<?php echo $peruqyah['id']; ?>" class="btn btn-outline-info">
                <i class="fa fa-edit"></i>
              </a>
            </td>
          </tr>
      </tbody>
      <?php $no++; ?>
    <?php endforeach; ?>
    </table>
  </div>
</div>
<!-- 
<p id="coba">

</p> -->

<script src="<?php echo base_url(); ?>assets/js/jajaljs.js"></script>