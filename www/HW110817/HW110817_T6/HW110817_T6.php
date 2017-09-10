<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T6</title>
    <style type="text/css">
        td {
            text-align: center;
            vertical-align: middle;
            width: 32vw;
            height: 32vw;
        }
        img {
            max-width: 32vw;
            max-height: 32vw;
        }
    </style>
</head>
<body>
<?php
error_reporting( E_ERROR );
?>

<p>Task 6</p>


<form action="HW110817_T6.php" method="post" enctype="multipart/form-data">
    <input type="file" name="f_6" accept="image/jpeg, image/png">
    <br>
    <input type="submit" name="upload" value="Upload">
</form>
<?php


/**
 * Checks if the file extension is jpg, jpeg, png
 * @param filename
 * @return bool
 */

function is_img ($ffname){
    $farr = explode( '.', $ffname);
    $ftypearr = array('jpg', 'jpeg', 'png');
    if (in_array($farr[count($farr) - 1], $ftypearr)){
        return true;
    } else {
        return false;
    }
}

$uploads_dir = 'gallery/';

// add validation by is_img!

if(isset($_POST['upload'])) {
    $ferror = $_FILES["f_6"]["error"];
    if ($ferror == 0) {
        $tmp_name = $_FILES["f_6"]["tmp_name"];
        $name = basename($_FILES["f_6"]["name"]);
        if (is_img($name)) {
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
            echo $name . ' is uploaded';
        }
        else{
            echo 'Invalid file tipe. ' . $name . ' is not image.';
        }
    } else {
        echo 'Not uploaded. Error: ' . $ferror;
    }
}

echo '<br><br>';


$filelist = array();

$hdir = opendir($uploads_dir);
while ($file = readdir($hdir)) {
    if (is_img($file)){
        $filelist[] = $file;
    }
}

if (empty($filelist)) {
    echo 'No files in directory';
}
closedir($hdir);

$cols = 3;
$num = count($filelist);


    if ($num % 3 == 0){
        $row = $num / 3 ;
} else {
$row = (int) ($num / 3) + 1 ;
}

$trow = 1;
$tcols = 1;
$li = 0;

echo '<table>';

    for ($trow = 1; $trow <= $row; $trow++){
    echo "<tr>";
        for ($tcols = 1; $tcols <= $cols; $tcols++){

        echo "<td><img src='gallery/$filelist[$li]' alt=''></td>";
$li++;
        }
        }
        echo '</table>';
?>




<hr>
</body>
</html>