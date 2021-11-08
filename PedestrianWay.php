<?php
    require_once 'HighWay.php';

    final class PedestrianWay extends HighWay
    {
        protected int $nbLane = 1;
        protected int $maxSpeed = 10;
    }