<?php

namespace App\Models;

class Movie
{
    private array $notes;

    public function __construct(
        private string $name,
        private string $type,
        private int $age,
    )
    {
        $this->notes = [];
    }

    public function calculateEvaluation(float $nota): void
    {
        $this->notes[] = $nota;
    }

    public function getValue(): float
    {
        return array_sum($this->notes) / count($this->notes);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}