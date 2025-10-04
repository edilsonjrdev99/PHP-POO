<?php

require __DIR__ . '/vendor/autoload.php';

use App\Models\Movie;

// Novo valor na memória
$movie = new Movie('Vingadores', 'Ação', 2025);

// Avaliações
$movie->calculateEvaluation(5);
$movie->calculateEvaluation(4);
$movie->calculateEvaluation(3);

echo '--- Instância inicial de Movie ---' . PHP_EOL;
var_dump($movie);

// Novo valor na memória
$movie2 = new Movie('Thor', 'Ação', 2024);

echo '--- Segunda instância de Movie ---' . PHP_EOL;
var_dump($movie2);

// Agora ele aponta pra mesma referência do $movie
$movie2 = $movie;

echo '--- Movie 2 recebeu o valor de Movie ---' . PHP_EOL;
var_dump($movie2);
echo 'Nome do filme: ' . $movie2->getName() . PHP_EOL;
echo 'A média do filme é: ' . $movie->getValue() . PHP_EOL;
