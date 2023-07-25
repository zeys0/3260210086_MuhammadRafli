<?php echo $this->extend('LayoutDatabase/tamplate')?>
<?php echo $this->section('content')?>

<main>
    <div class="title">
        <h1>Data mahasiswa</h1><br>
        <?php if(session()->getFlashData('data')) :?>
        <h1><?php echo session()->getFlashData('data');?></h1>
        <?php endif; ?>
        <a href="/crud/insert"><button>Tambah Data</button></a>
    </div>
    <div class="table">
        <table border="1">
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>universitas</th>
                <th>No hp</th>
                <th>action</th>
            </tr>
            <?php if(empty($mahasiswa)):?>
            <tr>
                <td colspan='7'><?php echo "DATA KOSONG" ;?></td>
            </tr>
            <?php endif;?>
            <?php $i=1; ?>
            <?php foreach($mahasiswa as $a) :?>
            <tr>
                <td><?php echo $i++?></td>
                <td><?php echo $a['nama'] ?></td>
                <td><?php echo $a['nim'] ?></td>
                <td><?php echo $a['prodi'] ?></td>
                <td><?php echo $a['universitas'] ?></td>
                <td><?php echo $a['no_hp'] ?></td>
                <td class="action">
                    <a href="/crud/<?php echo $a['nim'];?>"><button class="Update">Update</button></a>
                    <a href="/crud/delete/<?php echo $a['nim'];?>"><button class="Delete" 
                    onclick="return confirm('Apakah anda yakin ingin mengahapus <?php echo $a['nim'] ;?>')">Delete</button></a>
                </td>
                
                <?php endforeach; ?>
            </tr>

        </table>

    </div>
</main>

<?php $this->endSection();?>