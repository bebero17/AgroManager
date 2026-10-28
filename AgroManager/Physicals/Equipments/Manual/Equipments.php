<?php

namespace AgroManager\Physical\Equipment;
use AgroManager\Physical\Physicals;

abstract class Equipment extends Physicals{
    private int $serviceLife{
        set(int $value){
            if ($value<0){
                throw new \InvalidArgumentException("
                Инструмент не может быть добавлен.")
            }
            $this->$serviceLife = $value
        }
    }
    public private(set) bool $isActive;
    public private(set) float $wearCondition;
    private float $wearOfShift;
    public function __construct($serviceLife, $wearOfShift){
        $this->serviceLife = $serviceLife;
        $this->wearCondition = 0.0;
        $this->wearOfShift = $wearOfShift;
    }

    public function activate(){
        $this->isActive = true;
    }


    private function checkStatus(){
        if($this->wearCondition > 0.9*$this->serviceLife){
            $this->isActive = false;
        }
        if($this->wearCondition > 0.75*$this->serviceLife){
            echo "Срок исп подходит к концу."
        }
        echo "Устройство готов к эксплотации."
    }


    public function addWearCondition(){
        $this->wearCondition += 5.0;
    }
    private function autoAddWearCondition(){
        $this->wearCondition += wear;
    }
    public function calculateWearCondition(){
        echo "\nОсуществляется анализ пригодности инструмента к эксплотации\n"
        $this->autoAddWearCondition();
        echo "Износ составляет {$this->wearCondition}";
    }
    abstract public function diagnostic(): void;





}
