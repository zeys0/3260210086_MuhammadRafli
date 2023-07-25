<?php $this->extend('Layout/tamplate'); ?>
<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="my-2">Update Data Komik</h2>
            <form action="/comics/update/<?php echo $komik['id'];?>" method="POST">
            <?php echo csrf_field();?>
            <input type="hidden" class="form-control" id="slug" name="slug" autofocus value="<?php echo $komik['slug']?>">
  <div class="row mb-3">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" name="judul" autofocus value="<?php echo $komik['judul']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sampul" name="sampul" value="<?php echo $komik['sampul']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $komik['penulis']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $komik['penerbit']?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>