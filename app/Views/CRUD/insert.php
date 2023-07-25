<?php echo $this->extend('LayoutDatabase/tamplate')?>
<?php echo $this->section('content')?>

<main>
    <div class="title">
        <h1>INSERT DATA MAHASISWA</h1>
        </div>
        <div class="form">
            <form action="/crud/save" method="post">
            <label for="nim">NIM</label>
            <input type="number" name="nim" id="nim" placeholder="nim">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" id="nama" placeholder="nama">
            <label for="prodi">PRODI</label>
            <input type="text" name="prodi" id="prodi" placeholder="prodi">
            <label for="univ">UNIVERSITAS</label>
            <input type="text" name="univ" id="univ" placeholder="universitas">
            <label for="no_hp">NO HANDPHONE</label>
            <input type="number" name="no_hp" id="no_hp" placeholder="no handphone">
            <div class="button-form">
                <button type="submit" value="submit">SUBMIT</button>
            </div>
            </form>
        </div>
   

</main>

<?php echo $this->endSection() ; ?>