<?php
     $siswa = [
        [
            "No" => 1,
            "Foto" => "",
            "Nama" => "Joko"
        ],
        [
            "No" => 2,
            "Foto" => "",
            "Nama" => "Eko"
        ],
        [
            "No" => 3,
            "Foto" => "",
            "Nama" => "Joni"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tr>
        <td><h2>Data Siswa (admin)</h2></td>
    </tr>
        <table border="1" cellspacing="1" cellpadding="10">
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Aksi</th>
                <?php foreach ($siswa as $key => $value) : ?>
            <tr>
                <td><?= $value['No'] ?></td>
                <td><?= $value['Foto'] ?><img src="2.jpg" width="100" height="100"></td>
                <td><?= $value['Nama'] ?></td>
                <td> 
                    <a href="profil.php?Nama=<?=$value['Nama']?>"><button>detail</button></a>
                </td>
            </tr>
            <?php endforeach ?>
        </table> 
</body>
</html>