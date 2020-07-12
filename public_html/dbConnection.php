<?php

class DbConnection {
    public $connection;

    public function connectToDB() {
        if (!isset($this->connection)) {
            $servername = "172.26.0.2";
            $username = "root";
            $password = "rootpassword";
            $dbname = "messages";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $this->connection = $conn;
        }
    }

    public function closeDbConnection() {
        $this->connection->close();
    }
}
?>