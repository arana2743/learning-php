<?php
session_start();

// to destroy the session and logout
session_destroy();

// now redirect back to login page
header("Location: /phpcrashcourse/13_sessions.php");
?>