<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>index</title>
    <!--    <link rel="stylesheet" href="css/reset.css">-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="index.php" method="post" name="form">
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" value="Submit" name="submit">

</form>




<?php

function save ($name, $email, $password){
    $source = fopen('message.txt', "a+");
    fwrite($source, json_encode(["name"=> $name, 'email' => $email, 'password' => $password])) . PHP_EOL;
    fclose($source);
}


var_dump($_POST)




//session_start();
//
//if (empty($_SESSION['count'])){
//    $_SESSION['count'] = 1;
//} else{
//    $_SESSION['count']++;
//}
//
//var_dump($_SESSION);
//var_dump(session_status());


?>
</body>
</html>