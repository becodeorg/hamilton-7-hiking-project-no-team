<?php

class HikeController{
    private HikeModel $HikeModel;
    
    public function showIndex():void{
        $this->HikeModel = new HikeModel();
        $hikes = $this->HikeModel->findAllindex();

        include 'Views/Includes/Header.view.php';
        include 'Views/Includes/Navbar.view.php';
        include 'Views/index.view.php';
        include 'Views/Includes/Footer.view.php';
    }

    public function showHike():void{
        $slug = $_GET["id"];
        $this->HikeModel = new HikeModel();
        $hike = $this->HikeModel->find($slug);


        include 'Views/Includes/Header.view.php';
        include 'Views/Includes/Navbar.view.php';
        include 'Views/SingleHike.view.php';
        include 'Views/Includes/Footer.view.php';
    }

    public function showAddPage(){
        if (!empty($_SESSION['user']['loggedIn'])) {
            include 'Views/Includes/Header.view.php';
            include 'Views/Includes/Navbar.view.php';
            include 'Views/AddHike.view.php';
            include 'Views/Includes/Footer.view.php';
        }
        else{
            header("Location: /login", true, 301);
        }
    
    }

    public function addHike($input){
        
            var_dump($_SESSION);
            $this->HikeModel = new HikeModel();
            $name = htmlspecialchars($input["name"]);
            $distance = htmlspecialchars($input["distance"]);
            $duration = htmlspecialchars($input["duration"]);
            $elevation_gain = htmlspecialchars($input["elevation"]);
            $description = htmlspecialchars($input["description"]);
            $this->HikeModel->create($name, $distance, $duration, $elevation_gain, $description);
            $newid = $this->HikeModel->getLastInsertId();
            header("Location: /hike?id=$newid", true, 301);
        

    }
}