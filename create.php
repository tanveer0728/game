<?php
include 'config.php';
include 'error.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: main.php?success=1");
    } else {
        handleError("Error: " . $sql . "<br>" . $conn->error);
    }
}

$conn->close();
?>
