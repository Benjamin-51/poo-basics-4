<?php

    require_once 'Vehicle.php';

    class Car extends Vehicle{
            public const ALLOWED_ENERGIES = ['fuel','electric', 'hybrid',];
            protected string $energyType;
            protected int $energyLevel = 100;
            private bool $hasParkBrake = true;
            
            public function __construct (string $color, int $nbSeats, string $energyType){
                parent::__construct($color, $nbSeats);

                if (in_array($energyType, self::ALLOWED_ENERGIES)){
                    $this->setEnergy($energyType);
                }
            }

            public function start():string{
                try {
                    if($this->getParkBreak()){
                        throw new Exception("You forgot the park break.");
                    }
                    $this->currentSpeed = 1;
                    return ("The vehicle started, get ready to go.");
                }
                catch(Exception $e){
                    echo "Exception received  : ". $e->getMessage() . PHP_EOL;
                    $this->setParkBreak(false);
                }
                finally{
                    return  "My car rolls like a donut.";
                }
            }
            
            public function getEnergy():string{
                return($this->energyType);
            }

            public function setEnergy($energyType):void{
                $this->energyType = $energyType;
            }

            public function getEnergyLevel():int{
                return($this->energyLevel);
            }

            public function setEnergyLevel(int $nbSeats): void {
                $this->nbSeats = $nbSeats;
            }

            public function setParkBreak(bool $status): void {
                $this->hasParkBrake = $status;
            }

            public function getParkBreak(): bool {
                return $this->hasParkBrake;
            }
        }

?>