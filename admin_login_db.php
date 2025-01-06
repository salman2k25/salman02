<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy login check - replace this with real validation
    if ($username == "salman" && $password == "123456") {
        // Set session variables for logged in user
        $_SESSION['username'] = $username;

        // Redirect to dashboard
        header("Location: dash.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
