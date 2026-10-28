<?php

final class Sunflower extends AnnualPlant
{
    public protected(set) bool $bearsFruit = false; 
    public protected(set) string $pestType = "Подсолнечниковая моль";

    public function scarierPests(): void
    {
        if ($this->stage->isGrowing()) {
            $this->waterValuem -= 1.0;
        }
    }
}