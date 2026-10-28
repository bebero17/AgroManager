<?php

final class Vineyard extends Land 
{
    public private(set) ?Plant $grape = null;

    public function plantGrape(Plant $grape): void 
    {
        if ($this->grape !== null) {
            throw new LogicException("Виноградник уже засажен.");
        }

        $this->grape = $grape;
    }

    public function clearVineyard(): void 
    {
        $this->grape = null;
    }
}