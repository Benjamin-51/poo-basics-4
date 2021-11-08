<?php
    require_once 'HighWay.php';

    final class PedestrianWay extends HighWay
    {
        protected int $nbLane = 1;
        protected int $maxSpeed = 10;

        public function addVehicle(vehicle $vehicle): void
        {
            $allowedVehicles = ["Bike", "Skateboard"];
            if (in_array(get_class($vehicle), $allowedVehicles)){
                $this->currentVehicles[] = $vehicle;
            }
        }
    }