<?php
session_start();
include 'db.php';

$userName = $_POST['user_name'];
$password = md5($_POST['password']); 

$sql = "SELECT * FROM users WHERE user_name='$userName' AND user_password='$password'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $_SESSION['user_name'] = $user['user_name'];
    $_SESSION['user_last_login'] = $user['user_last_login'];

    $lastLogin = date("Y-m-d H:i:s");
    $conn->query("UPDATE users SET user_last_login='$lastLogin' WHERE id={$user['id']}");

    header("Location: index.php");
} else {
    echo "Błędna nazwa użytkownika lub hasło";
}

$conn->close();
?>
