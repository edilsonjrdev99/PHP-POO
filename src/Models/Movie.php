<?php

namespace App\Models;

class Movie
{
    public string $name;

    public string $type;

    public int $age;

    private array $notes = [];

    public function calculateEvaluation(float $nota): void
    {
        $this->notes[] = $nota;
    }

    public function getValue(): float
    {
        return array_sum($this->notes) / count($this->notes);
    }
}