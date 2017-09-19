<?php
    session_start();
    $score = $_POST['score'];                   //成绩
if (strlen($_POST['student_number'])==1)
{
    $_POST['student_number'] = "0".$_POST['student_number'];
}
$id = $_SESSION['teacher'].$_POST['banji_number'].$_POST['student_number'];
$sql = "UPDATE `oneinstack`.`".$_SESSION['teacher']."` SET `s".$_SESSION['class_number']."` = ".$score." WHERE `id` = ".$id;
$con = mysqli_connect("120.24.240.44","shawn","624453893521y","oneinstack");
if (!$con)
{
    die('Could not connect: ' . mysqli_connect_error());
}
$query = mysqli_query($con,$sql);
echo "<meta http-equiv='refresh' content='0.1; url=./index.php'>";
mysqli_close($con);
?>