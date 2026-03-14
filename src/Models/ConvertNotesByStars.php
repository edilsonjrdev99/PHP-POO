<?php

namespace App\Models;

use App\Interfaces\AvailableInterface;

class ConvertNotesByStars {
    public function convert(AvailableInterface $available): float
    {
        // Transformar a média em estrelas
        
        return $available->getMediaNotes();
    }
}