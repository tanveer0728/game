<?php
include 'config.php';
include 'error.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "UPDATE messages SET name='$name', email='$email', message='$message' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: main.php?success=1");
    } else {
        handleError("Error: " . $sql . "<br>" . $conn->error);
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT name, email, message FROM messages WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        handleError("Record not found.");
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Message</title>
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/form_elements.css">
</head>
<body>
    <div class="content">
        <h1>Update Message</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required><?php echo $row['message']; ?></textarea><br><br>
            <input type="submit" value="Update Message">
        </form>
    </div>
</body>
</html>
