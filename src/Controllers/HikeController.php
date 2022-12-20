<?php

class HikeController{
    private HikeModel $HikeModel;
    
    public function showIndex(){
        $this->HikeModel = new HikeModel();
        $hikes = $this->HikeModel->findAllindex();

        include 'Views/Includes/Header.view.php';
        include 'Views/index.view.php';
        include 'Views/Includes/Footer.view.php';
    }
}