<?php echo $this->extend('LayoutDatabase/tamplate')?>
<?php echo $this->section('content')?>

<main>
    <div class="title">
        <h1>UPDATE DATA MAHASISWA</h1>
        </div>
        <div class="form">
            <form action="/crud/update/<?php echo $mahasiswa['nim'] ;?> " method="post">
            <input type="hidden" name="nim" id="nim" placeholder="nim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="newNim">NIM Baru</label>
            <input type="number" name="newNim" id="newNim" placeholder="newNim" value="<?php echo $mahasiswa['nim'];?>">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" id="nama" placeholder="nama" value="<?php echo $mahasiswa['nama'];?>">
            <label for="prodi">PRODI</label>
            <input type="text" name="prodi" id="prodi" placeholder="prodi" value="<?php echo $mahasiswa['prodi'];?>">
            <label for="univ">UNIVERSITAS</label>
            <input type="text" name="univ" id="univ" placeholder="universitas" value="<?php echo $mahasiswa['universitas'];?>">
            <label for="no_hp">NO HANDPHONE</label>
            <input type="number" name="no_hp" id="no_hp" placeholder="no handphone" value="<?php echo $mahasiswa['no_hp'];?>">
            <div class="button-form">
                <button type="submit" value="submit">SUBMIT</button>
            </div>
            </form>
        </div>
   

</main>

<?php echo $this->endSection() ; ?>
