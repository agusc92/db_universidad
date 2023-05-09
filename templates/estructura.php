<?php

function mostrarHead(){
    echo'
                    <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="styles/styles.css">
                
                <title>Document</title>
            </head>
            <body>
    ';
}
function mostrarNav(){
    echo "<nav>
            <ul>
                <li><a href='http://localhost/db_universidad/router.php?action=materias'>todas las materias</a></li>
                <li><a href='http://localhost/db_universidad/router.php?action=materias-carreras'>materias + carreras</a></li>
                
                
            </ul>
            <ol>
                        <li>filtrar por</li>
                        <li><a href='http://localhost/db_universidad/router.php?action=materias'>prof matematicas</a></li>
                        <li><a href='http://localhost/db_universidad/router.php?action=materias'>TUDAI</a></li>
                        <li><a href='http://localhost/db_universidad/router.php?action=materias'>prof biologia</a></li>
                        <li><a href='http://localhost/db_universidad/router.php?action=materias'>lic canto</a></li>
                    </ol>
        </nav>";
} 
function mostrarHeader(){
    echo'
            <header class="row">
                <div class="col">
                    <h1 >
                        Universidad
                    </h1>
                </div>
                ';
                mostrarNav();
                echo'
            </header>
        <main>
    ';
}

function mostrarFooter(){
    echo'
            </main>
            <footer>

            </footer>

            
        </body>
        </html>        
    ';
}