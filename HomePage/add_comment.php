<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['comment'])) {
    $comment = $conn->real_escape_string($_POST['comment']);
    
    // Fetch user name from session
    $userName = isset($_SESSION['firstName'], $_SESSION['lastName'])
        ? $conn->real_escape_string($_SESSION['firstName'] . ' ' . $_SESSION['lastName'])
        : "Guest";

    // Insert into comments table
    $query = "INSERT INTO comments (user, content) VALUES ('$userName', '$comment')";
    if ($conn->query($query) === TRUE) {
        header("Location: HomePage.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
