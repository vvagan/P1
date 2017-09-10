<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T9</title>
</head>
<body>

<p>Task 9</p>

<?php
error_reporting( E_ERROR );

?>
<form action="HW110817_T9.php" method="post">
    <input type="text"  name="text" >
</form>
<?php


$newstr = strrev($_POST['text']);
echo $_POST['text'] . ' --> ' . $newstr ;
?>


<hr>
</body>
</html>
