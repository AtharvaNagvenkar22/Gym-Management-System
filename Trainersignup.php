<?php
mysqli_report(MYSQLI_REPORT_OFF);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmsproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $RegID = $_POST["RegiID"];
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $phone_number = $_POST["phone1"];
    $email_id = $_POST["email"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $plan = $_POST["plan"];
    $HEIGHT = $_POST["height"];
    $WEIGHT = $_POST["weight"];
    $ARMS = $_POST["arms"];
    $CHEST = $_POST["chest"];
    $WAIST = $_POST["waist"];
    $HIPS = $_POST["hips"];

    $sql = "INSERT INTO trainer (trainer_id, firstname, lastname, phone_number, email_id, address, gender, plan, Height, Weight, Arms, Chest, Waist, Hips)
            VALUES ('$RegID','$firstname', '$lastname', '$phone_number', '$email_id', '$address', '$gender', '$plan','$HEIGHT', '$WEIGHT', '$ARMS', '$CHEST', '$WAIST', '$HIPS')";

    if ($conn->query($sql) === TRUE) {
        header("Location:Traineredit.html");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
