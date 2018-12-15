<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <title>The Lag</title>
</head>
<body>
<header>
<img src="img/logo.png">
</header>
<main>
  <h1> Bibliothèque de jeux </h1>
    <ul>
    <div role="section" class="slider">
    <?php
    foreach ($games as $game) {
    ?>
    
        <li>
        <div class="container">
        <div>
            <img class="game" src="<?php echo $game["img_path"]?>">
            <div class="bottom-left">
                <h3> <?php echo $game["name"]?> </h3>
            </div>
            <div class="middle">
                <a href="#" class="gameButton"> Voir le jeu </a>
            </div>
        </div>
        </div>
        </li>
    <?php
    }
    ?>
    </div>
    </ul>
    
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/slick.min.js"> </script>
<script>
$(document).ready(function(){
$('.slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll:1,
  rows:3,
  
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        rows:1,
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        rows:1,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    }
  ]
});
});

</script>
</body>
</html>