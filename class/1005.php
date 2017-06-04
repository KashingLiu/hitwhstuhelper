<?php
//设定用户提醒功能  10：00场  记录在b.sh中  需要email的session
session_start();
$myfile = fopen("/data/wwwroot/www.kashingliu.xyz/b.sh", "w") or die("Unable to open file!");
$txt = "/usr/local/php/bin/php /data/wwwroot/www.kashingliu.xyz/test/wordpress/mail/mail.php";
$myphp = fopen("/data/wwwroot/www.kashingliu.xyz/test/wordpress/mail/mail.php", "w") or die("Unable to open file!");
$txt1 = "<?php require_once(\"functions.php\");"."$"."flag = sendMail('".$_SESSION['email']."','上课啦！','上课啦！！！'); ?>";
file_put_contents($myphp, $txt1 , FILE_APPEND);
fwrite($myfile,$txt);
fclose($myfile);
echo "已设定提醒，将在每天早上10：05发送到您的邮箱：".$_SESSION['email']."现在将跳转";
$url = "./index.php";
echo "<meta http-equiv=\"refresh\" content=\"0.5; url=$url\">";
?>