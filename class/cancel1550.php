<?php
//取消用户提醒功能  8：00场  记录在a.sh中
$myfile = fopen("/data/wwwroot/www.kashingliu.xyz/d.sh", "w") or die("Unable to open file!");
$txt = "0";
fwrite($myfile,$txt);
fclose($myfile);
echo "已取消提醒，现在将跳转";
$url = "./index.php";
echo "<meta http-equiv=\"refresh\" content=\"0.5; url=$url\">";
?>