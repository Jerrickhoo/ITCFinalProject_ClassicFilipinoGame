<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])){
    $id = intval($_POST['id']);
    $user_id = $_SESSION['user_id'];

    $checkQuery = "SELECT user_id FROM comments WHERE id = $id";
    $result = $conn->query($checkQuery);
    if ($result->num_rows > 0){
        $comment = $result->fetch_assoc();
        if ($comment['user_id'] == $user_id){
            $query = "DELETE FROM comments WHERE id = $id";
            if ($conn->query($query) === TRUE){
                echo json_encode(["success" => true, "message" => "Comment deleted successfully."]);
            } else{
                echo json_encode(["success" => false, "message" => "Failed to delete comment."]);
            }
        } else{
            echo json_encode(["success" => false, "message" => "You do not have permission to delete this comment."]);
        }
    } else{
        echo json_encode(["success" => false, "message" => "Comment not found."]);
    }
}
?>