<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
