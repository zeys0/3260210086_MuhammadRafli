<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">

    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <ul class="navbar-page">
        <li><i class="fa-solid fa-circle-user" style="color: #000000;"></i></li>
        </ul>
        <ul class="navbar-page">
            <li><a href="/">Home</a></li>
            <li><a href="/pagesPrak/About">About</a></li>
            <li><a href="">Portofolio</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="navbar-sosmed">
            <ul class="navbar-icon">
                <li><i class="fa-brands fa-linkedin"></i></li>
                <li><i class="fa-brands fa-facebook"></i></li>
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-whatsapp"></i></li>
            </ul>
        </div>
    </div>
        <div class="banner">
            <span class="name"><h1>Andhi Rohman</h1></span><br>
            <span class="description">Saya seorang mahasiswa teknk informatika angkatan 2021 </span>
    </div>
    <?php $this->renderSection('content')?>
    <script src="https://kit.fontawesome.com/5c8b15c18d.js" crossorigin="anonymous"></script>
</body>

</html>