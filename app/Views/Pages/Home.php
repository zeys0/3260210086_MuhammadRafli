
<?php echo $this->extend('Layout/Tamplate') ;?>
<?php echo $this->section('content') ;?>

  
  <div class="container">
    <h1>Search Example</h1>
    <form class="form-inline my-4">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search-input">
      <button class="btn btn-primary my-2 my-sm-0" type="button" onclick="search()">Search</button>
    </form>
    <div id="search-results">
      <!-- Hasil pencarian akan ditampilkan di sini -->
    </div>
  </div>
    </div>
    <?php echo $this->endSection();?>