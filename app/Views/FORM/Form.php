<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
     integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>
<body>
    
    <ul>
        <li><h1>Muhammad Rafli</h1></li>
        <li><h1>32602100086</h1></li>
        <li><h1>WEB PROGRAMMING</h1></li>
    </ul>
  
<form class="pure-form pure-form-stacked" action="/form" method="POST">
   
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="nama" />
        <label for="nim">Nim</label>
        <input type="text" id="nim" name="nim" placeholder="nim" />
        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" name="kelas" placeholder="kelas" />
        <label for="matkul">Matkul</label>
        <input type="text" id="matkul" name="matkul" placeholder="matkul" />
        <label for="dosen">Dosen Pengampu</label>
        <input type="text" id="dosen" name="dosen" placeholder="dosen" />
        <label for="asisten">Asisten Pratikum</label>
        <input type="text" id="asisten" name="asisten" placeholder="asisten" />
        
        <input type="submit" class="pure-button pure-button-primary">
   
</form>
</body>
</html>