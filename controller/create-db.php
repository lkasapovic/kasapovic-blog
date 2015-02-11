<?php

require_once(__DIR__ . "/../model/config.php");

// every post will need an 'id', a 'title', and a 'post text'
$query = $connection->query("CREATE TABLE posts ("
        // null means it cant be empty 
        // AUTO_INCREMENT handles the id        
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        // '255' is the minimum # of characters in a title       
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        // 'PRIMARY KEY' hooks 2 tables together
        . "PRIMARY KEY (id))");

if ($query) {
    echo "<p>Succesfully create table: posts</p>";
} else {
    echo "<p>$connection->error</p>";
}

