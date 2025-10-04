<?php

require __DIR__ . '/vendor/autoload.php';

use App\Models\Movie;

// Novo valor na memória
$movie = new Movie();
$movie->name = 'Vingadores';
$movie->type = 'Ação';
$movie->age = 2025;
$movie->note = 5;

var_dump($movie);

// Novo valor na memória
$movie2 = new Movie();
$movie2->name = 'X men';

var_dump($movie2);

// Agora ele aponta pra mesma referência do $movie
$movie2 = $movie;
$movie->name = 'Vingadores 2';
$movie2->name = 'X men';

var_dump($movie2);
