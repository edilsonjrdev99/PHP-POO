<?php

namespace App\Models;

use App\Interfaces\AvailableInterface;
use App\Models\Type;
use App\Models\Titles;
use App\Traits\AvailableTrait;

class Movie extends Titles implements AvailableInterface
{
    use AvailableTrait;

    private static int $view = 0;
    
    // Só funciona a partir do PHP 8.3 - tipagem int do exemplo
    private const int MEDIA = 4;

    private array $episodes;

    public function __construct( 
        public readonly string $name,
        private readonly Type $type,
        private readonly int $age,
    )
    {
        $this->notes = [];
    }

    public function getValue(): float
    {
        return array_sum($this->notes) / count($this->notes);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getQuality(): string
    {
        $value = $this->getValue();

        return $value <= self::MEDIA ? 'Não é recomendado' : 'É recomendado';
    }

    public function addView(): void
    {
        self::$view++;
    }

    public function getViews(): int
    {
        return self::$view;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function addDurations(int $duration): void
    {
        $this->duration = $duration;
    }

    public function addEpisode(Episode $episode): void
    {
        $this->episodes[] = $episode;
    }

    public function getEpisodes(): array
    {
        return $this->episodes;
    }

    public function getMediaNotes(): float
    {
        return array_sum($this->notes) / $this->getQuantityNotes();
    }

    public function getQuantityNotes(): int
    {
        return count($this->notes);
    }
}