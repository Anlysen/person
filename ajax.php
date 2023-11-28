<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$sql = "INSERT INTO personDB (name, age, email) VALUES ('$name', '$age', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Successfull";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>