<?php

class Vehicle {
        public int $id_vehicle;
        public string $registration; 
        public string $category;
        public string $type;
        public string $brand;
        public string $model;
        public int $modelYear;
        public int $km;
        public int $doors;
        public int $seats;
        public string $gearBox;
        public string $energy;
        public string $airCond;
        public int $price;
        public string $photo;
        public string $created_at;
        public string $updated_at;


        public function getRegistration(): string {
            return $this->registration;
        }

        public function setRegistration(string $registration) {
            $this->registration = $registration;
        }

        public function getCategory(): string {
            return $this->registration;
        }

        public function setCategory(string $category) {
            $this->category = $category;
        }

        public function getType(): string {
            return $this->type;
        }

        public function setType(string $type) {
            $this->type = $type;
        }

        public function getBrand(): string {
            return $this->brand;
        }

        public function setBrand(string $brand) {
            $this->brand = $brand;
        }

        public function getModel(): string {
            return $this->model;
        }

        public function setModel(string $model) {
            $this->model = $model;
        }

        public function getKm(): int {
            return $this->km;
        }

        public function setKm(int $km) {
            $this->km = $km;
        }

        public function getDoors(): int {
            return $this->doors;
        }

        public function setDoors(int $doors) {
            $this->doors = $doors;
        }

        public function getSeats(): int {
            return $this->seats;
        }

        public function setSeats(int $seats) {
            $this->seats = $seats;
        }

        public function getGearbox(): string {
            return $this->gearBox;
        }

        public function setGearbox(string $gearBox) {
            $this->gearBox = $gearBox;
        }

        public function getEnergy(): string {
            return $this->registration;
        }

        public function setEnergy(string $energy) {
            $this->energy = $energy;
        }

        public function getAirCond(): string {
            return $this->airCond;
        }

        public function setAirCond(string $airCond) {
            $this->airCond = $airCond;
        }

        public function getPrice(): string {
            return $this->price;
        }

        public function setPrice(string $price) {
            $this->price = $price;
        }

        public function getPhoto(): string {
            return $this->photo;
        }
                
        public function getId_vehicle()
        {
            return $this->id_vehicle;
        }

        public function setId_vehicle($id_vehicle)
        {
            $this->id_vehicle = $id_vehicle;
        }

        public function getCreated_at()
        {
            return $this->created_at;
        }

        public function setCreated_at($created_at)
        {
            $this->created_at = $created_at;
        }

        public function getUpdated_at()
        {
            return $this->updated_at;
        }

        public function setUpdated_at($updated_at)
        {
            $this->updated_at = $updated_at;
        }
}

?>