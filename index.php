<?php
session_start();

if (isset($_SESSION['user_name'])) {
    $lastLogin = $_SESSION['user_last_login'];
    $message = ($lastLogin === null) 
        ? "Witaj, {$_SESSION['user_name']} – to Twoje pierwsze logowanie w systemie"
        : "Witaj, {$_SESSION['user_name']}, ostatnio logowałeś się $lastLogin";
    echo "<p>$message</p>";
    echo '<form action="logout.php" method="post"><button type="submit">Wyloguj</button></form>';
} else {
    echo '<form action="login.php" method="post">
            <label>Nazwa użytkownika: <input type="text" name="user_name"></label><br>
            <label>Hasło: <input type="password" name="password"></label><br>
            <button type="submit">Zaloguj</button>
          </form>';
}
?>
