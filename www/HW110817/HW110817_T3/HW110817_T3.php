<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T3</title>
</head>
<body>


<p>Task 3</p>

<form action="HW110817_T3.php" method="post">
    <input type="text" name="t1_3">
    <input type="submit" value="Submit">
</form>

<?php

$n_3 = $_POST['t1_3'];

if (is_numeric($n_3)) {

    $file_3 = fopen('file_3.txt', 'a+');
    $arr_3 = explode(' ', file_get_contents('file_3.txt', true));
    foreach ($arr_3 as $k_3 => $i_3) {
        if (strlen($i_3) > $n_3) {
            unset($arr_3[$k_3]);
        }
    }
    file_put_contents('file_3.txt', implode(' ', $arr_3));
    fclose($file_3);
    echo 'Done. Check the file.';

} else {
echo 'Invalid value';
}
?>
<hr>






</body>
</html>