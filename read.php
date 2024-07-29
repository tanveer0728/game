<?php
include 'config.php';

$sql = "SELECT id, name, email, message FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='content'><h2>Messages</h2><table><tr><th>Name</th><th>Email</th><th>Message</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["message"]. "</td><td><a href='update.php?id=" . $row["id"]. "'>Edit</a> | <a href='delete.php?id=" . $row["id"]. "'>Delete</a></td></tr>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}
$conn->close();
?>
