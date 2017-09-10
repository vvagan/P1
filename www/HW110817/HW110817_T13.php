<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T13</title>
</head>
<body>

<p>Task 13</p>

<?php
error_reporting( E_ERROR );
?>
<?php

$str = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

$arr = explode(' ', $str);

$uarr = array_unique($arr);

foreach ($uarr as $uitem){
    $counter = 0;
    foreach ($arr as $item){
        if ($item == $uitem){
            $counter++;
            $newarr[$uitem] = $counter;
        }
    }
}
arsort($newarr);

foreach ($newarr as $key => $value){
    echo $key . ' - ' . $value . '<br>';
}





?>
<hr>
</body>
</html>
