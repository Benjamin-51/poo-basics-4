<?php
    require_once 'HighWay.php';

    final class ResidentialWay extends HighWay
    {
        protected int $nbLane = 2;
        protected int $maxSpeed = 50;

        public function addVehicle(vehicle $vehicle): void
        {
            $allowedVehicles = ["Truck", "Skateboard", "Bike"];
            if (in_array(get_class($vehicle), $allowedVehicles)){
                $this->currentVehicles[] = $vehicle;
            }
        }
    }