<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T2</title>
</head>
<body>
<?php
error_reporting( E_ERROR );
?>

<p>Task 2</p>

<form action="HW110817_T2.php" method="post">
    <input type="textarea" name="ta1_2">
    <input type="submit" value="Submit">
</form>

<?php

$ta1_2 = $_POST["ta1_2"];
$fta1_2 = explode(' ',$ta1_2 );


function sort_2 ($a,$b) {
    if (strlen($a) !== strlen($b)){
    return (strlen($a) > strlen( $b)) ? -1 : 1;
    }
}

usort($fta1_2, "sort_2");
$res_2 = $fta1_2 [0] . ' ' . $fta1_2 [1] . ' ' . $fta1_2 [3];

echo '<br>Result: ' . $res_2;

?>
<hr>




</body>
</html>