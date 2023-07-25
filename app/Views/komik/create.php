<?php $this->extend('Layout/tamplate'); ?>
<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="my-3">Tambah Data Komik</h2>
            <?php $validation->listErrors();?>
            <form action="/comics/save" method="POST">
            <?php echo csrf_field();?>
  <div class="row mb-3">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" name="judul" autofocus>
    </div>
  </div>
  <div class="row mb-3">
    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sampul" name="sampul">
    </div>
  </div>
  <div class="row mb-3">
    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penulis" name="penulis">
    </div>
  </div>
  <div class="row mb-3">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penerbit" name="penerbit">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>