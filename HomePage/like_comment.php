<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])){
    $id = intval($_POST['id']);

    $query = "UPDATE comments SET likes = likes + 1 WHERE id = $id";
    if ($conn->query($query) === TRUE){
        echo json_encode(["success" => true, "message" => "Comment liked successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to like comment."]);
    }
}
?>
