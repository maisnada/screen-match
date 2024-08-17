 <?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";

 $filme = new Filme('Thor', 2022, Genero::SuperHeroi, 120);

 $filme->avalia(10);
 $filme->avalia(10);
 $filme->avalia(7.8);
 $filme->avalia(9);

$serie = new Serie('Bad Braekng', 2012, Genero::Comedia, 10, 8, 90);

echo $filme.PHP_EOL;

echo $serie.PHP_EOL;


