<?php

require_once 'AutoInterface.php';

$Traktor = ["Трактор", 50, 2.5, 20, false, 0.5];
$Lamborgini = ["Lamborgini", 10, 0.0001, 100, false, 0.5];
$LadaPriora = ["Lada Priora", 10, 0.01, 15, false, 0.5];

class Auto extends Auto2{
    public string $select = "None";
    public function __construct(
        $nameValue = null, 
        $fuelValue = null, 
        $consumptionValue = null, 
        $speedValue = null, 
        $engineValue = null, 
        $energyUnitsValue = null) {
        if ($nameValue !== null) {
            parent::__construct($nameValue, $fuelValue, $consumptionValue, $speedValue, $engineValue, $energyUnitsValue);
        }
    }

    public function AutoSelect(): void 
    {
        global $Traktor;
        global $LadaPriora;
        global $Lamborgini;
        while True{
            $this->select = trim(readline("Введите авто (Трактор, Ламборгини или Лада): "));
            if ($this->select === "Трактор") {
                echo "Выбран трактор. Заводим его...\n";
                $auto = new Auto($Traktor[0], $Traktor[1], $Traktor[2], $Traktor[3], $Traktor[4], $Traktor[5]);
                $auto->diagnostic();
                $auto->start();
                exit;
            }if ($this->select === "Ламборгини") {
                echo "Выбрана ламборгини. Заводим его...\n";
                $auto = new Auto($Lamborgini[0], $Lamborgini[1], $Lamborgini[2], $Lamborgini[3], $Lamborgini[4], $Lamborgini[5]);
                $auto->diagnostic();
                $auto->start();
                exit;
            }if($this->select === "Лада") {
                echo "Выбран трактор2. Заводим его...\n";
                $auto = new Auto($LadaPriora[0], $LadaPriora[1], $LadaPriora[2], $LadaPriora[3], $LadaPriora[4], $LadaPriora[5]);
                $auto->diagnostic();
                $auto->start();
                exit;
            }else {
                echo "Неизвестное авто.\n";
            }
        }
    }
}
$launcher = new Auto();
$launcher->AutoSelect();
