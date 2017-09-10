<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW040817</title>
</head>
<body>

<?php

//    1

$arr1 = array('html', 'css', 'php', 'js', 'jq');

foreach ($arr1 as $a) {
    echo $a . "<br>";
}

echo "<br>";

//    2
$arr2 = array(1, 20, 15, 17, 24, 35);
$result = 0;

foreach ($arr2 as $b) {
    $result = $result + $b;
}

echo $result;

echo "<br><br>";

//    3
$arr3 = array(26, 17, 136, 12, 79, 15);
$result1 = 0;

foreach ($arr3 as $c) {
    $result1 = $result1 + $c * $c;
}

echo $result1;

echo "<br><br>";

//    4

$arr4 = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

foreach ($arr4 as $d => $e) {
    echo $d . "<br>";
}

echo "<br>";

foreach ($arr4 as $d => $e) {
    echo $e . "<br>";
}

echo "<br>";

//    5

$arr5 = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');

foreach ($arr5 as $f => $g) {
    echo "{$f} — зарплата {$g} долларов. <br>";
}

echo "<br>";

//    6

$arr6 = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

foreach ($arr6 as $h => $i) {
    $en[] = $h;
    $ru[] = $i;
}
foreach ($ru as $rui) {
    echo $rui . "<br>";
}

echo "<br>";

foreach ($en as $eni) {
    echo $eni . "<br>";
}

echo "<br>";

//    7

$arr7 = array(2, 5, 9, 15, 0, 4);

foreach ($arr7 as $j) {
    if ($j > 3 and $j < 10) {
        echo $j . "<br>";
    }
}

echo "<br>";

//    8

$arr8 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arr8 as $k) {
    $l = (string)'';
    $l .= $k;
    echo $l;
}

echo "<br><br>";

//    9

$m = 1;
for ($m = 1; $m <= 100; $m++) {
    echo $m . "<br>";
}

echo "<br>";

//    10

$n = 1;
for ($n = 11; $n <= 33; $n++) {
    echo $n . "<br>";
}

echo "<br>";


//    11

$o = 1;
for ($o = 1; $o <= 100; $o++) {
    if ($o % 2 == 0) {
        echo $o . "<br>";
    }
}

echo "<br>";

//    12

$p = 1000;
$num1 = 0;

 do{
    $p = $p / 2;
    $num1++;
 } while ($p > 50);

echo $p . "<br>";
echo $num1 . "<br>";

echo "<br>";


//    13

$q = 2;
$r = 2;
$s = 0;

    for ($q = 2; $q <= 9; $q++ ){
        for ($r = 2; $r <= 9; $r++) {
            $s = $q * $r;
            echo $q . " x " . $r . " = " . $s . "<br>";
        }
        echo "<br>";
}


//    14

$arr9 = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr9 as $t){
    if ($t == 3 or $t == 2 or $t == 4){
        echo "Yes";
        break;
    } else {
        echo "No";
    }
}
echo "<br><br>";

//    15

$v = 0;
$arr10 = array(4, 2, 5, 19, 13, 0, 10);

foreach ($arr10 as $u){
    $v++;
}

echo $v . "<br>";

echo "<br>";

//    16

$arr14 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arr14 as $k1){
    if($k1 %3 !== 0){
        echo $k1 . ", ";
    } else {
        echo $k1 . "<br>";
    }
}

echo "<br>";


//    17

$w = "Aug";
$arr11 = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

foreach ($arr11 as $x) {
    if($x !== $w){
        echo $x . "<br>";
    } else {
        $y = $x;
        echo '<b>'.$y.'</b><br>';
    }
}

echo "<br>";


//    18

$b1 = "Sat";
$c1 = "Sun";
$arr13 = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

foreach ($arr13 as $d1) {
    if($d1 == $b1 or $d1 == $c1 ){
        echo '<b>'.$d1.'</b><br>';
    } else {
        echo $d1 . "<br>";
    }
}

echo "<br>";

//    19

$z = "Sat";
$arr12 = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

foreach ($arr12 as $a1) {
    if($a1 == $z){
        echo '<i>'.$a1.'</i><br>';
    } else {
        echo $a1 . "<br>";
    }
}

echo "<br>";


//    20

$e1 = 1;
$f1 = 1;
for($f1 = 1; $f1 <= 20; $f1++ ) {
    for ($e1 = 1; $e1 <= $f1; $e1++) {
        echo "X";
    }
    echo "<br>";
}


echo "<br>";


//    21

$g1 = 1;
$h1 = 1;
for($g1 = 1; $g1 <= 9; $g1++ ) {
    for ($h1 = 1; $h1 <= $g1; $h1++) {
        echo $g1;
    }
    echo "<br>";
}


echo "<br>";


//    22

$i1 = 1;

for($i1 = 1; $i1 <= 5; $i1++ ) {
    $j1 = 1;
    do{
        echo "XX";
        $j1++;
    } while ($j1 <= $i1);

    echo "<br>";

}

echo "<br>";


//    23, 24


?>
<form action="HW040817.php" method="post" name="form1">
    <input type="text" name="text1">
    <input type="submit" name="sumbit1" value="Submit">
</form>
<?php

$l1 = $_POST['text1'];
$m1 = 0;
$o1 = 0;
$p1 = 3;
$q1 = 0;


if(is_numeric ( $l1 )){
    for ($m1 = 0; $m1 <= strlen($l1) - 1; $m1++) {
        $arr15[] = substr($l1, $m1, 1);
    }
    foreach ($arr15 as $n1){
        $o1 = $o1 + $n1;
        if($n1 == $p1){
            $q1++;
        }
    }
    echo "Number is  " . $l1 . "<br>";
    echo "Result is  " . $o1 . "<br>";
    echo "{$q1} \"{$p1}\"s in this number";
} else {
    echo "Invalid velue";
}

echo "<br><br>";

//    25

$r1 = 1;

for($r1 = 1; $r1 <= 10; $r1++){
    $arr16[] = rand(1, 99);
}

foreach ($arr16 as $s1){
    echo $s1  . " ";
}

echo "<br> min - " . min($arr16) . "<br>max - " . max($arr16);


echo "<br><br>";

//    26

$t1 = 1;
$w1 = 1;

for($t1 = 1; $t1 <= 5; $t1++){
    $arr17[] = rand(1, 100);
}

foreach ($arr17 as $u1){
    echo $u1 . " ";
}
echo "<br>";

foreach ($arr17 as $v1){
    if($v1 % 2 == 0){
        $w1 = $w1 * $v1;
    } else{
        echo $v1 . " ";
    }
}

echo "<br>" . $w1;
echo "<br><br>";

//    27


$row = rand(3, 5);
$cols = rand(3, 5);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$trow = 1;
$tcols = 1;

echo '<table border="black">';

for ($trow = 1; $trow <= $row; $trow++){
    echo "<tr>";
    for ($tcols = 1; $tcols <= $cols; $tcols++){
        $num = rand(100, 999);
        $ritem = array_rand($colors, 1);
        echo "<td  bgcolor=\"$colors[$ritem]\"> $num </td>";
    }

}
echo '</table>';


//    28
// Сделано в задании 13



?>
</body>
</html>