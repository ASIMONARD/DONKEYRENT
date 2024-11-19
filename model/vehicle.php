<?php

class Vehicle {
        public string $registration;
        public string $category;
        public string $type;
        public string $band;
        public string $model;
        public int $modelYear;
        public int $km;
        public int $doors;
        public int $seats;
        public string $gearbox;
        public string $energy;
        public string $airCond;
        public int $price;
        public string $photo;

        public function getRegistration(): string {
            return $this->registration;
        }
        public function setRegistration(string $registration) {
            $this->registration = $registration;
            return $this;
        }
}

?>