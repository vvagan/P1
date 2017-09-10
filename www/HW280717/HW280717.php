<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>HW280717</title>
</head>
<body>

    <?php

//    1 - 8

   $name = 'Vagan';
   $age = 32;

   echo "My name is: {$name} <br>";
   echo "I'm {$age} <br>";

   if ($age > 18 and $age <= 59)
   {
       echo "I've got to work";
   }
   if ($age > 59 )
   {
       echo "Time to cool down";
   }
   if ($age > 0 and $age <= 17)
   {
       echo "It's not your time yet";
   }
   if ($age < 0 )
   {
       echo "Age is not velue";
   }

    echo "<br><br>";


//    9-12
   $day = 1;

   switch ($day) {
       case 1:
       case 2:
       case 3:
       case 4:
       case 5:
           echo "Working day";
           break;

       case 6:
       case 7:
           echo "Weekend";
           break;

       default:
           echo "No match!";
           break;
   }

    echo "<br><br>";



//    13

   $s = 15;
   $t = 0.5;


   $v1 = $s / $t;
   $v2 = ($s * 1000) / ($t * 3600);

   echo "Speed $v1 km/h";
   echo "<br>";
   settype( $v2, 'integer');
   echo "Speed $v2 m/s";



    echo "<br><br>";


//14

   $foo = 'bar';
   $bar = 10;

   echo $$foo;


    echo "<br><br>";


//    15

    ?>

<form method="post" action="HW280717.php">
	
<input type="text" name="V1" id="V1">
<select name="ss">
  <option value="1">+</option>
  <option value="2">-</option>
  <option value="3">*</option>"
  <option value="4">/</option>
  <option value="5">%</option>
</select>
<input  type="text" name="V2" id="V2">
<input name="s" type="submit" value="Submit">
<input type="reset" value="Reset">
</form>

    <?php
    $def_arr = array('V1' => 0, 'V2' => 0, 'ss'=> 0);
    $x = 0;
    $y = 0;
    $z = 0;

    if (isset($_POST['s'])) {
    $x = $_POST['V1'];
    $y = $_POST['V2'];
    $z = $_POST['ss'];
    }


    if ($y == 0 and $z = 4) {
        $r = "Null";
    }
        else {
            switch ($z) {
                case 1:
                    $r = $x + $y;
                    break;
                case 2:
                    $r = $x - $y;
                    break;
                case 3:
                    $r = $x * $y;
                    break;
                case 4:
                    $r = $x / $y;
                    break;
                case 5:
                    $r = $x % $y;
                    break;
            }
        }


    echo "Result: {$r}";
	echo "<br><br>";

//    16

    $a = 37;
    $b = 26;

    echo max($a, $b);

    echo "<br><br>";

//    17

    $c = '78';
    $d = 78;

    if ($c == $d)
        echo "Ok";
    else
        echo "Not ok";

    echo "<br><br>";

//    18

    $e = '78';
    $f = 78;

    if ($e === $f)
        echo "Ok";
    else
        echo "Not ok";

    echo "<br><br>";

//    19

    $g = 78;
    $h = 78;

    var_dump($g == $h);

    echo "<br><br>";

//    20 - 22
    $i = 20;

    do {
        $j = (bool)$i;
        var_dump($j);
        echo "<br><br>";
        $i = $i - 20;
    } while ($i >= -20);
    // При перобразовании чисел в булев тип, любые чилса, кроме 0
    // преобразовываются в значение true, 0 - в false.

//    23

    echo ("echo <br>");

    printf ("printf <br>");

//    24

    // Однострочный комментарий
    # Однострочный комментарий
    /* Многострочный
    комментарий*/

//    25

//    <?php - открывающий тег PHP. <?= - аналогичный короткий тег, работает только если активировть через файл php.ini

//    26

    define("DAYS_COUNT", 7);
    const MONTH_COUNT = 12;

//    27
    // Запустил


    ?>
</body>
</html>