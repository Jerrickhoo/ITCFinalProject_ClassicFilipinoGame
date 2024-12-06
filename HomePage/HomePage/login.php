<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Utility function to send a JSON response
function sendResponse($status, $message) {
    echo json_encode(["status" => $status, "message" => $message]);
    exit;
}

// Handle requests
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === "login") {
        $email = $_POST['email'] ?? "";
        $username = $_POST['username'] ?? "";
        $password = $_POST['password'] ?? "";

        $stmt = $conn->prepare("SELECT password FROM users WHERE email = ? AND username = ?");
        $stmt->bind_param("ss", $email, $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashedPassword);
            $stmt->fetch();

            if (password_verify($password, $hashedPassword)) {
                sendResponse("success", "Login successful!");
            } else {
                sendResponse("error", "Invalid username, email, or password.");
            }
        } else {
            sendResponse("error", "Invalid username, email, or password.");
        }

        $stmt->close();
    } elseif ($action === "signup") {
        $email = $_POST['email'] ?? "";
        $username = $_POST['username'] ?? "";
        $password = $_POST['password'] ?? "";

        $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            sendResponse("error", "Email already exists.");
        } else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $email, $username, $hashedPassword);

            if ($stmt->execute()) {
                sendResponse("success", "Sign-up successful!");
            } else {
                sendResponse("error", "Failed to create account.");
            }
        }

        $stmt->close();
    }
} else {
    sendResponse("error", "Invalid request method.");
}

$conn->close();
?>
