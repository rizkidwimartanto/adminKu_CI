<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-center">
        <h1 class="h3 mb-0 text-gray-800">Form Update (<?php echo $dataperuqyah['nama']; ?>)</h1>
    </div>
    <!-- ketika error akan muncul pesan -->
    <?php if(validation_errors()): ?>
    <div class="alert alert-danger text-black-50z"" role="alert">
        <?php echo validation_errors(); ?>
    </div>
    <!-- akhir -->
    <?php endif; ?>
    <?php echo form_open_multipart('dataperuqyah/edit/' . $id_peruqyah); ?>
    <div class="form-group" id="hideNama">
        <input type="hidden" name="id" value="<?php echo $id_peruqyah; ?>">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="masukkan nama">
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
            <label class="custom-file-label" for="photo"></label>
        </div>
    </div>
    <button class="btn btn-block btn-success" type="submit">
        Submit
    </button>
    <?php echo form_close(); ?>
</div>

<!-- <button type="button" onclick="sembunyikan()">
    Sembunyikan
</button>
<button type="button" onclick="tampilkan()">
    Tampilkan
</button>

<p id="demo"></p>
<p id="demo"></p>

<script>
    var carName = "Volvo";
    myFunction();

    function myFunction() {
        document.getElementById("demo").innerHTML = "I can display " + carName;
    }
</script>

<script src="<?php echo base_url(); ?>assets/js/myScript.js"></script> -->