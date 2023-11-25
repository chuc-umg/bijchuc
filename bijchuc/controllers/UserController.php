<?php
include "models/User.php";

class UserController {


    public function getAll() {
        $userModel = new User();
        return $userModel->getAllUsers();
    }
    public function getId() {
        $userModel = new User();
        return $userModel->getId();
    }
    
}
