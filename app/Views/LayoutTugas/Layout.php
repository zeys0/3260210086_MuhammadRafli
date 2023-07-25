<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- PureCSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
     integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" 
     crossorigin="anonymous">

    <!-- AWESOME -->
    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">

    <!-- CSS  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/navbar.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   
    <title>Document</title>
</head>
<body>

    
    <?php echo $this->include('LayoutTugas/navbar'); ?>
    
    <?php echo $this->renderSection('content'); ?>
    
    <?php echo $this->include('LayoutTugas/footer'); ?>
  
    
<script src="https://kit.fontawesome.com/5c8b15c18d.js" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>