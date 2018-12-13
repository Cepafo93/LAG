<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<header>
<img src="img/logo.png">
</header>
<main>
    <ul>
    <?php
    foreach ($games as $game) {
    ?>
    
        <li>
        <div class="container">
            <img class="game" src="<?php echo $game["img_path"]?>">
            <div class="bottom-left">
                <h3> <?php echo $game["name"]?> </h3>
            </div>  
        </div>
        </li>
    
    <?php
    }
    ?>
    </ul>
</main>
</body>
</html>