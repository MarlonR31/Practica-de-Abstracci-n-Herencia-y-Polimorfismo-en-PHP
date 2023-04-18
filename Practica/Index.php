<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sha384--ggOy">
    <title>Page Kids</title>
    
    <style>
        .box
        {
            display:inline-block;
            text-align: center;
            margin-left: 100px;
            margin-bottom: 80px;
        }
    </style>
</head>
<body>
    <!-- Image and text-->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#"> 
        <img src="./img/753945_games_game_gaming_play_video_icon.png" width="40" height="40" class="d-inline-block align-top" alt="">

    </a>
</nav>

<div class="jumbotron">
    <form action="Index.php" method="POST">
        
<div class="box">
    <div class="card" style="width: 16rem; height: 14rem">
    <img class="card-img-top" src="./img/gato.jpg" alt="Car image cap" style="width: 15rem; height: 13rem;">
        <div class="card-body">
            <h5 class="card-body">Gato</h5>
        <input type="submit" class="btn btn-primary" name="gato" value="Reproducir">
</div>
    </div>
        </div>

<div class="box">
    <img class="card-img-top" src="./img/perro.jpg" alt="Car image cap" style="width: 15rem; height: 13rem;">
        <div class="card-body">
            <h5 class="card-body">Perro</h5>
        <input type="submit" class="btn btn-primary" name="perro" value="Reproducir">
</div>
    </div>
        </div>


        <div class="box">
    <img class="card-img-top" src="./img/vaca.jpg" alt="Car image cap" style="width: 15rem; height: 13rem;">
        <div class="card-body">
            <h5 class="card-body">Vaca</h5>
        <input type="submit" class="btn btn-primary" name="vaca" value="Reproducir">
</div>
    </div>
        </div>
</body>

</html>

<?php
include_once('Animales.php');
