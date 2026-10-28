<?php

namespace Animals;

class Animal extends Entity{
    public private(set) float $weight{
        set(float $value){
            if($value<0.0){
                throw new \InvalidArgumentException('Значение должно быть отлично от нуля.');
            }
            $this->$weight = $value;
        }
    }
    public private(set) float $age{
        set(float $value2){
            if($value2<0.0){
                throw new \InvalidArgumentException('Значение должно быть больше нуля.');
            }
            $this->$age = $value2;
        }
    }
    public private(set) float $rost{
        set(float $value3){
            if($value3<=0.5){
                throw new \InvalidArgumentException('Значение должно быть больше или равен 0.5 метра.');
            }
            $this->$rost = $value3;
        }
    }
    public function __counstruct(float $weight, float $age, float $rost){
        $this->$weight = $weight;
        $this->$age = $age;
        $this->$rost = $rost;
    }
}