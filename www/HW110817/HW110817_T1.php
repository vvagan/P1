<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T1</title>
</head>
<body>
<?php
error_reporting( E_ERROR );
?>



<p>Task 1</p>

<form action="HW110817_T1.php" method="post">
    <input type="textarea" name="ta1_1">
    <input type="textarea" name="ta2_1">
    <input type="submit" value="Submit">
</form>

<?php
$ta1_1 = $_POST["ta1_1"];
$ta2_1 = $_POST["ta2_1"];

function get_common_words ($fta1, $fta2){
$f_res = implode( " ", array_unique(array_intersect(explode(' ', mb_strtolower($fta1)), explode(' ', mb_strtolower($fta2)))));
return $f_res;
}

echo '<br>Result: ' . get_common_words($ta1_1, $ta2_1);

?>
<hr>





</body>
</html>