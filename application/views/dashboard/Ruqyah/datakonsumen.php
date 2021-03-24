<div class="container-fluid">
  <h1 class="h3 mb-0 text-gray-800">Data Konsumen</h1>
  <br>
  <!-- Membuat alert -->
  <?php if ($this->session->flashdata('flashtambah')) : ?>
    <div class="alert alert-success alert-dismissible fade show" style="position: static;" role="alert">
      Data konsumen<strong> <?php echo $this->session->flashdata('flashtambah'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('flashhapus')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Data konsumen<strong> <?php echo $this->session->flashdata('flashhapus'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('flashupdate')) : ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      Data konsumen<strong> <?php echo $this->session->flashdata('flashupdate'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <!-- kondisi jika pencarian data tidak ditemukan -->
  <?php if (empty($datakonsumen)) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Data tidak ditemukan
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>
  <!-- akhir -->
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
          <form action="<?php echo base_url(); ?>datakonsumenruqyah/tambah" method="POST">
            <div class="form-group">
              <label for="nama_konsumen">Nama</label>
              <input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" placeholder="masukkan nama" required autofocus>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="masukkan username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password" required>
            </div>
            <button class="btn btn-block btn-success" type="submit">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir modal -->

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

  <div class="table-responsive" style="bottom: 10px;">
    <table class="table table-bordered">
      <thead class="bg bg-info text-white text-center">
        <tr>
          <th scope="col" style="width: 5%;">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
          <th scope="col" style="width: 15%;">Aksi</th>
        </tr>
      </thead>
      <tbody class="bg bg-light">
        <?php $no = 1; ?>
        <?php foreach ($datakonsumen as $konsumen) : ?>
          <tr>
            <th scope="row" class="text-center">
              <button class="btn btn-light" disabled>
                <?php echo $no; ?>
              </button>
            </th>
            <td>
              <button class="btn btn-light" disabled>
                <?php echo $konsumen["nama_konsumen"]; ?>
              </button>
            </td>
            <td>
              <button class="btn btn-light" disabled>
                <?php echo $konsumen["username"]; ?>
              </button>
            </td>
            <td class="text-center">
              <a href="<?php echo base_url(); ?>datakonsumenruqyah/hapus/<?php echo $konsumen['id']; ?>" onclick="return confirm('Apakah yakin dihapus ?');" class="btn btn-outline-danger">
                <i class="fa fa-trash"></i>
              </a>
              <a href="<?php echo base_url(); ?>datakonsumenruqyah/id/<?php echo $konsumen['id']; ?>" class="btn btn-outline-info">
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