<?php

abstract class Plant extends Biological{
    public protected(set) PlantStage $stage = PlantStage::SEED;
    public protected(set) float $waterValuem = 0.0
        set(float $value){
            if($value<0.0){
                throw new /LogicalException(
                "U are stupid"
                );
            $this->$waterValuem = $value;
            }
        }
    public bool $isReadyForHarvest{
        get => $this -> stage === PlantStage::MATURE;
    }
}