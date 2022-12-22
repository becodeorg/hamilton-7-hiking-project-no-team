<?php
declare(strict_types=1);

class HikeModel extends Database 
{
    public function create(string $name,float $distance,$duration, float $elevation_gain,string $description,int $updateNeeded = 0): void
    {

        if (!$this->query(
            "INSERT INTO Hikes (name, creationDate, distance, duration, elevation_gain, description, updateNeeded) VALUES (?, ?, ?, ?, ?, ?, ?)",
            [
                $name,
                date("Y/m/d"),
                $distance,
                $duration,
                $elevation_gain,
                $description,
                $updateNeeded
            ]
        )) {
            throw new Exception('Error during Insert into Hikes Table.');
        }
    }

    public function find(string $id):array|false
    {
        if (!$hike = $this->query(
            "SELECT * FROM Hikes WHERE ID = ?",
            [
                $id,
            ]
        )->fetch()) {
            throw new Exception('Entry not found.');
        }

        return $hike;
    }

    public function findAllindex(): array|false
    {
        return $this->query(
            "SELECT ID, name, creationDate ,distance FROM Hikes",
        )->fetchAll();

    
    }

    

}