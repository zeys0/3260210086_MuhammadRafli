<?php $this->extend('Layout/tamplate'); ?>
<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="my-2">Update Data Buku</h2>
            <form action="/Library/update/<?php echo $library['id'];?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field();?>
            <input type="hidden" class="form-control" id="slug" name="slug" autofocus value="<?php echo $library['slug']?>">
  <div class="row mb-3">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" name="judul" autofocus value="<?php echo $library['judul']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $library['penulis']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $library['penerbit']?>">
    </div>
  </div>
  <div class="mb-3">
    <label for="sampul" class="form-label"></label>
    <input class="form-control" type="file" id="sampul" name="sampul">
  </div>
  <button type="submit" class="btn btn-primary">Update Data</button>
</form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>