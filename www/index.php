<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>P1</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
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

    echo "<br>";
    echo "<br>";



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

    echo "<br>";
    echo "<br>";




    $s = 15;
    $t = 0.5;


    $v1 = $s / $t;
    $v2 = ($s * 1000) / ($t * 3600);

    echo "Speed $v1 km/h";
    echo "<br>";
    echo "Speed $v2 m/s";



    echo "<br>";
    echo "<br>";


//14

    $foo = 'bar';
    $bar = 10;

    echo $$foo;


    echo "<br>";
    echo "<br>";






    ?>
</body>
</html>