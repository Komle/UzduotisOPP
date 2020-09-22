<?php 
switch (htmlspecialchars($_GET['p'] ?? 'home')){
    case 'home';
    include "view/home.php";
    break;
    default:
        include "view/error.php";
}