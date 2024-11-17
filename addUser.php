<?php
include 'db.php';

$userName = 'Jan Kowal';
$userEmail = 'jan.kowal@example.com';
$userPassword = md5('password123'); 
$userLastLogin = date("Y-m-d H:i:s");

$sql = "INSERT INTO users (user_name, user_email, user_password, user_last_login) 
        VALUES ('$userName', '$userEmail', '$userPassword', '$userLastLogin')";

if ($conn->query($sql) === TRUE) {
    echo "New user added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
