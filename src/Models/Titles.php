<?php

namespace App\Models;

class Titles {
    protected int $duration = 0;

    public function addDurations(int $duration): void
    {
        $this->duration = $duration;
    }
}