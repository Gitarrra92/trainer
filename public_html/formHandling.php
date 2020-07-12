<?php

   include 'DbConnection.php';

    $dataName = $_POST["name"];
    $dataSurname = $_POST["surname"];
    $dataPhone = $_POST["phone"];
    $dataEmail = $_POST["email"];
    $dataMessage = $_POST["message"];

    $dbConnection = new DbConnection;
    
     
    $query = "INSERT INTO messages (name, surname, phone_number, email, message) 
              VALUES ('{$dataName}', '{$dataSurname}', '{$dataPhone}', '{$dataEmail}', '{$dataMessage}')"; 

    insertToDatabase($dbConnection, $query);

    closeDbConnection($dbConnection);


     header("location:index.php?operation=success");  /* Redirect to index page */
     exit;


    function insertToDatabase($dbConnection, $sql) {
      $dbConnection->connectToDB();
      $dbConnection->connection->query($sql);
    }


    function closeDbConnection($dbConnection) {
        $dbConnection->closeDbConnection;
    }
?>