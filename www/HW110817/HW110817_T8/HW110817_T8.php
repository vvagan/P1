<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T8</title>
</head>
<body>

<p>Task 8</p>

<?php
error_reporting( E_ERROR );

$arr_r = file('messages.txt');

foreach ($arr_r as $item){
    $arr_r_enc = json_decode($item, true);
echo '<br>Name: ' . $arr_r_enc['username'] . '<br>' . 'Message: ' . $arr_r_enc['message'] . '<br>';
}

function validate($str){
    $stop = array('stop', 'word');
    $v_arr = explode( " ", $str);
    foreach ($v_arr as $item){
       $res = in_array(mb_strtolower($item), $stop);
    }
       return $res;
}


?>
<br><br>
<form action="HW110817_T8.php" method="post">
    <input type="text"  name="username" placeholder="Name"><br>
    <textarea rows="10" cols="50" name="message" placeholder="Message"></textarea><br>
    <input type="submit" name="submit" value="Send"><br>
</form>
<?php

if (isset($_POST['submit'])) {
    if (validate($_POST['message'])){
        echo 'Incorrect message.';
} else {
    $handle_w = fopen('messages.txt', 'a+');
    $arr = $_POST;
    array_pop($arr);
    if (empty($arr['username']) or empty($arr['message'])){
        echo "Please fill in all required fields.";
    } else {
    fwrite($handle_w, json_encode($arr) . PHP_EOL);
    fclose($handle_w);
    }
    }
}


?>


<hr>
</body>
</html>