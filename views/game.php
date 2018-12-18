<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bf.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>The Lag</title>
</head>
<body>
<header>
    <div role="nav" class="mainMenu">
        <img class="logoLag" src="../img/logo.png">
    </div>

    <div role="section" class="contentHeader">
        <div>
        <img class="logoGame" src="../img/bf5_logo.png">
        <p> Découvrez le plus grand conflit mondial.
        La licence Battlefield revient aux sources et dépeint la Seconde Guerre 
        mondiale comme jamais auparavant. Livrez des batailles frénétiques avec 
        votre escouade dans des modes imposants comme Grandes opérations et 
        coopératifs comme Tir Groupés 
        </p>
        </div>
        <h2> + de 100 coachs professionnels </h2>
    </div>
    <a href="#disponibilites"> <i class="fas fa-angle-down"></i> </a> 
</header>

<main>
<section>  
<h1> Vos disponibilités </h1>
<div id="disponibilites">
<form> 
    <div class="form">
        <div id="calendrier">
        
        </div>
        <div class="choixCoaching">
            <div class="boutonsChoix">
                <button class="buttonCoaching"> Suivre un coaching </button>
                <button class="buttonCoaching"> Proposer un coaching </button> 
            </div>

            <div class="boutonsChoix">
            <select class="selectCoaching">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>

            <select class="selectCoaching">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>
            </div>
        </div>
    </div>
</form>
</div>
</section>
<section id="coachs">
<h1> Coachs </h1>
<!-- <ul>
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
    </ul>
-->
</section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/slick.min.js"> </script>
<script type="text/javascript">
//<![CDATA[
calInit("calendrier", "", "champ_date", "jsCalendar", "day", "selectedDay");
//]]>
</script>
</body>
</html>