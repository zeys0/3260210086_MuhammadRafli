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
    
    <table class="pure-table pure-table-bordered">
        
        <tr>
     <th>NAMA</th>
    <th>NIM</th>
     <th>KELAS</th>
    <th>MATA KULIAH</th>
    <th>DOSEN</th>
    <th>ASISTEN PRATIKUM</th>
</tr>
<tr>
    <td><?php echo $nama ;?></td>
    <td><?php echo $nim ;?></td>
    <td><?php echo $kelas ;?></td>
    <td><?php echo $matkul ;?></td>
    <td><?php echo $dosen ;?></td>
    <td><?php echo $asisten ;?></td>
</tr>
</table>
</body>
</html>

</body>
</html>