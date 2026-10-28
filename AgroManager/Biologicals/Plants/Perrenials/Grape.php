<?php

final class Grape extends PerennialPlant
{
    public protected(set) bool $bearsFruit = true;
    public protected(set) string $pestType = "Филлоксера виноградная";

    public function checkHarvestCondition(): void
    {
        if ($this->isHibernating && $this->bearsFruit) {
            throw new LogicException("Виноград спит зимой и не может плодоносить!");
        }
    }
}