<?php

class PerennialPlant extends Plant
{
    public protected(set) bool $isHibernating = false;

    public function enterHibernation(): void
    {
        if ($this->stage->isGrowing()) {
            throw new LogicException("Нельзя отправить в спячку растущее растение!");
        }
        
        $this->isHibernating = true;
    }
}