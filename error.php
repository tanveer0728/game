<?php
function handleError($error_message) {
    echo "<div class='content'><h2>Error</h2><p>$error_message</p><a href='main.php'>Go Back</a></div>";
    exit();
}
?>
