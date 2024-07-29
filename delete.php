<?php
include 'config.php';
include 'error.php';

$id = $_GET['id'];

$sql = "DELETE FROM messages WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: main.php?success=1");
} else {
    handleError("Error deleting record: " . $conn->error);
}

$conn->close();
?>
