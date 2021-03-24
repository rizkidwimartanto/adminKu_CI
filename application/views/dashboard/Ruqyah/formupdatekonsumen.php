<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-center">
        <h1 class="h3 mb-0 text-gray-800">Form Update (<?php echo $datakonsumen['nama_konsumen']; ?>)</h1>
    </div>
    <!-- ketika error akan muncul pesan -->
    <?php if(validation_errors()): ?>
    <div class="alert alert-danger text-black-50z" role="alert">
        <?php echo validation_errors(); ?>
    </div>
    <!-- akhir -->
    <?php endif; ?>
    <form action="<?php echo base_url(); ?>datakonsumenruqyah/edit/<?php echo $id_konsumen; ?>" class="text-left" method="POST">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id_konsumen; ?>">
            <label for="nama_konsumen">Nama</label>
            <input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" placeholder="masukkan nama" >
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username"   name="username" placeholder="masukkan username" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password" >
        </div>
        <!-- <div class="form-group">
            <label for="confirmpassword">Konfirmasi Password</label>
            <input type="password" class="form-control" id="confirmpassword" name="password" placeholder="masukkan konfirmasi password" >
        </div> -->
        <button class="btn btn-block btn-success" type="submit">
            Submit
        </button>
    </form>
</div>