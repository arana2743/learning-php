<?php
// since we are using session variables here as well
session_start();

if (isset($_SESSION['username'])) {
    echo '<p>Welcome user ' . $_SESSION['username'] . '!</p>';
} else {
    echo '<p>Welcome Guest!</p>';
}
?>

<html>
<body>
    <h1>Welcome to dashboard.</h1>
    <a href="/phpcrashcourse/13_sessions.php">Home</a><br>
    <a href="/phpcrashcourse/extras/logout.php">Logout</a>
    
</body>
</html>

