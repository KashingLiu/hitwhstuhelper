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

                    <article id="post-7" class="twentyseventeen-panel  post-7 page type-page status-publish hentry" >



                        <div style="text-align: center; margin: 100px">

                            <script>
                                function myfunc(){
                                    alert("成绩已修改!");
                                    var a;
                                    a = document.getElementById('sub');
                                    a.submit("change1.php");
                                    location.href = "change.php";
                                }
                            </script>

                            <?php

                            session_start();
                            $_SESSION['class_number']=$_POST['class'];
                            echo "<table><tr><td>系别</td><td>班级</td><td style='text-align: left'>学号</td><td style='text-align: left'>分数</td><td> </td></tr>".
                                "<tr> ".
                                "<td>".$_SESSION['teacher']."</td>".
                                "<td><form action='change1.php' method='post'><select name='banji_number' style='font-size: 11px'>".
                                "<option value='01'>1班</option>".
                                "<option value='02'>2班</option>".
                                "<option value='03'>3班</option>".
                                "<option value='04'>4班</option>".
                                "<option value='05'>5班</option>".
                                "<option value='06'>6班</option>".
                                "</select></td>".
                                "<td><input type='text' style='width:150px;height:29px;padding:6px;font-size:14px;' name='student_number'></td>".
                                "<td><input type='text' style='width:150px;height:29px;padding:6px;font-size:14px;' name='score'></td>".
                                "<td><button type='submit' class='myown' id='sub' onclick='return myfunc()'>提交</button></td>".
                            "</tr></table></form>";
                            ?>
                            <script>
                                function myfunc(){
                                    alert("成绩已修改!");
                                    var a;
                                    a = document.getElementById('sub');
                                    a.submit();
                                }
                            </script>














                        </div>
                    </article>

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
