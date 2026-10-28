<!-- <?php

class Tractor extends Auto implements Powered 
{
    private float $fuel = 50.0;
    private float $consumption = 0.00001;
    private float $speed = 20.0;
    private bool $engine = False;

    public function refuel(float $energyUnits): void {
        $this->fuel += $energyUnits;
        echo "Заправка: +{$energyUnits} л. Всего: {$this->fuel} л.\n";
    }

    public function getEnergyLevel(): float {
        return $this->fuel;
    }
    public function start(){
        $this->engine = True;
        echo "Двигатель запущен.";
        $this->drive();
    }
    public function stop(){
        $this->engine = FALSE;
        echo "Двигатель заглушен.";
    }
    private function drive(): void {
        while $engine == True{
            $this->fuel -= $this->consumption;
            if (fuel <= 0){
                echo "Закончилось топливо.";
                $this->stop();
                break;
            }
            echo "Трактор едет {$this->speed} км/ч. Расход: {$this->consumption} л. Осталось: {$this->fuel} л.\n";
        }
        echo "Двигатель не запущен!"
    }


    public function diagnostic(): void {
        echo "Диагностика: трактор исправен, скорость {$this->speed} км/ч.\n";
    }
} -->