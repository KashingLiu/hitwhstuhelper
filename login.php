<html>
<meta charset="UTF-8">
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kashingliu
 * Date: 17/5/6
 * Time: 上午10:24
 */

//connect database;
$con = mysqli_connect("120.24.240.44", "shawn", "624453893521y","oneinstack");
if (!$con)
{
    die('Could not connect: ' . mysqli_connect_error());
}

//SELECT 列名称 FROM 表名称 WHERE 列 运算符 值
if( isset($_POST['id']) &&  isset($_POST['pwd']))  //isset是确认用户是否填入了这两个值
{
    //获取用户输入
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];

    //执行sql查询
    $sql = "Select id, name, userflag, email from users where id ='$id' and pwd='$pwd'";
    $query = mysqli_query($con, $sql);
    $num = mysqli_num_rows($query);
    //    如果sql查询的数目大于0的话就算成功登录
    if ( $num > 0 )
    {
//        把得到的这一行变成数组
        $row = mysqli_fetch_array($query);
//        session会话开始
        session_start();
//        判断用户的权限是否有效
        if($row['userflag'] == 1 or $row['userflag'] == 0)
        {

            //查询到的id、userflag、name需要给session
            $_SESSION['id'] = $row['id'];
            $_SESSION['userflag'] = $row['userflag'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            echo '登录成功...正在跳转，请稍后...';
                $url = "./usrmain.php";          //登录成功跳转到个人信息页面
                echo "<meta http-equiv=\"refresh\" content=\"1; url=$url\">";   //用meta标签跳转，延迟1s跳转  用content来控制
        }
    }
    else
    {
        ?>
        <script>
            alert("<?php echo "用户名或密码错误!"; ?>");         //alert在script中是弹出窗口
            location.href="./index.html";     //登录不成功跳转到登录的login.html页面
        </script>
        <?php
    }
}
mysqli_close($con);
    ?>

</body>
</html>