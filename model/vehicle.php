<?php

class Vehicle {
        public string $registration; 
        public string $category;
        public string $type;
        public string $brand;
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
        public function getCategory(): string {
            return $this->registration;
        }
        public function setCategory(string $category) {
            $this->category = $category;
            return $this;
        }
        public function getType(): string {
            return $this->type;
        }
        public function setType(string $type) {
            $this->type = $type;
            return $this;
        }
        public function getBrand(): string {
            return $this->brand;
        }
        public function setBrand(string $brand) {
            $this->brand = $brand;
            return $this;
        }
        public function getModel(): string {
            return $this->model;
        }
        public function setModel(string $model) {
            $this->model = $model;
            return $this;
        }
        public function getKm(): string {
            return $this->km;
        }
        public function setKm(string $km) {
            $this->km = $km;
            return $this;
        }
        public function getDoors(): string {
            return $this->doors;
        }
        public function setDoors(string $doors) {
            $this->doors = $doors;
            return $this;
        }
        public function setSeats(): string {
            return $this->seats;
        }
        public function getSeats(string $seats) {
            $this->seats = $seats  ;
            return $this;
        }
        public function getGearbox(): string {
            return $this->gearbox;
        }
        public function setGearbox(string $gearbox) {
            $this->gearbox = $gearbox;
            return $this;
        }
        public function getEnergy(): string {
            return $this->registration;
        }
        public function setEnergy(string $registration) {
            $this->registration = $registration;
            return $this;
        }
        public function getAirCond(): string {
            return $this->airCond;
        }
        public function setAirCond(string $airCond) {
            $this->airCond = $airCond;
            return $this;
        }
        public function getPrice(): string {
            return $this->price;
        }
        public function setPrice(string $price) {
            $this->price = $price;
            return $this;
        }
        public function getPhoto(): string {
            return $this->photo;
        }
                
}

?>