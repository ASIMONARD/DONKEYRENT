<?php
require_once "Model\Vehicle.php";

class VehiclesRepository
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllVehicles(): array
    {
        $sql = "SELECT * FROM vehicle";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, Vehicle::class);
    }
}
?>