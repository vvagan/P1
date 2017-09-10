<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T12</title>
</head>
<body>

<p>Task 12</p>

<?php
error_reporting( E_ERROR );
?>
<?php

$str = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';

function rup ($str){
    $arr = explode('.', $str);
    $newarr = array_reverse($arr);
    $str = implode('. ', $newarr);
    return $str;
}

echo rup($str);

?>
<hr>
</body>
</html>
