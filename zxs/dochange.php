<!DOCTYPE html>
<html lang="zh-CN" class="no-js no-svg">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kashingliu
 * Date: 17/4/9
 * Time: 下午3:34
 */

$con = mysqli_connect("localhost","shawn","624453893521y","oneinstack");
if (!$con)
{
    die('Could not connect: ' . mysqli_connect_error());
}

$a = "update ". $_POST["s1"].
    " set `1` = ".$_POST["io1"].
    ",`2` = ".$_POST["io2"].
    ",`3` = ".$_POST["io3"].
    ",`4` = ".$_POST["io4"].
    ",`5` = ".$_POST["io5"].
    ",`6` = ".$_POST["io6"].
    " where 教室 = "."'$_POST[s2]'";

//echo $a;
$res = mysqli_query($con,$a);

if(!$res) {
    echo "error";
}
echo "<meta http-equiv='refresh' content='0.1; url=./index.php'>";
mysqli_close($con);
?>

</body>
</html>
