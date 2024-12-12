<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'], $_POST['content'])){
    $id = intval($_POST['id']);
    $content = $conn->real_escape_string($_POST['content']);
    $user_id = $_SESSION['user_id'];

    $checkQuery = "SELECT user_id FROM comments WHERE id = $id";
    $result = $conn->query($checkQuery);
    if ($result->num_rows > 0){
        $comment = $result->fetch_assoc();
        if ($comment['user_id'] == $user_id){
            $query = "UPDATE comments SET content = '$content' WHERE id = $id";
            if ($conn->query($query) === TRUE){
                echo json_encode(["success" => true, "message" => "Comment updated successfully."]);
            } else{
                echo json_encode(["success" => false, "message" => "Failed to update comment."]);
            }
        } else{
            echo json_encode(["success" => false, "message" => "You do not have permission to edit this comment."]);
        }
    } else{
        echo json_encode(["success" => false, "message" => "Comment not found."]);
    }
}
?>
