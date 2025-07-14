<?php

define("userName", "Alex");
define("password", "1234");

$inputUserName = readline("Enter your user name : ");
$inputPassword = readline("Enter your password : ");

if ($inputUserName === userName && $inputPassword === password) {
    echo "Login successful.";
} elseif ($inputUserName === userName && empty($inputPassword)) {
    echo "Please enter password here.";
} elseif (empty($inputUserName) && empty($inputPassword)) {
    echo "Please input username OR password here !";
} else {
    echo "Invalid UserName Or Password.";
}
