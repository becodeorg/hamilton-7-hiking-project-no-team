<?php
class HikeModel extends Database{
    public function create(string $name,$date = date("Y/m/d"),float $distance,$duration, float $elevation_gain,string $description,int $updateNeeded = 0): void
    {

//         `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
//   `creationDate` date DEFAULT NULL,
//   `distance` float DEFAULT NULL,
//   `duration` time DEFAULT NULL,
//   `elevation_gain` float DEFAULT NULL,
//   `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
//   `updateNeeded` tinyint(1) DEFAULT NULL
        if (!$this->query(
            "INSERT INTO Hikes (name, creationDate, distance, duration, elevation_gain, description, updateNeeded) VALUES (?, ?, ?, ?, ?, ?, ?)",
            [
                $name,
                $date,
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

    public function find(string $name): array
    {
        if (!$hike = $this->query(
            "SELECT * FROM Hikes WHERE name = ?",
            [
                $name,
            ]
        )->fetch()) {
            throw new Exception('Entry not found.');
        }

        return $hike;
    }
}