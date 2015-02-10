<?php

class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    // create 'msqli' object
    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        // telling the connection to die if something goes wrong
        if ($connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

    public function closeConnection() {
        if(isset($this->connection)) {
            $this->connection->close();
        }
    }

    // everytime query is called, a string has to be passed
    public function query($string) {
        // calling the openConnection function
        $this->openConnection();
        
        $query = $this->connection->query($string);
        
        $this->closeConnection();
        
        return $query;
    }

}