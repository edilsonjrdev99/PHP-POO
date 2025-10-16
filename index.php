<?php

require __DIR__ . '/vendor/autoload.php';

use App\Models\Movie;
use App\Models\Type;
use App\Services\CalculationMoviesDuration;

// Novo valor na memória
$movie = new Movie('Vingadores', Type::Acao, 2025);

// Avaliações
$movie->calculateEvaluation(5);
$movie->calculateEvaluation(4);
$movie->calculateEvaluation(3);
$movie->calculateEvaluation(5);

echo '--- Instância inicial de Movie ---' . PHP_EOL;
var_dump($movie);

// Novo valor na memória
$movie2 = new Movie('Thor', Type::Acao, 2024);

echo '--- Segunda instância de Movie ---' . PHP_EOL;
var_dump($movie2);

// Agora ele aponta pra mesma referência do $movie
$movie2 = $movie;

echo '--- Movie 2 recebeu o valor de Movie ---' . PHP_EOL;
var_dump($movie2);
echo 'Nome do filme: ' . $movie2->name . PHP_EOL;
echo 'A média do filme é: ' . $movie->getValue() . PHP_EOL;
echo 'Qual é a recomendação: ' . $movie2->getQuality() . PHP_EOL;

echo '--- Utilizando atributos estáticos da classe ---' . PHP_EOL;

$movie3 = new Movie('Vingadores 2', TYPE::Acao, 2025);

$movie->addView();
$movie2->addView();
$movie3->addView();

$movie->addDurations(18);
$movie3->addDurations(10);

echo "Quantas vezes os filmes dos $movie->name foi assistido? " . $movie->getViews() . PHP_EOL;

$durationMovies = new CalculationMoviesDuration();

echo $durationMovies->getDurationMovies($movie, $movie3) . PHP_EOL;

