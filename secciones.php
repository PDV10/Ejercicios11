<?php

    function home(){
        echo '
            <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="'.BASE_URL.'">
        <title>trabajo practico 1</title>
    </head>
    <body>';
   
        $saludo = "Hola Mundo!";
        echo '<h1>'.$saludo.'</h1>'; 

        echo '<a href="listar/5" id="listar5">'."mostrar 5 Primeros".'</a><br>'; 
        echo '<a href="listar/20" id="listar20">'."mostrar 20 Primeros".'</a><br>';
        echo '<a href="listar/100" id="listar100">'."mostrar 100 Primeros".'</a><br>';
        
    echo' 
        <div id="contenedor"></div>
        <script src="js/main.js"></script>
    </body>
    </html>
    ';
    }