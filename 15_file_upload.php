<?php
if (isset($_POST['submit'])) {
    // allowed image upload extensions
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

    if (!empty($_FILES['upload']['name'])) {
        // print_r($_FILES);

        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_type = $_FILES['upload']['type'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        // target directory where to upload the file
        $target_dir = "uploads/{$file_name}";

        // get file extension from uploaded image name
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // validate file extension
        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 2000000) {
                // now upload the file 
                move_uploaded_file($file_tmp_name, $target_dir);
                
                $message = '<p style="color: green;">File uploaded successfully.</p>';

            } else {
                $message = '<p style="color: red;">File size is too large.</p>';
            }
        } else {
            $message = '<p style="color: red;">Invalid extension.</p>';
        }  

    } else {
        $message = '<p style="color: red;">Please choose a file.</p>';
    }
}
?>

<html>
<head>
    <title>File upload with PHP</title>
</head>
<body>
    <?php echo $message ?? null ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <label for="">
        Select image to upload:
        <input type="file" name="upload">
    </label>
    <br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <ul>
        <li><?php echo "File name: {$file_name }" ?></li>
        <li><?php echo "File type: {$file_type}" ?></li> 
        <li><?php echo "File size: {$file_size}" ?></li>
        <li><?php echo "Temp name: {$file_tmp_name}" ?></li>
    </ul>
</body>
</html>