<?php

require_once 'Repositories\VehiclesRepository.php';

class VehiclesController
{
    public $vehiclesRepository;
    
    public function __construct($pdo)
    {
        $this->vehiclesRepository = new VehiclesRepository($pdo);
    }

    public function show() 
    {
        $vehicles = $this->vehiclesRepository->getAllVehicles();

        include 'View\vehicles\listeVehicles.php';
    }

    public function booking()
    {
        $vehicles = $this->vehiclesRepository->getAllVehicles();
        include 'view/vehicles/booking.php';
        
    }
}



?>