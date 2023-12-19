<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "../functions.inc.php";

$email = test_input($_POST['email']) ?? "Nemám email";
$password = test_input($_POST['password'])?? "Nemám heslo";

if (userExists($email, $password)) {
    header('location: ../views/dashboard.php');
} else {
    header('location: ../views/index.php?error=wrong_credentials');
}
