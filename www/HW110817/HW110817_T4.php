<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T4</title>
</head>
<body>
<?php
error_reporting( E_ERROR );
?>

<p>Task 4</p>


<form action="HW110817_T4.php" method="post">
    <input type="text" name="t1_4">
    <input type="submit" value="Submit">
</form>


<?php
$path = $_POST['t1_4'];
echo 'Dir: ' . $path . '<br>';



function dir_check ($f_path){
    $filelist = array();
    if (is_dir($f_path)){
        if ($hdir = opendir($f_path)) {
            while ($file = readdir($hdir)) {
                if (is_file($file)){
                    $filelist[] = $file;
                }
            }
            if (empty($filelist)) {
                $filelist[] = 'No files in directory';
            }
            closedir($hdir);
        }
    $funcres = implode('<br>', $filelist);
    } else {
    $funcres =  'Invalid path value';
    }
return $funcres;
}

echo dir_check($path);

?>
<hr>



</body>
</html>