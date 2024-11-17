<?php
session_start();

$file = fopen("login.txt", "w");
fwrite($file, print_r($_SESSION, true));
fclose($file);

session_unset();
session_destroy();

header("Location: index.php");
?>
