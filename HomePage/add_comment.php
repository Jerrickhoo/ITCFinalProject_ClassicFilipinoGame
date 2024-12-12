<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['comment'])){
    $comment = $conn->real_escape_string($_POST['comment']);
    $user_id = $_SESSION['user_id'];

    if (empty($user_id)){
        die(json_encode(["success" => false, "message" => "User ID not set in session. Please log in again."]));
    }

    $query = "INSERT INTO comments (user_id, content, created_at) VALUES ('$user_id', '$comment', NOW())";
    if ($conn->query($query) === TRUE){
        header("Location: HomePage.php");
        exit();
    } else{
        echo json_encode(["success" => false, "message" => "Failed to add comment."]);
    }
}
?>