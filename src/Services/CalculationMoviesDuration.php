<?php

namespace App\Services;

use App\Models\Movie;

class CalculationMoviesDuration {
    private $duration = 0;
    private $moviesNames = '';

    public function getDurationMovies(Movie ...$movies)
    {
        foreach($movies as $key => $movie) {
            if ($movie instanceof Movie) {
                $this->duration += $movie->getDuration();
                $addVirgula = $key < (count($movies) - 1) ? ', ' : '';
                $this->moviesNames .=$movie->name . $addVirgula;
            }

        }

        return 'Duração em minutos de ' . $this->moviesNames . ' - ' . $this->duration;
    }
}