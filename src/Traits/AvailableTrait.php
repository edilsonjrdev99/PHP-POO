<?php

namespace App\Traits;

trait AvailableTrait {
    private array $notes;

    public function calculateEvaluation(float $nota): void
    {
        $this->notes[] = $nota;
    }
}