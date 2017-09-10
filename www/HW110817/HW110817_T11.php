<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T11</title>
</head>
<body>

<p>Task 11</p>

<?php
error_reporting( E_ERROR );
?>
<?php

$str = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';

function rup ($str){
    $arr = explode('.', $str);
    foreach ($arr as $item){
        $item = ltrim($item);
        $newarr[] = mb_strtoupper(mb_substr($item, 0, 1)) . mb_substr($item, 1);
    }
    $str = implode($newarr, '. ');
    return $str;
}

echo rup($str);


?>

<hr>
</body>
</html>
