<?php
    session_start(); // inicia a variavel $_SESSION
    $url = explode('/', $_SERVER['REQUEST_URI']); //pega a url e transforma em uma array
    //$page = $url[3]; // URL Local
    $page = $url[1]; // URL Online
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
    <link rel="icon" href="img/favicon-16x16.png">
    <link rel="stylesheet" href="css/style.css">

    <!-- Main js -->
    <script defer src="js/script.js"></script>

    <title>Pokedex</title>
</head>
<body>
    
    <main>
        <img src="#" alt="pokemon" class="pokemon__image">

        <h1 class="pokemon__data">
            <span class="pokemon__number"></span>- 
            <span class="pokemon__name"></span>
        </h1>

        <form class="form">
            <input type="search" class="input__search" placeholder="Name or Number" required>
        </form>

        <div class="buttons">
            <button class="button btn-prev">&lt; Prev</button>
            <button class="button btn-next">Next &gt;</button>
        </div>
        <img src="img/pokedex.png" alt="pokedex" class="pokedex">
    </main>

</body>
</html>