<?php

if (isset($_POST['submit'])) 

    
    $name = $_POST['name'];
    $country = $_POST['country'];
    $nic = $_POST['nic'];
    $contactNum = $_POST['contactNum'];
    $email = $_POST['email'];

    $servername = "localhost";
    $username = "root";

  
    if (!conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br>";

    
    $sql = "CREATE DATABASE IF NOT EXISTS TravelWebsite";
    if (mysqli_query(conn, sql)) 
        echo "Database created successfully.<br>";
     else 
     {
        echo "Error creating database: " . mysqli_error(conn) . "<br>";
    }

  
    $sql = "USE TravelWebsite";
    if (mysqli_query($conn, $sql)) 
        echo "Database changed.<br>";
     else 
     {
        echo "Error changing database: " . mysqli_error(conn) . "<br>";
    }

   
$sql = "CREATE TABLE IF NOT EXISTS tourGuide(
                Name VARCHAR(100),
                Country VARCHAR(50),
                NIC VARCHAR(20),
                ContactNo VARCHAR(10),
                Email VARCHAR(50),
                VisitingAreas VARCHAR(255),
                NoOfDays VARCHAR(50)
            )";
    
    if (mysqli_query(conn, sql)) 
        echo "Table created successfully.<br>";
     else 
    {
        echo "Error creating table: " . mysqli_error(conn) . "<br>";
    }

$sql = "INSERT INTO tourGuide (Name, Country, NIC, ContactNo, Email, VisitingAreas, NoOfDays)
            VALUES ('name', 'country', 'nic', 'contactNum', 'email', '', '')";

    if (mysqli_query(conn,sql)) {
        echo "New record created.<br>";
    } else {
        echo "Error: " . sql . "<br>" . mysqli_error(conn) . "<br>";
    }

    mysqli_close(conn);

?>