<?php echo $this->extend('Layout/Tamplate') ;?>
<?php echo $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col">
          <a href="/comics/create" class="btn btn-primary mt-3">Tambah data</a>
            <h1 class="mt-2">Daftar Komik</h1>
            <?php if(session()->getFlashdata('data')) :?>
              <div class="alert alert-success" role="alert">
              <?php echo session()->getFlashdata('data') ;?>
                </div>
              <?php endif;?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cover</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1;?>
    <?php foreach($komik as $a):?>
    <tr>
      <th scope="row"><?php echo $i++;?></th>
      <td><img src="/assets/<?php echo $a['sampul'];?>" alt="PWR10YL" class="cover"></td>
      <td><?php echo $a['judul'];?></td>
      <td><a href="/Library/<?php echo $a['slug'];?>" class="btn btn-success">Detail</a></td>
     
    </tr>
    
  </tbody>
  <?php endforeach;?>
</table>


        </div>
    </div>
</div>

<?php $this->endSection();?>