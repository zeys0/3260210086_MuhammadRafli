<?php echo $this->extend('Layout/Tamplate') ;?>
<?php echo $this->section('content') ;?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3>Contact Me
                <?php foreach($Alamat as $a) : ?>
                    <ul>
                    <li><?php echo $a['Nama'] ;?></li> 
                    <li><?php echo $a['Alamat'] ;?></li> 
                    <li><?php echo $a['Email'] ; ?></li> 
                    </ul>
                </h3>
                <?php endforeach; ?>
                
            
        </div>
    </div>
</div>

<?php echo $this->endSection() ;?>