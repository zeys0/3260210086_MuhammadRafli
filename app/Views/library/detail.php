<?php $this->extend('Layout/Tamplate');?>
<?php $this->section('content');?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Buku</h2>
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/assets/<?php echo $library['sampul'];?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $library['judul'];?></h5>
        <p class="card-text"><b>Penulis : <?php echo $library['penulis'];?></b></p>
        <p class="card-text"><small class="text-body-secondary"><?php echo $library['penerbit'];?></small></p>
        <a href="/library/edit/<?php echo $library['slug']; ?>" class="btn btn-warning">Edit</a>
        <a href="/library/delete/<?php echo $library['id']; ?>">
    <button onclick="return confirm('Apakah anda yakin ingin menghapus <?php echo $library['slug']; ?>')" 
    class="Delete btn btn-danger">
        Delete
    </button>
</a>

        <br>
        <a href="/library">Kembali ke daftar buku</a>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</div>

<?php $this->endSection();?>