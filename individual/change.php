<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

$con = mysqli_connect("120.24.240.44", "shawn", "624453893521y","oneinstack");
if (!$con)
{
    die('Could not connect: ' . mysqli_connect_error());
}
session_start();

$updateemail = "UPDATE users SET email="."'".$_POST['email']."'"." WHERE id='".$_SESSION['id']."'";
$updatekey = "UPDATE users SET pwd="."'".$_POST['pwd']."'"." WHERE id='".$_SESSION['id']."'";
if( $_POST['email']!=null )
{
    $queryemail = mysqli_query($con,$updateemail);
}
if( $_POST['pwd']!=null )
{
    $querykey = mysqli_query($con,$updatekey);
}
mysqli_close($con);

echo "<meta http-equiv='refresh' content='0.1; url=./index.php'>";
?>
</body>
</html>