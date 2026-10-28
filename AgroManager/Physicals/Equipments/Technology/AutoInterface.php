<?php

abstract class Auto2 {

    protected string $name;
    protected float $fuel;
    protected float $consumption;
    protected float $speed;
    protected bool $engine;
    protected float $energyUnits;

    public function __construct($nameValue, $fuelValue, $consumptionValue, $speedValue, $engineValue, $energyUnitsValue) {
        $this->name = $nameValue;
        $this->fuel = $fuelValue;
        $this->consumption = $consumptionValue;
        $this->speed = $speedValue;
        $this->engine = $engineValue;
        $this->energyUnits = $energyUnitsValue;
    }
    
    public function refuel(float $energyUnits): void {
        $this->fuel += $energyUnits;
        echo "Заправка: +{$energyUnits} л. Всего: {$this->fuel} л.\n";
    }

    public function getEnergyLevel(): float {
        return $this->fuel;
    }

    public function start(){
        $this->engine = true;
        echo "Двигатель запущен.\n";
        $this->drive();
    }

    public function stop(){
        $this->engine = false;
        echo "Двигатель заглушен.\n";
    }

    private function drive(): void {
        while ($this->engine == true) {
            $this->fuel -= $this->consumption;
            if ($this->fuel <= 0){
                echo "Закончилось топливо.\n";
                $this->stop();
                break;
            }
            echo "{$this->name} едет {$this->speed} км/ч. Расход: {$this->consumption} л. Осталось: {$this->fuel} л.\n";

            break; 
        }
    }

    public function diagnostic(): void {
        echo "Диагностика: {$this->name} исправен, максимальная скорость {$this->speed} км/ч.\n";
    }
}
