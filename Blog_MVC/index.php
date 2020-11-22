
<?php


require "utilities/autoload.php";
//require "utilities/verify.php";



$controller = $_GET['controller']; 
$controller = ucfirst($controller); 

$controller = $controller."Controller"; 

$instantiation_controller = new $controller(); 

$action = $_GET['action']; 


$instantiation_controller->$action();  

