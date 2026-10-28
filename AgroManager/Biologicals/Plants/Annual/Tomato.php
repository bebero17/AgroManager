<?php

final class Tomato extends AnnualPlant
{
    public protected(set) bool $bearsFruit = true;
    public protected(set) string $pestType = "Колорадский жук";

    public function sprayAntiPest(): void
    {
        if ($this->stage === PlantStage::DIED) {
            throw new LogicException("Мертвому помидору обработка не поможет.");
        }
        $this->pestType = "Нет вредителей";
    }
}