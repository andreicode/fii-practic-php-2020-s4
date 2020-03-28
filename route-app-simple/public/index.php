<?php 


$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

//Aici puteti include clase
//Sau fisiere de configurare
//Si conexiuni la DB
require __DIR__ . '/../config.php';

//EXTRA, incercati sa incarcati paginile cu un singur require si cu o variabila

switch($page) {

    case 'home':
        require __DIR__ . '/../views/home.php';
    break;
    case 'about':
        require __DIR__ . '/../views/about.php';
    break;
    default:
        require __DIR__ . '/../views/404.php';
}