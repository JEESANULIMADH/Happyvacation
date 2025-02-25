<?php

 (isset($_POST['submit'])) 
{
$name = $_POST['name'];
$country = $_POST['country'];
$nic = $_POST['nic'];
$contactNum = $_POST['contactNum'];
$email = $_POST['email'];
$visitingAreas = $_POST['visitingAreas'];
$NoOfDays = $_POST['NoOfDays'];

$servername = "localhost";
$username = "root";

            $conn = mysqli_connect($servername, $username);

            if(!$conn){
                die("Connection failed : ".mysqli_connect_error());
            }
            echo "Connected successfully";

            $sql = "CREATE DATABASE IF NOT EXISTS TravelWebsite";
            if(mysqli_query ($conn, $sql)){
                echo "database created successfully.";
            }
            else{
                echo "Error creating database: ".mysqli_error($conn);
            }

            $sql = "USE TravelWebsite";
            if(mysqli_query ($conn, $sql)){
                echo "database changed.";
            }
            else{
                echo "Error creating database: ".mysqli_error($conn);
            }


            $sql = "CREATE TABLE IF NOT EXISTS tourGuide(
                    Name VARCHAR(100),
                    Country VARCHAR (50),
                    NIC VARCHAR(20),
                    ContactNO VARCHAR(10),
                    email VARCHAR(50),
                    visitingAreas VARCHAR(255),
                    NoOfDays VARCHAR(50))";

                    if (mysqli_query ($conn, $sql)){
                        echo "Table created successfully";
                    }
                    else{
                        echo "Error creating table :".mysqli_error($conn);
                    }

$sql = "INSERT INTO tourGuide(Name, Country, NIC, ContactNo, email, visitingAreas, NoOfDays)
        VALUES ('$name', '$country', '$nic', '$contactNum', '$email', '$visitingAreas', $NoOfDays)";

        if(mysqli_query($conn, $sql)){
            echo "New record created.";
        }else{
            echo "Error". $sql.mysqli_error($conn);
        }
};
?>
