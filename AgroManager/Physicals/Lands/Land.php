<?php

abstract class Land extends Physical{
    public readonly float $areaHecteres;
    public function __construct(string $id, string $name, float $areaHecteres){
        parent::__construct($id, $name);
        if($areaHecteres < 0.0){
            throw new \InvalidArgumentException("Площадь не может быть отричательной.")
        }
        $this->areaHecteres = $areaHecteres;
    }
}