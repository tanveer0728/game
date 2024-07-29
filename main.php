<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Game Reviews</title>
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="form_elements.html">Form Elements</a></li>
            <li><a href="game_types.html">Game Types</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="main.php">Reviews</a></li>
        </ul>
    </nav>

    <div class="content">
        <h1>Online Game Reviews</h1>
        <?php
        if (isset($_GET['success'])) {
            echo "<p style='color: green;'>Operation completed successfully.</p>";
        }
        include 'read.php';
        ?>
        <h2>Submit a New Review</h2>
        <form action="create.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" value="Submit Review">
        </form>
    </div>
</body>
</html>
