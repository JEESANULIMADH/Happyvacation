<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="Styles.css">
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

<div class="wrapper">
    <h1 style="text-align: center;">Feedback Form</h1>
    <form id="feedbackForm">
        <div class="input-box">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
        </div>
        <div class="input-box">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>
            <br>
        </div>
        <div class="input-box">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
        </div>
            <label>Were you able to find what you needed?</label>
            <input type="radio" id="found_yes" name="found" value="yes" required>
            <label for="found_yes">Yes</label>
            <input type="radio" id="found_no" name="found" value="no">
            <label for="found_no">No</label>
            <br>
        <div class="input-box">
            <label for="need">If you did not find what you needed.. Please tell us what info you were seeking ?:</label>
            <input type="text" id="need" name="need" required>
            <br>
        </div>
            <label>How easy is it to find information on the site?</label>
            <input type="radio" id="easy" name="difficulty" value="easy" required>
            <label for="easy">Easy</label>
            <input type="radio" id="average" name="difficulty" value="average">
            <label for="average">Average</label>
            <input type="radio" id="difficult" name="difficulty" value="difficult">
            <label for="difficult">Difficult</label>
            <br>
            <label>How would you like to give a rating for us?</label>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1">&#9733;</label>
            </div>
            <br>
        <div class="input-box">
            <label>Any additional feedback?</label>
            <input type="text" id="feedback" name="feedback" required>
            <br>
        </div>
            <label>What is the likelihood that you will return to the site?</label>
            <input type="radio" id="like" name="likelihood" value="like">
            <label for="like">Like</label>
            <input type="radio" id="unlike" name="likelihood" value="unlike">
            <label for="unlike">Unlike</label>
            <br>
            <p> Thank you for your response..</p>
            <br>
            <button type="submit">Submit</button>
</form>
</div>
</body>
<footer>
    <p>© 2025 Happy Vacation. All Rights Reserved.</p>
</footer>
</html>
