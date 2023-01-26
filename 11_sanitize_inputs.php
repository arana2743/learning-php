<?php
/*
we can sanitize form inputs using :
1. htmlspecialchars()
2. filter_input()
3. filter_var()

*/
if (isset($_POST['submit'])) {
    // make input from form void of any script for security
    // $name = htmlspecialchars($_POST['name']); // way 1
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); // way 2
    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS); // way 3

    // $age = htmlspecialchars($_POST['age']);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
    echo $age;
}
?>

<html>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div>
            <label for="name">
                Name:
                <input type="text" name="name">
            </label>
        </div>
        <div>
            <label for="age">
                Age:
                <input type="text" name="age">
            </label>
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>