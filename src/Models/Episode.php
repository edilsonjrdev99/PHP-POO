<?php

namespace App\Models;

class Episode {
    public function __construct(
        public readonly string $name,
        public readonly string $description,
        public readonly int $number
    ) {}

}