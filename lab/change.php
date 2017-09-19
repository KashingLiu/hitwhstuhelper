<!DOCTYPE html>
<html lang="zh-CN" class="no-js no-svg">
<head>
    <meta charset="UTF-8">
    <title>哈工大（威海）校园学习助手</title>
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
                            <li id="menu-item-34" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34"><a href=".././score/index.php">成绩查询</a></li>
                            <li id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a href=".././class/index.php">课程查询</a></li>
                            <li id="menu-item-42" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-42"><a href=".././zxs/index.php">自习室查询</a></li>
                            <li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-39 current_page_item menu-item-36"><a href=".././lab/index.php">实验室查询</a></li>
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

                            <form action="./dochange.php" name="frm" method="post">
                                <select name="s1" onChange="redirec(document.frm.s1.options.selectedIndex)">
                                    <option selected>请选择教学楼及楼层</option>
                                    <option value="G1">G楼1层</option>
                                    <option value="H2">H楼2层</option>
                                    <option value="H3">H楼3层</option>
                                    <option value="Y1">Y楼1层</option>
                                    <option value="Y2">Y楼2层</option>
                                    <option value="Y3">Y楼3层</option>
                                    <option value="Y4">Y楼4层</option>
                                    <option value="Y5">Y楼5层</option>
                                </select>

                                <select name="s2">
                                    <option value="请选择教室" selected>请选择实验室</option>
                                </select>

                                <br>
                                <br>

                                第一节:
                                <select name="io1">
                                    <option value="0">空闲</option>
                                    <option value="1">有课</option>
                                </select>
                                第二节:
                                <select name="io2">
                                    <option value="0">空闲</option>
                                    <option value="1">有课</option>
                                </select>
                                第三节:
                                <select name="io3">
                                    <option value="0">空闲</option>
                                    <option value="1">有课</option>
                                </select>
                                <br>
                                第四节:
                                <select name="io4">
                                    <option value="0">空闲</option>
                                    <option value="1">有课</option>
                                </select>
                                第五节:
                                <select name="io5">
                                    <option value="0">空闲</option>
                                    <option value="1">有课</option>
                                </select>
                                第六节:
                                <select name="io6">
                                    <option value="0">空闲</option>
                                    <option value="1">有课</option>
                                </select>

                                <br>
                                <br>
                                <?php
                                session_start();
                                if( isset($_SESSION['id']) )
                                {
                                    $con = mysqli_connect("120.24.240.44", "shawn", "624453893521y", "oneinstack");
                                    if (!$con) {
                                        die('Could not connect: ' . mysqli_connect_error());
                                    }
                                    //获取Session
                                    $id = $_SESSION['id'];

                                    //执行SQL语句获得userflag的值
                                    $sql = "Select userflag from users where id ='$id'";
                                    $query = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_array($query);
                                    //判断当前数据库中的权限信息与Session中的信息比较，如果不同则更新Session的信息
                                    if ($row['userflag'] != $_SESSION['userflag']) {
                                        $_SESSION['userflag'] = $row['userflag'];
                                    }
                                    if ($_SESSION['userflag'] == 1) {
                                        echo "<input type='submit' onclick=\"alert('修改成功！')\" value='修改'>";
                                    }
                                    else
                                    {
                                        echo "您没有权限进行此操作！";
                                    }
                                }
                                mysqli_close($con);
                                ?>
                            </form>
                            <script language="javascript">
                                //获取一级菜单长度
                                var select1_len = document.frm.s1.options.length;
                                var select2 = new Array(select1_len);
                                //把一级菜单都设为数组
                                for (i=0; i<select1_len; i++)
                                { select2[i] = new Array();}
                                //定义基本选项
                                select2[0][0] = new Option("请选择教室", " ");

                                select2[1][0] = new Option("G101", "G101");
                                select2[1][1] = new Option("G102", "G102");

                                select2[2][0] = new Option("H203", "H203");
                                select2[2][1] = new Option("H205", "H205");
                                select2[2][2] = new Option("H208", "H208");
                                select2[2][3] = new Option("H210", "H210");
                                select2[2][4] = new Option("H215", "H215");

                                select2[3][0] = new Option("H302", "H302");
                                select2[3][1] = new Option("H303", "H303");
                                select2[3][2] = new Option("H305", "H305");
                                select2[3][3] = new Option("H306", "H306");
                                select2[3][4] = new Option("H311", "H311");
                                select2[3][5] = new Option("H315", "H315");

                                select2[4][0] = new Option("Y101N", "Y101N");
                                select2[4][1] = new Option("Y103N", "Y103N");
                                select2[4][2] = new Option("Y105N", "Y105N");
                                select2[4][3] = new Option("Y107C", "Y107C");
                                select2[4][4] = new Option("Y109C", "Y109C");
                                select2[4][5] = new Option("Y111C", "Y111C");
                                select2[4][6] = new Option("Y113C", "Y113C");
                                select2[4][7] = new Option("Y115S", "Y115S");
                                select2[4][8] = new Option("Y117S", "Y117S");
                                select2[4][9] = new Option("Y119S", "Y119S");

                                select2[5][0] = new Option("Y201N", "Y201N");
                                select2[5][1] = new Option("Y203N", "Y203N");
                                select2[5][2] = new Option("Y205N", "Y205N");
                                select2[5][3] = new Option("Y207C", "Y207C");
                                select2[5][4] = new Option("Y209C", "Y209C");
                                select2[5][5] = new Option("Y211C", "Y211C");
                                select2[5][6] = new Option("Y213C", "Y213C");
                                select2[5][7] = new Option("Y215S", "Y215S");
                                select2[5][8] = new Option("Y217S", "Y217S");
                                select2[5][9] = new Option("Y219S", "Y219S");

                                select2[6][0] = new Option("Y301N", "Y301N");
                                select2[6][1] = new Option("Y303N", "Y303N");
                                select2[6][2] = new Option("Y305N", "Y305N");
                                select2[6][3] = new Option("Y307C", "Y307C");
                                select2[6][4] = new Option("Y309C", "Y309C");
                                select2[6][5] = new Option("Y311C", "Y311C");
                                select2[6][6] = new Option("Y313C", "Y313C");
                                select2[6][7] = new Option("Y315S", "Y315S");
                                select2[6][8] = new Option("Y317S", "Y317S");
                                select2[6][9] = new Option("Y319S", "Y319S");

                                select2[7][0] = new Option("Y401N", "Y401N");
                                select2[7][1] = new Option("Y403N", "Y403N");
                                select2[7][2] = new Option("Y405N", "Y405N");
                                select2[7][3] = new Option("Y407C", "Y407C");
                                select2[7][4] = new Option("Y409C", "Y409C");
                                select2[7][5] = new Option("Y411C", "Y411C");
                                select2[7][6] = new Option("Y413C", "Y413C");
                                select2[7][7] = new Option("Y415S", "Y415S");
                                select2[7][8] = new Option("Y417S", "Y417S");
                                select2[7][9] = new Option("Y419S", "Y419S");

                                select2[8][0] = new Option("Y501N", "Y501N");
                                select2[8][1] = new Option("Y503N", "Y503N");
                                select2[8][2] = new Option("Y505N", "Y505N");
                                select2[8][3] = new Option("Y507C", "Y507C");
                                select2[8][4] = new Option("Y509C", "Y509C");
                                select2[8][5] = new Option("Y511C", "Y511C");
                                select2[8][6] = new Option("Y513C", "Y513C");
                                select2[8][7] = new Option("Y515S", "Y515S");
                                select2[8][8] = new Option("Y517S", "Y517S");
                                select2[8][9] = new Option("Y519S", "Y519S");
                                //联动函数
                                function redirec(x)
                                {
                                    var temp = document.frm.s2;
                                    for (i=0;i<select2[x].length;i++)
                                    { temp.options[i]=new Option(select2[x][i].text,select2[x][i].value);}
                                    temp.options[0].selected=true;
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
    </div>
</div><!-- #page -->
</body>
</html>