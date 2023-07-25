<?php $this->extend('Layout/Tamplate');?>
<?php $this->section('content');?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Komik</h2>
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/assets/<?php echo $komik['sampul'];?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $komik['judul'];?></h5>
        <p class="card-text"><b>Penulis : <?php echo $komik['penulis'];?></b></p>
        <p class="card-text"><small class="text-body-secondary"><?php echo $komik['penerbit'];?></small></p>
        <a href="/Comics/edit/<?php echo $komik['slug']; ?>" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
        <br>
        <a href="/Comics">Kembali ke daftar komik</a>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</div>

<?php $this->endSection();?>