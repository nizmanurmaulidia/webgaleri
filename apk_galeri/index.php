<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web foto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
        require"function.php";
        $datas= query("SELECT * FROM albumfoto");

    ?>
    <!-- <nav></nav> -->
    <article>
        <div class="judul">
            <h1>GALERI</h1>
            
        </div>
        <div class="card-wrapper">
            <div class="card-scroll">
                <?php foreach($datas as $key){ ?>
                <div class="card">
                    <img src="img/<?= $key["foto"] ?>" alt="" width="100%" height="70%">
                    <span><?= $key["judul"] ?></span>
                    <span><?= $key["deskripsi"] ?></span>
                    <span></span>
                </div>
                <?php } ?>                
            </div>
        </div>
    </article>
    <footer>
        <a href="login.php">silahkan login</a>
    </footer>
    
</body>
</html>
