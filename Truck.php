<?php

    require_once 'Car.php';

    class Truck extends Car{

        private int $storage;
        private int $load = 0;

        public function __construct (string $color, int $nbSeats, string $energyType, int $storage){
            parent::__construct($color, $nbSeats, $energyType);
            $this->storage = $storage;
        }

        public function setStorage($storage):void{
            $this->storage = $storage;
        }

        public function getStorage():int{
            return($this->storage);
        }

        public function setLoad($load):void{
            $this->load = $load;
        }

        public function getLoad():int{
            return($this->load);
        }

        public function isFull():string{
            if ($this->getLoad() >= $this->getStorage()){
                return "full";
            }
            else {
                return "in filling";
            }
        }
    }