<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kaizen"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $foundNeeded = $_POST['foundNeeded'] ?? 'No Response';
    $infoNeeded = $_POST['infoNeeded'] ?? '';
    $easeOfUse = $_POST['easeOfUse'] ?? 'No Response';
    $rating = $_POST['rating'] ?? 0;
    $additionalFeedback = $_POST['additionalFeedback'] ?? '';
    $returnLikelihood = $_POST['returnLikelihood'] ?? 'No Response';

    $sql = "INSERT INTO feedback (name, country, email, found_needed, info_needed, ease_of_use, rating, additional_feedback, return_likelihood) 
            VALUES ('$name', '$country', '$email', '$foundNeeded', '$infoNeeded', '$easeOfUse', '$rating', '$additionalFeedback', '$returnLikelihood')";

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Feedback</title>
        <link rel='stylesheet' type='text/css' href='phpstyle.css'>
    </head>
    <body>";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='successmsg'>
                <p class='succ'>Thank you for your feedback!</p>
                <a class='return' href='homepage.html'>Return to Home</a>
            </div>";
    } else {
        echo "<div class='errormsg'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
    }

    echo "</body>
    </html>";
}

mysqli_close($conn);
?>