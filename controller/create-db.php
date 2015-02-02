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
    // every post will need an 'id', a 'title', and a 'post text'
    $query = $connection-> query("CREATE TABLE posts ("
            // null means it cant be empty 
           // AUTO_INCREMENT handles the id        
            . "id int(11) NOT NULL AUTO_INCREMENT,"
          // '255' is the minimum # of characters in a title       
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
          // 'PRIMARY KEY' hooks 2 tables together
            . "PRIMARY KEY (id))");
    
    if($query) {
        echo "Succesfully create table: posts";
    }
    else {
        echo "<p>$connection->error</p>";
    }
    
    $connection->close();
    