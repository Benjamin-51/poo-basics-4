<?php

    class Vehicle{

        protected int $nbWheels = 4;
        protected int $currentSpeed = 0;
        protected string $color;
        protected int $nbSeats;
        
        public function __construct (string $color, int $nbSeats){
            $this->color = $color;
            $this->nbSeats = $nbSeats;
        }
        
        public function start():string{
            if($this->currentSpeed > 0){
                return ("The vehicle is already running");
            }
            else{
                $this->currentSpeed = 1;
                return ("The vehicle started, get ready to go.");
            }
        }

        public function forward():string{
            if($this->currentSpeed > 0){
                $this->currentSpeed += 10;
                return ("Forward!");
            }
            else{
                return ("You need to start the vehicle first.");
            }
        }

        public function brake():string{
            if($this->currentSpeed > 0){
                $this->currentSpeed -= 15;
                if($this->currentSpeed <= 0){
                    $this->currentSpeed = 0;
                    return ("The car stopped.");
                }
                else{
                    return ("The car is slowing down.");
                }
            }
            else{
                return ("You pushed on the brakes, but nothing happened.");
            }
        }

        public function getSpeed():int{
            return($this->currentSpeed);
        }

        public function setCurrentSpeed(int $currentSpeed): void    {
            if($currentSpeed >= 0){
                $this->currentSpeed = $currentSpeed;
            }
        }

        public function getColor():string{
            return($this->color);
        }

        public function setColor(string $color): void{
            $this->color = $color;
        }

        public function getNbSeats():int{
            return($this->nbSeats);
        }

        public function setNbSeats(int $nbSeats): void    {
            $this->nbSeats = $nbSeats;
        }

        public function getNbWheels():int{
            return($this->nbWheels);
        }

        public function setNbWheels(int $nbWheels): void    {
            $this->nbWheels = $nbWheels;
        }

        /* public function getEnergy():string{
            return($this->energy);
        }

        public function getEnergyLevel():int{
            return($this->energyLevel);
        } */ 
    }

