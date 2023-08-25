<?php
$directory = '.';
$files = array_diff(scandir($directory), array('.', '..'));
?>

<!DOCTYPE html>
<html>
<head>
    <title>File List</title>
</head>
<body>
    <h1>List of Files in the Directory</h1>
    <ul>
        <?php
        foreach ($files as $file) {
            echo '<li>' . $file . '</li>';
        }
        ?>
    </ul>
</body>
</html>
