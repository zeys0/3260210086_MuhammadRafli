<?php echo $this->extend('LayoutDatabase/tamplate')?>
<?php echo $this->section('content')?>

<main>
    <div class="title">
        <h1>TAMBAH DATA MAHASISWA</h1>
        </div>
      <div class="form">
        <form action="/crud/updateData" method="post">
          <label for="nim">NIM</label>
          <input type="text" name="nim" id="nim" placeholder="nim">
          <label for="newNim">NIM Baru</label>
          <input type="text" name="newNim" id="newNim" placeholder="newNim">
          <label for="nama">NAMA</label>
            <input type="text" name="nama" id="nama" placeholder="nama">
            <label for="prodi">PRODI</label>
            <input type="text" name="prodi" id="prodi" placeholder="prodi">
            <label for="univ">UNIVERSITAS</label>
            <input type="text" name="univ" id="univ" placeholder="universitas">
            <label for="nohp">NO HANDPHONE</label>
            <input type="text" name="nohp" id="nohp" placeholder="no handphone">
            <div class="button-form">
                <button type="submit" value="submit">SUBMIT</button>
            </div>
        </form>
      </div>
    
</main>

<?php echo $this->endSection(); ?>

