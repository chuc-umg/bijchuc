<?php
include "controllers/UserController.php";

$userController = new UserController();

if (isset($_GET['id'])) {
    $proyecto = $userController->getid();
    include "views/api.php";
} else {
    $proyecto = $userController->getAll();
    //include "views/api.php";
}