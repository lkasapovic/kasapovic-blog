<?php
    require_once(__DIR__ . "/../model/database.php");
    
    //'new' allows to build objects
    $connection = new mysqli($host, $username, $password);
    
    // telling the connection to die if something went wrong
    if($connection->connect_error) {
       die("Error: " . $connectioon->connect_error); 
    }
    
    $exists = $connection->select_db($database);
    
    // action statement has to be uppercase with query
    if(!$exists) {
        $query = $connection->query("CREATE DATABASE $database");
        
        if($query){
            echo "Successfully created database" . $database;
        }
        
    }
    else{
        echo "Database already exists.";
    }
    
    $connection->close();
    