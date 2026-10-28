<?php

enum PlantStage: string
{
    case SEED = "seed";
    case SPROUT = "sprout";
    case VEGETATIVE = "vegetative";
    case FLOWERING = "flowering";
    case MATURE = "mature";
    case HARVESTED = "harvested";
    case DIED = "died";

    public function isGrowing(): bool
    {
        return match($this) {
            self::SPROUT, self::VEGETATIVE, self::FLOWERING => true,
            default => false,
        };
    }
}
