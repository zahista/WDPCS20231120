<?php 
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "Ahoj světe";

$name = "Tomáš";
echo $name;


$_SESSION['name'] = $name;

echo $_SESSION['name'];

?>


<a href="/PCS2023/test.php">Přejít na test</a>