<?php


class AnnualPlant extends Plant
{
    public protected(set) int $daysToLive = 90;

    public function passDay(): void
    {
        if ($this->stage->isGrowing()) {
            $this->daysToLive--;
        }

        if ($this->daysToLive <= 0) {
            $this->stage = PlantStage::DIED;
        }
    }
}