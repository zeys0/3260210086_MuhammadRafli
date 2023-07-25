<!doctype html>
<html lang="en">
  <head>
    <!-- CSS BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- MY CSS -->
    <link rel = "stylesheet" href = "/assets/css/style.css">
     
    <title><?php echo $title;?></title>
  
  </head>
  <body>
 

<?php echo $this->include('Layout/Navbar') ;?>
<?php echo $this->renderSection('content') ;?>
<?php echo $this->include('Layout/footer') ;?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="
    sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

     <!-- Bootstrap JS dan JavaScript custom -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script>
    function search() {
      var input = document.getElementById("search-input").value.toLowerCase();
      var resultsContainer = document.getElementById("search-results");
      resultsContainer.innerHTML = ""; // Kosongkan kontainer hasil pencarian sebelumnya

      // Lakukan logika pencarian sesuai kebutuhan Anda di sini
      // Misalnya, Anda bisa menggunakan AJAX untuk mengirim permintaan ke server dan mendapatkan hasil pencarian dari API

      // Contoh sederhana untuk menampilkan hasil pencarian palsu
      var fakeResults = [
        "Hasil pencarian 1",
        "Hasil pencarian 2",
        "Hasil pencarian 3"
      ];

      fakeResults.forEach(function(result) {
        var resultElement = document.createElement("div");
        resultElement.innerText = result;
        resultsContainer.appendChild(resultElement);
      });
    }
  </script>
  </body>
</html>