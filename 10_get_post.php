<?php
/*
we can pass data through URLs and forms using $_GET and $_POST superglobals
*/
// print_r($_GET);
// echo $_GET['name'];
// echo $_GET['age'];
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<html>
<body>
    <h1><?php echo $_SERVER['PHP_SELF'] ?></h1>
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?name='John Dee&age=37&profile='developer''">Click</a>
    <br><br>
    <h2>Forms</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label for="name">
                Name:
                <input type="text" placeholder="enter your name" name="name">
            </label>
        </div>
        <br>
        <div>
            <label for="age">
                Age:
                <input type="text" placeholder="enter your age" name="age">
            </label>
        </div>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>