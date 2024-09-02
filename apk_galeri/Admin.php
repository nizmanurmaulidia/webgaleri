<?php 
    session_start();

    if(!isset($_SESSION["login"])){
        header("Location:login.php");
    }

    require"function.php";
    $datas= query("SELECT * FROM albumfoto");

    
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Galeri Foto</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="wrap-card">
    <h1>Web Galeri Foto</h1>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Foto</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($datas as $key): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><img src="img/<?= $key["foto"]; ?>" width="100px"></td>
                    <td><?= $key["judul"]; ?></td>
                    <td><?= $key["deskripsi"]; ?></td>
                    <td>
                        <a href="hapus.php?id=<?= $key["id"] ?>" onclick="return confirm('Yakin?')">Hapus</a> | 
                        <a href="update.php?id=<?= $key["id"] ?>">Ubah</a>
                    </td>
                </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
    <span class="button-group">
        <a href="tambah.php" class="button">Tambah</a>
        <a href="logOut.php" class="button">Logout</a>
    </span>
</div>
</body>
</html>
