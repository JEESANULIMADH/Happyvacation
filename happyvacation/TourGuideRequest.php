<!DOCTYPE html>
<html>
    <head>
        <title>Tour guide request form</title>
        <link rel="stylesheet" href="Styles.css">
        <script src="javascript.js"></script>
    </head>
    <body>
        <header class="box1">
            <img src="logo3.jpg" class="imgHead" height="250px" width="350px" >
            <p class="TitleHead"><b>Happy Vaccation</b><p>
        </header>

        <ul class="navigation">
            <li class="nav"><a class="active" href="HomePage.html">Home </a></li>
            <li class="nav"><a href="HeritageAndReligiousPlaces.html">Heritage and Religious Places</a></li>
            <li class="nav"><a href="WildAndNature.html">Wild and Nature</a></li>
            <li class="nav"><a href="BeachSide.html">Beach Side</a></li>
            <li class="nav"><a href="CampingAndAdventure.html">Camping and Adventure</a></li>
            <li class="nav"><a href="AboutUs.html">About Us</a></li>
        </ul>
        
        <?php
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

            
        ?>
        <div class="wrapper">
            <h1 style="text-align: center;">Tour Guide Request Form</h1>
            <form method = "POST" action="insert_dataTOurGuide.php">
                <div class="input-box">
                <label for="name">Name : </label>
                <input type="text" id="name" placeholder="Enter your name" required>
                <span id="namError" class="error-message"></span>
                </div>

                <div class="input-box">
                <label for="country">Country : </label>
                <input type="text" id="country" placeholder="Enter your country" required>
                </div>

                <div class="input-box">
                <label for="nic">NIC/Passport number : </label>
                <input type="text" id="nic" placeholder="Enter your NIC/Passport number" required>
                </div>

                <div class="input-box">
                <label for="contactNum">contact Number : </label>
                <input type="text" id="contactNum" placeholder="Enter your contact number" required>
                </div>

                <div class="input-box">
                <label for="email">Email : </label>
                <input type="text" id="email" placeholder="Enter your email" required>
                </div>

                <p>What are the areas are you hoping to visit?</p>

                <div class="CheckBoxes">
                    <div class="cBox1">

                        <label for="colombo">Colombo </label>
                        <input type="checkbox" id="colombo" name="colombo" value="colombo">
                        
                        <label for="gampaha">Gampaha </label>
                        <input type="checkbox" id="gampaha" name="gampaha" value="gampaha">
            
                        <label for="kaluthara">Kaluthara </label>
                        <input type="checkbox" id="kaluthara" name="kaluthara" value="kaluthara">
                        
                        <label for="galle">Galle </label>
                        <input type="checkbox" id="galle" name="galle" value="galle">
                
                        <label for="matara">Matara </label>
                        <input type="checkbox" id="matara" name="matara" value="matara">
                        
                        <label for="hambantota">Hambantota </label>
                        <input type="checkbox" id="hambantota" name="hambantota" value="hambantota">

                        <label for="kandy">Kandy </label>
                        <input type="checkbox" id="kandy" name="kandy" value="kandy">

                        <label for="nuwaraEliya">Nuwara Eliya </label>
                        <input type="checkbox" id="nuwaraEliya" name="nuwaraEliya" value="nuwaraEliya">

                        <label for="matale">Matale </label>
                        <input type="checkbox" id="matale" name="matale" value="matale">

                        <label for="batticalo">Batticalo </label>
                        <input type="checkbox" id="batticalo" name="batticalo" value="batticalo">
                    </div>

                    <div class="cBox2">
                            <label for="jaffna">Jaffna </label>
                            <input type="checkbox" id="jaffna" name="jaffna" value="jaffna">

                            <label for="trincomalee">Trincomalee </label>
                            <input type="checkbox" id="trincomalee" name="trincomalee" value="trincomalee">

                            <label for="ampara">Ampara </label>
                            <input type="checkbox" id="ampara" name="ampara" value="ampara">

                            <label for="badulla">Badulla </label>
                            <input type="checkbox" id="badulla" name="badulla" value="badulla">
            
                            <label for="kurunagala">Kurunagala </label>
                            <input type="checkbox" id="kurunagala" name="kurunagala" value="kurunagala">
            
                            <label for="anuradapura">Anuradapura </label>
                            <input type="checkbox" id="anuradapura" name="anuradapura" value="anuradapura">

                            <label for="polonnaruwa">Polonnaruwa </label>
                            <input type="checkbox" id="polonnaruwa" name="polonnaruwa" value="polonnaruwa">
                    </div>
                </div>
                <p>How many days do you expect to travel? </p>
                <div class="radButton">
                    <div class="radButton1">
                        <label for="1day"> 1 Day</label>
                        <input type="radio" id="1day" name="1day" value="1day">

                        <label for="2days"> 2 Days</label>
                        <input type="radio" id="2days" name="2days" value="2days">

                        <label for="3days"> 3 Days</label>
                        <input type="radio" id="3days" name="3days" value="3days">

                        <label for="4days"> 4 Day</label>
                        <input type="radio" id="4days" name="4days" value="4days">
                    </div>
                    <div class="radButton2">
                        <label for="5days"> 5 Days</label>
                        <input type="radio" id="5days" name="5days" value="5days">

                        <label for="6days"> 6 Days</label>
                        <input type="radio" id="6days" name="6days" value="6days">

                        <label for="1week"> 1 week</label>
                        <input type="radio" id="1week" name="1week" value="1week">

                        <label for="more"> More</label>
                        <input type="radio" id="more" name="more" value="more">
                    </div>
                </div>
                <input type="submit" value="Submit">
                <?php

                    $name = $_POST['name'];
                    $country = $_POST['country'];
                    $nic = $_POST['nic'];
                    $contactNum = $_POST['contactNum'];
                    $email = $_POST['email'];

                    $sql = "INSERT INTO tourGuide(Name, Country, NIC, ContactNo, email, visitingAreas, NoOfDays)
                            VALUES ($name, $country, $nic, $contactNum, $email)";

                            if(mysqli_query($conn, $sql)){
                                echo "New record created.";
                            }else{
                                echo "Error". $sql.mysqli_error($conn);
                            }
                ?>
            </form>
        </div>
    </body>
    <footer>
        <p>© 2025 Happy Vacation. All Rights Reserved.</p>
    </footer>
</html>