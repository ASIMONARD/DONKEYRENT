<?php

class Reservation
{
    public string $id;
    public string $dateResa;
    public string $dateDeparture;
    public string $departureTime;
    public string $dateArrival;
    public string $arrivalTime;
    public int $created_at;
    public int $updated_at;

    public function getId(): int
    {
        return $this->id;
    }

    public function getdateResa(int $dateResa): int
    {
       return $this->dateResa;

    }

    public function setdateResa(int $dateResa): self
    {
        $this->dateResa = $dateResa;

        return $this;
    }

    public function getdateDeparture(int $dateDeparture): int
    {
        return $this->dateDeparture;

    }

    public function setDateDeparture(int $dateDeparture): self
    {
        $this->dateDeparture = $dateDeparture;

        return $this;


    }

    public function getdateArrival(): int
    {
        return $this->dateArrival;
    }
    
    public function setdateArrival($dateArrival)
    {
         $this->dateArrival = $dateArrival;
    }

    public function getarrivalTime(int $arrivalTime): int
    {
        return $this->arrivalTime;

    }

    public function setarrivalTime(int $arrivalTime): self
    {
        $this->arrivalTime = $arrivalTime;

        return $this;
    }


    public function getcreated_at(int $created_at): int
    {
        return $this->created_at;

    }

    public function setcreated_at(int $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getupdated_at(int $updated_at): int
    {
        return $this->updated_at;

    }

    public function setupdated_at(int $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }






}