<!DOCTYPE html>
<html lang="zh-CN" class="no-js no-svg">
<head>
    <meta charset="UTF-8">
    <title>哈工大（威海）校园学习助手</title>
    <style type="text/css">
        .myown {
            background-color: lightgray !important;   /*按钮颜色*/
            border: none !important;          /*有无边框*/
            color: rgb(255,255,255) !important;                /*字体颜色*/
            border-radius: 4px !important;
            font-size: 16px !important;
            line-height: 1px !important;
        }
    </style>
    <link rel='stylesheet' id='twentyseventeen-fonts-css'  href='https://fonts.googleapis.com/css?family=Libre+Franklin%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C800%2C800i&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='twentyseventeen-style-css'  href='https://www.kashingliu.xyz/wordpress/wp-content/themes/twentyseventeen/style.css?ver=4.7.4' type='text/css' media='all' />
    <!--[if lt IE 9]>
    <link rel='stylesheet' id='twentyseventeen-ie8-css'  href='https://www.kashingliu.xyz/wordpress/wp-content/themes/twentyseventeen/assets/css/ie8.css?ver=1.0' type='text/css' media='all' />
    <![endif]-->
    <!--[if lt IE 9]>
    <script type='text/javascript' src='https://www.kashingliu.xyz/wordpress/wp-content/themes/twentyseventeen/assets/js/html5.js?ver=3.7.3'></script>
    <![endif]-->
    </head>

<body class="home page-template-default page page-id-7 twentyseventeen-front-page has-header-image page-two-column colors-light">
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">跳至内容</a>

    <header id="masthead" class="site-header" role="banner">

        <div class="custom-header">

            <div class="custom-header-media">
                <div id="wp-custom-header" class="wp-custom-header"><img src="https://www.kashingliu.xyz/wordpress/wp-content/uploads/2017/05/cropped-73D20D3C028DFC68F665C23AE1A184AB.jpg" width="2000" height="1199" alt="哈工大（威海）校园学习助手" srcset="https://www.kashingliu.xyz/wordpress/wp-content/uploads/2017/05/cropped-73D20D3C028DFC68F665C23AE1A184AB.jpg 2000w, https://www.kashingliu.xyz/wordpress/wp-content/uploads/2017/05/cropped-73D20D3C028DFC68F665C23AE1A184AB-300x180.jpg 300w, https://www.kashingliu.xyz/wordpress/wp-content/uploads/2017/05/cropped-73D20D3C028DFC68F665C23AE1A184AB-768x460.jpg 768w, https://www.kashingliu.xyz/wordpress/wp-content/uploads/2017/05/cropped-73D20D3C028DFC68F665C23AE1A184AB-1024x614.jpg 1024w" sizes="100vw" /></div>	</div>

            <div class="site-branding">
                <div class="wrap">


                    <div class="site-branding-text">
                        <h1 class="site-title"><a href="https://www.kashingliu.xyz/wordpress/" rel="home">哈工大（威海）校园学习助手</a></h1>

                    </div><!-- .site-branding-text -->


                </div><!-- .wrap -->
            </div><!-- .site-branding -->

        </div><!-- .custom-header -->

        <div class="navigation-top">
            <div class="wrap">
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="顶部菜单">
                    <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use> </svg>菜单</button>
                    <div class="menu-%e9%a1%b6%e9%83%a8%e8%8f%9c%e5%8d%95-container"><ul id="top-menu" class="menu"><li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-20"><a href=".././usrmain.php">首页</a></li>
                            <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-39 current_page_item menu-item-42"><a href=".././score/index.php">成绩查询</a></li>
                            <li id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a href=".././class/index.php">课程查询</a></li>
                            <li id="menu-item-34" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34"><a href=".././zxs/index.php">自习室查询</a></li>
                            <li id="menu-item-36" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36"><a href=".././lab/index.php">实验室查询</a></li>
                            <li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61"><a href=".././individual/index.php">个人设置</a></li>

                        </ul></div>
                </nav><!-- #site-navigation -->
            </div><!-- .wrap -->
        </div><!-- .navigation-top -->

    </header><!-- #masthead -->











    <div class="site-content-contain">
        <div id="content" class="site-content">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">


                    <div class="panel-content">
                        <div class="wrap">





                            <script>
                                function myfunc(){
                                    var a;
                                    a = document.getElementById('sub');
                                    a.submit();
                                    location.href = "./submit.php";
                                }
                            </script>
                        <?php

                        session_start();
                        $userflag = $_SESSION["userflag"];
                        $con = mysqli_connect("120.24.240.44","shawn","624453893521y","lab");
                        if (!$con)
                        {
                        die('Could not connect: ' . mysqli_connect_error());
                        }

                        $id = ( $_SESSION['id'] - $_SESSION['id'] % 1000 ) / 10000;

                        $sql = "select * from "."`".$id."`";

//                            $sql = "select * from "."`16023`";
                        //获取课程表信息
                        $query = mysqli_query($con,$sql);
                        $result = mysqli_fetch_all($query);
                        $newarray1 = array();

                        //将二维数组转化成一维数组
                        $counter = 0;
                        for ($i = 0; $i < 4; $i++ )
                        {
                            for ($j = 0; $j < 5; $j ++ )
                            {
                                $newarray1[$counter] = $result[$i][$j];
                                $counter++;
                            }
                        }

                        //按照第一个字符拼音进行排序
                        function utf8_array_asort(&$array) {
                            foreach($array as $k=>$v) {
                                $array[$k] = iconv('UTF-8', 'GBK//IGNORE',$v);
                            }
                            asort($array);
                            foreach($array as $k=>$v) {
                                $array[$k] = iconv('GBK', 'UTF-8//IGNORE', $v);
                            }
                            return true;
                        }

                        $newarray1 = array_unique($newarray1);              //去掉重复
                        utf8_array_asort($newarray1);                       //按照拼音排序
                        $newarray1 = array_values($newarray1);              //在上一步的基础上把键的名字更改成0、1、2这样的
                        array_shift($newarray1);                            //由于不能全是满课，所以第一个一定是空的，所以删除第一个值

                        $conn = mysqli_connect("120.24.240.44","shawn","624453893521y","oneinstack");//oneinstack储存的成绩
                        if (!$conn)
                        {
                            die('Could not connect: ' . mysqli_connect_error());
                        }

                        $sqll = "select * from "."`".$id."`"."where id = ".$_SESSION["id"];
//                            $sqll = "select * from `16040` where id = 160400428";

                        $queryy = mysqli_query($conn,$sqll);
                        $resultt = mysqli_fetch_all($queryy);

                        if ($userflag == 0)
                        {
                            echo "<table border='1'><tr><td>";
                            echo "学号";
                            echo "</td><td>";
                            echo "姓名";
                            echo "</td>";
                            for( $i = 0; $i < count($newarray1); $i++)
                            {
                                echo "<td>".$newarray1[$i]."</td>";
                            }
                            echo "</tr><tr><td>".$_SESSION["id"]."</td><td>".$_SESSION["name"]."</td>";
                            for( $i = 2; $i < count($resultt[0]); $i++)
                            {
                                echo "<td>".$resultt[0][$i]."</td>";
                            }
                            echo "</tr></table>";
                        }
                        else
                        {
                            echo "<table><tr><td style='width: 200px;'>请输入授课系别的五位代码</td>".
                                "<form action='submit.php' method='post'>".
                                "<td><input type='text' style='width:150px;height:29px;padding:6px;font-size:14px;' id='input' name='class_number'></td>".
                                "<td><input type='submit' class='myown' value='提交'></td><tr></form></table>";

                        }



                        ?>




                                <!--                        </div>-->
                            </div>
                        </div>
                        <!--                    </article>-->

                </main><!-- #main -->
            </div><!-- #primary -->


        </div><!-- #content -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="wrap">

                <aside class="widget-area" role="complementary">
                    <div class="widget-column footer-widget-1">
                        <section id="text-4" class="widget widget_text">			<div class="textwidget"></div>
                        </section>			</div>
                    <div class="widget-column footer-widget-2">
                        <section id="text-5" class="widget widget_text">			<div class="textwidget"></div>
                        </section>			</div>
                </aside><!-- .widget-area -->

                <div style="text-align: center">
                    <a target="_blank" href="http://www.miitbeian.gov.cn/" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
                        <img  style="float: left; width: 20px;" src="../a.png"><span style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">鲁ICP备17016790号</span>
                    </a>
                </div>
            </div><!-- .wrap -->
        </footer><!-- #colophon -->
    </div><!-- .site-content-contain -->
</div><!-- #page -->

</body>
</html>
