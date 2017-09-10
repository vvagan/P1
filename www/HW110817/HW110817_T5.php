<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>HW110817_T5</title>
</head>
<body>
<?php
error_reporting( E_ERROR );
?>

<p>Task 5</p>


<form action="HW110817_T5.php" method="post">
    <input type="text" name="t1_5" placeholder="Path">
    <input type="text" name="t2_5" placeholder="Search">
    <input type="submit" value="Submit">
</form>


<?php
$path = $_POST['t1_5'];
$search = $_POST['t2_5'];
echo 'Dir: ' . $path . '<br>';
echo 'Search: ' . $search . '<br>';

function dir_check ($f_path, $f_search){
    $filelist = array();
    if (is_dir($f_path)){
        if ($hdir = opendir($f_path)) {
            while ($file = readdir($hdir)) {
                if (is_file($file)){
                    if (stristr($file, $f_search)) {
                    $filelist[] = $file;
                    }
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

echo dir_check($path, $search);

?>
<hr>



</body>
</html>