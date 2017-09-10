<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T10</title>
</head>
<body>

<p>Task 10</p>

<?php
error_reporting( E_ERROR );

?>
<form action="HW110817_T10.php" method="post">
    <textarea name="text" id="" cols="100" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Process">
</form>
<?php

$str = $_POST['text'];
if ($str !== null) {
    $arr = explode(' ', mb_strtolower($str));


    $arr = array_unique($arr);

    echo count($arr) . ' unique words';
}


?>


<hr>
</body>
</html>
