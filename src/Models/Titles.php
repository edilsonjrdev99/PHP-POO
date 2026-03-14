<?php

namespace App\Models;

abstract class Titles {
    protected int $duration = 0;

    abstract public function addDurations(int $duration): void;
}