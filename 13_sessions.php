<?php
/*
sessions are means to store information (in variables) to be used across multiple pages.
Unlike cookies, sessions are stored on server.
*/
// to start a session
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    // $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    

    if ($username == 'john' && $password == 'test') {
        $_SESSION['username'] = $username;
        // redirect with header() once logged in correctly
        header('Location: /phpcrashcourse/extras/dashboard.php');
    } else {
        echo "Incorrect login credentials";
    }
}
?>

<html>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label for="username">
                Username:
                <input type="text" name="username">
            </label>
        </div>
        <div>
            <label for="password">
                Password: 
                <input type="password" name="password">
            </label>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>