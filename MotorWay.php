<?php
    require_once 'HighWay.php';

    final class MotorWay extends HighWay
    {
        protected int $nbLane = 4;
        protected int $maxSpeed = 130;

        public function addVehicle(vehicle $vehicle): void
        {
            $allowedVehicles = ["Truck"];
            if (in_array(get_class($vehicle), $allowedVehicles)){
                $this->currentVehicles[] = $vehicle;
            }
        }
    }