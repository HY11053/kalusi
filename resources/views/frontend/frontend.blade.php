<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/frontend/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/frontend/css/header980.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript">
        <!--
        //获得当前时间,刻度为一千分一秒
        var initializationTime = (new Date()).getTime();
        function showLeftTime() {
            var date = new Date();
            var year = date.getFullYear();
            var month = date.getMonth()+1;
            var day = date.getDate();
            var hour = date.getHours();
            var minute = date.getMinutes();
            var second = date.getSeconds();
            var time_str= year+'年'+month+'月'+day+'日 '+hour+':'+minute+':'+second  ;
            document.getElementById('time').value=time_str;
            //一秒刷新一次显示时间
            var timeID = setTimeout(showLeftTime, 1000);
        }
        //-->
    </script>
    @yield('headlibs')
</head>
<body>
<div class="logolz1">
    <div class="logolz">
        <span class="logolz11"><h1 style="float: left;"><a href="{{config('app.url')}}" title="{{config('app.indexname')}}"><img alt="{{config('app.indexname')}}" src="/frontend/images/logo2.jpg"/></a></h1></span>
        <span class="logolz2">
            <img alt="卡露丝洗衣" src="/frontend/images/d1.jpg"/>
         </span>
        <span class="logolz3"><img alt="卡露丝洗衣" src="/frontend/images/head_tel.jpg"/></span>
    </div>
</div>
<div id="headernav">
    <div class="headernav">
        <div class="navL">
            <h4>我要开店-加盟导航</h4>
            <div class="nav-submenu" style="height:0px;">
                <div id="submenu">
                    <div class="submenu1" id="submenu1">
                        <div class="blank10"></div>
                        <h3><a href="javascript:;" title="小型店设备方案">小型店设备方案</a></h3>
                        <p> <a href="javascript:;">干洗机</a> <a href="javascript:;">水洗机</a> <a class="last" href="javascript:;">烘干机</a> </p>
                        <p> <a href="javascript:;">发生器</a> <a href="javascript:;">烫台</a> <a class="last" href="javascript:;">熨斗</a></p>
                    </div>
                    <div class="submenu1" id="submenu2">
                        <div class="blank10"></div>
                        <h3><a href="javascript:;" title="中型店设备方案">中型店设备方案</a></h3>
                        <p> <a href="javascript:;">干洗机</a> <a href="javascript:;">水洗机</a> <a href="javascript:;">烘干机</a></p>
                        <p> <a href="javascript:;">收银机</a> <a href="javascript:;">消毒柜</a> <a href="javascript:;">包装机</a></p>
                    </div>
                    <div class="submenu1" id="submenu3">
                        <div class="blank10"></div>
                        <h3><a href="javascript:;" title="大型店设备方案">大型店设备方案</a></h3>
                        <p> <a href="javascript:;">干洗</a> <a href="javascript:;">水洗</a> <a href="javascript:;">烘干</a><a href="javascript:;">去渍</a></p>
                        <p> <a href="javascript:;">收银</a> <a href="javascript:;">消毒</a> <a href="javascript:;">包装</a><a href="javascript:;">烫台</a></p>
                    </div>
                    <div class="submenu1" id="submenu4">
                        <div class="blank10"></div>
                        <h3><a href="javascript:;" title="旗舰店设备方案">旗舰店设备方案</a></h3>
                        <p> <a href="javascript:;">洗衣</a> <a href="javascript:;">洗鞋</a> <a href="javascript:;">洗包</a><a href="javascript:;">皮具护理</a></p>
                        <p> <a href="javascript:;">收银</a> <a href="javascript:;">消毒</a> <a href="javascript:;">包装</a><a href="javascript:;">织补</a></p>
                    </div>
                </div>
            </div>
            <div class="nav-submenu-xl">
                <div id="xl-menu1" class="xl-menu">
                    <div class="xl-menu-l">
                        <div class="blank3"></div>
                        <h5> <style type="text/css">
                                .jmf {
                                    color: #2db3a6;
                                }
                            </style>
                            <table align="center" border="0" cellpadding="2" cellspacing="3" height="357" width="548">
                                <tbody>
                                <tr>
                                    <td align="center" bgcolor="#66CCCC" colspan="5" height="35" valign="middle">
                                        <span style="float: left; padding-left: 50px; font-weight: bold; font-size: 18px; color: #FFF;">小型店方案</span><span style="float: right; padding-right: 50px; font-size: 18px; font-weight: bold; color: #FFF;">推荐指数：&hearts;&hearts;&hearts;</span></td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" height="30" valign="middle" width="44">
                                        序号</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="257">
                                        设备名称</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="64">
                                        型号</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="31">
                                        数量</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="56">
                                        价格</td>
                                </tr>
                                <tr>
                                    <td height="47" align="center" valign="middle" bgcolor="#CCCCCC">
                                        1</td>
                                    <td bgcolor="#CCCCCC">
                                        全自动变频石油干洗机（双缸双过滤）</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        CM4DCF</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        13500元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        2</td>
                                    <td bgcolor="#2db3a6">
                                        全自动节能烘干机</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        HGZ-10</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        6950元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        3</td>
                                    <td bgcolor="#CCCCCC">
                                        豪华型单门消毒柜</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        YWXD-B</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        2200元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        4</td>
                                    <td bgcolor="#2db3a6">真空摇臂吸风熨烫台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        YT-160B</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1680元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">5</td>
                                    <td bgcolor="#CCCCCC">节能蒸汽发生器</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">DZF-3</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">1200元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        6</td>
                                    <td bgcolor="#2db3a6">
                                        不锈钢熨斗/胶管2根</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        YC-1</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1把</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        230元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#cccccc" valign="middle">
                                        小计</td>
                                    <td bgcolor="#cccccc">&nbsp;
                                    </td>
                                    <td align="center" bgcolor="#cccccc" colspan="3" valign="middle">
                                        25760元</td>
                                </tr>
                                </tbody>
                            </table></h5>


                    </div>
                    <div class="xl-menu-r">
                        <div class="xl-menu-r1">
                            <div class="xl-menu-r1-t">形象店面 <b></b></div>
                            <div class="xl-menu-r1-c"> <a href="javascript:;"><img src="/frontend/images/x1.jpg" alt="形象店面"/></a> </div>
                        </div>
                        <div class="xl-menu-r2">
                            <div class="xl-menu-r2-t">相关案例 <b></b></div>
                            <div class="xl-menu-r2-c"> <a href="javascript:;"><img src="/frontend/images/ali.jpg" alt=""/></a> </div>
                        </div>
                    </div>
                </div>
                <div id="xl-menu2" class="xl-menu" style="display:none;">
                    <div class="xl-menu-l">
                        <div class="blank5"></div>
                        <h5> <style type="text/css">
                                .jmf {
                                    color: #2db3a6;
                                }
                            </style>

                            <table align="center" border="0" cellpadding="2" cellspacing="3" height="367" width="548">
                                <tbody>
                                <tr>
                                    <td align="center" bgcolor="#66CCCC" colspan="5" height="35" valign="middle">
                                        <span style="float: left; padding-left: 50px; font-weight: bold; font-size: 18px; color: #FFF;">大型店方案</span><span style="float: right; padding-right: 50px; font-size: 18px; font-weight: bold; color: #FFF;">推荐指数：&hearts;&hearts;&hearts;&hearts;&hearts;</span></td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" height="30" valign="middle" width="44">
                                        序号</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="257">
                                        设备名称</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="64">
                                        型号</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="31">
                                        数量</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="56">
                                        价格</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1</td>
                                    <td bgcolor="#CCCCCC">
                                        全封闭全自动四氯乙烯干洗机</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        PFDQ10</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        45800元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        2</td>
                                    <td bgcolor="#2db3a6">
                                        全自动变频石油干洗机</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">CM10DCF</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        19800元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        3</td>
                                    <td bgcolor="#CCCCCC">全自动变频洗脱两用水洗机</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        SXT-16</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        17850元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        4</td>
                                    <td bgcolor="#2db3a6">全自动节能烘干机</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        HGZ-16</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        9800元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        5</td>
                                    <td bgcolor="#CCCCCC">
                                        衣物输送线616点</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        JF-616</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        9800元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        6</td>
                                    <td bgcolor="#2db3a6">
                                        豪华型双门衣物消毒柜</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        YWXD-C</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        3500元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        7</td>
                                    <td bgcolor="#CCCCCC">
                                        豪华型多功能去渍台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        QZT-2/3</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        3700元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        8</td>
                                    <td bgcolor="#2db3a6">
                                        自动人像整烫机</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        ZRF-1200</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        4900元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        9</td>
                                    <td bgcolor="#CCCCCC">
                                        彩色液晶电脑POS收款开票机全套</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        POS-1</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        6200元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">10</td>
                                    <td bgcolor="#2db3a6">豪华型多功能熨烫台 带去渍</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">DGL105</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">15600元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#cccccc" valign="middle">
                                        11</td>
                                    <td bgcolor="#cccccc">
                                        节能蒸汽发生器</td>
                                    <td align="center" bgcolor="#cccccc" valign="middle">
                                        DZF-9</td>
                                    <td align="center" bgcolor="#cccccc" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#cccccc" valign="middle">
                                        4900元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        12</td>
                                    <td bgcolor="#2db3a6">成衣立体包装机
                                    </td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        FRB-01</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">3650元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#cccccc" height="23" valign="middle">
                                        小计</td>
                                    <td bgcolor="#cccccc">&nbsp;</td>
                                    <td align="center" bgcolor="#cccccc" colspan="3" valign="middle">
                                        <strong>145500元</strong></td>
                                </tr>
                                </tbody>
                            </table></h5>

                    </div>
                    <div class="xl-menu-r">
                        <div class="xl-menu-r1">
                            <div class="xl-menu-r1-t">形象店面 <b></b></div>
                            <div class="xl-menu-r1-c"> <a href="javascript:;"><img src="/frontend/images/z1.jpg" alt=""/></a> </div>
                        </div>
                        <div class="xl-menu-r2">
                            <div class="xl-menu-r2-t">相关案例 <b></b></div>
                            <div class="xl-menu-r2-c"> <a href="javascript:;"><img src="/frontend/images/ali.jpg" alt=""/></a> </div>
                        </div>
                    </div>
                </div>
                <div id="xl-menu3" class="xl-menu" style="display:none;">
                    <div class="xl-menu-l">
                        <div class="blank8"></div>
                        <h5> <style type="text/css">
                                .jmf {
                                    color: #2db3a6;
                                }
                            </style>
                            <table align="center" border="0" cellpadding="2" cellspacing="3" height="367" width="548">
                                <tbody>
                                <tr>
                                    <td align="center" bgcolor="#66CCCC" colspan="5" height="35" valign="middle">
                                        <span style="float: left; padding-left: 50px; font-weight: bold; font-size: 18px; color: #FFF;">中型店方案</span><span style="float: right; padding-right: 50px; font-size: 18px; font-weight: bold; color: #FFF;">推荐指数：&hearts;&hearts;&hearts;&hearts;</span></td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" height="30" valign="middle" width="44">
                                        序号</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="257">
                                        设备名称</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="64">
                                        型号</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="31">
                                        数量</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="56">
                                        价格</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1</td>
                                    <td bgcolor="#CCCCCC">
                                        全自动变频石油干洗机</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        CM4DCF</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        13500元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        2</td>
                                    <td bgcolor="#2db3a6">
                                        全自动变频水洗+烘干一体机</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        SXTH-13</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        16950元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        3</td>
                                    <td bgcolor="#CCCCCC">
                                        豪华型单门消毒柜</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        YWXD-B</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        2200元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        4</td>
                                    <td bgcolor="#2db3a6">成衣立体包装机</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">FRB-01</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">3650元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        5</td>
                                    <td bgcolor="#CCCCCC">真空摇臂吸风熨烫台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">YT-160B</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1680元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        6</td>
                                    <td bgcolor="#2db3a6">节能蒸汽发生器</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">DZF-3</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1200元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        9</td>
                                    <td bgcolor="#CCCCCC">
                                        不锈钢熨斗/胶管2根</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        YC-1</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1套</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        230元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        小计</td>
                                    <td bgcolor="#2db3a6">&nbsp;
                                    </td>
                                    <td align="center" bgcolor="#2db3a6" colspan="3" valign="middle">
                                        39410元</td>
                                </tr>
                                </tbody>
                            </table></h5>
                    </div>
                    <div class="xl-menu-r">
                        <div class="xl-menu-r1">
                            <div class="xl-menu-r1-t">形象店面 <b></b></div>
                            <div class="xl-menu-r1-c"> <a href="javascript:;"><img src="/frontend/images/d11.jpg" alt=""/></a> </div>
                        </div>
                        <div class="xl-menu-r2">
                            <div class="xl-menu-r2-t">相关案例 <b></b></div>
                            <div class="xl-menu-r2-c"> <a href="javascript:;"><img src="/frontend/images/ali.jpg" alt=""/></a> </div>
                        </div>
                    </div>
                </div>
                <div id="xl-menu4" class="xl-menu" style="display:none;">
                    <div class="xl-menu-l">
                        <div class="blank5"></div>
                        <h5> <style type="text/css">
                                .jmf {
                                    color: #2db3a6;
                                }
                            </style>
                            <table align="center" border="0" cellpadding="2" cellspacing="3" height="272" width="548">
                                <tbody>
                                <tr>
                                    <td align="center" bgcolor="#66CCCC" colspan="4" height="35" valign="middle">
                                        <strong>可备选配置设备</strong></td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" height="30" valign="middle">
                                        设备名称</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        价格</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        设备名称</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        价格</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" height="30" valign="middle">
                                        豪华单门消毒柜</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        2200元</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        成衣立体包装机</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        3650元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" height="30" valign="middle">
                                        皮衣护理静音无油气泵</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        1380元</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        进口喷枪+胶管</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        480元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" height="30" valign="middle">
                                        皮衣护理模特</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        580元</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        全自动洗鞋机</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        3600元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" height="30" valign="middle">
                                        衣服输送线（308点）</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        5850元</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        全自动烘鞋杀毒除臭机</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle">
                                        4600元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#CCCCCC" height="30" valign="middle">
                                        豪华收银开票系统/套</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        6200元</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        洗衣管理软件</td>
                                    <td align="center" bgcolor="#CCCCCC" valign="middle">
                                        1200元</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#2db3a6" height="30" valign="middle" width="170">
                                        多功能高效去渍台</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="88">
                                        3700元</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="171">
                                        自动人像整烫机</td>
                                    <td align="center" bgcolor="#2db3a6" valign="middle" width="88">
                                        4900元</td>
                                </tr>
                                </tbody>
                            </table></h5>

                    </div>
                    <div class="xl-menu-r">
                        <div class="xl-menu-r1">
                            <div class="xl-menu-r1-t">形象店面 <b></b></div>
                            <div class="xl-menu-r1-c"> <a href="javascript:;"><img src="/frontend/images/q1.jpg" alt=""/></a> </div>
                        </div>
                        <div class="xl-menu-r2">
                            <div class="xl-menu-r2-t">相关案例 <b></b></div>
                            <div class="xl-menu-r2-c"> <a href="javascript:;"><img src="/frontend/images/ali.jpg" alt=""/></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navR">
            <a href="http://www.ganxi168.com/" title="卡露丝首页">首 页</a>
            <a href="http://www.ganxi168.com/jt/">集团介绍</a>
            <a href="http://www.ganxi168.com/sb/">洗护设备</a>
            <a href="http://www.ganxi168.com/join/">加盟服务</a>
            <a href="http://www.ganxi168.com/xm/">加盟项目</a>
            <a href="http://www.ganxi168.com/kd/">投资开店</a>
            <a href="http://www.ganxi168.com/xy/">培训学院</a>
            <a href="http://www.ganxi168.com/wsxy/o2o/index.html">网上洗衣</a>
            <a class="navRLast" href="http://www.ganxi168.com/kd/dh.html#dh" title="你在烦恼什么?">你在烦恼什么?</a>
        </div>
    </div>
</div>

@yield('main_content')
<!-- 底部开始 -->
<div class="main-01" id="ly">
    <div class="main-bg">
        <div class="mian-bg-1000">
            <div class="main-bg-left">
                <div class="main-bg-left-01"> <img alt="" src="/frontend/images/slogan.png"> </div>
                <div class="main-bg-left-02">
                    <ul class="f18">
                        <li class="left-li-01 f24">我们能为您做什么？</li>
                        <li class="left-li-02">●&nbsp;覆盖&nbsp;<span>99%</span>&nbsp;全国&nbsp;<span>地区</span>，让您最短时间开始盈利！</li>
                        <li class="left-li-02">●&nbsp;提供&nbsp;<span>看店面</span>、<span>设计</span>、<span>培训</span>、<span>售后</span>、<span>管理</span>&nbsp;等10大服务，杜绝开店陷阱！</li>
                        <li class="left-li-02">●&nbsp;提供开店全程&nbsp;<span>一对一专属咨询客服</span>，帮您专业解答各种开店疑问！</li>
                        <li class="left-li-03">所有服务&nbsp;<span>全部免费</span>，仅需10秒&nbsp;<span>填写报名信息</span>，卡露丝洗衣让您省心省力！</li>
                    </ul>
                </div>
                <div class="main-bg-left-03">
                    <div class="pingjia pingjia-01"> <b class="pingjia-01i"><span class="icon-p"></span><span class="f24">评价好</span></b> <b class="pingjia-02i f14">100%好评度<br>
                            每个好评都有据可查</b> </div>
                    <div class="pingjia pingjia-02"> <b class="pingjia-01i"><span class="icon-p"></span><span class="f24">人气高</span></b> <b class="pingjia-02i f14">已经有超过8000家干洗店<br>
                            可以放心加盟</b> </div>
                    <div class="pingjia pingjia-03"> <b class="pingjia-01i"><span class="icon-p"></span><span class="f24">服务全</span></b> <b class="pingjia-02i f14">10大免费服务保障<br>
                            覆盖开店全过程</b> </div>
                </div>
            </div>
            <div class="main-bg-right">
                <div class="login_box fr">
                    <form id="myform"  onsubmit="return false">
                        <input type="hidden" name="action" value="post"/>
                        <input type="hidden" name="diyid" value="1"/>
                        <input type="hidden" name="do" value="2"/>
                        <input type="hidden" name="address" id="address" value="无法获取地址"/>
                        <input type="hidden" name="nrong" id="nrong" value="底部留电话"/>
                        <div class="fb mb5 c0000">您的称呼：</div>
                        <input class="mb10 input" id="name" name="name" type="text"/>
                        <label for="name" style="color:red;display:none;padding: 0px 0px 5px 0px;">请填写您的称呼</label>
                        <div class="fb mb5 c0000">您的手机：</div>
                        <div class="mb20 c0000">
                            <input class="mb5 input" id="phone" name="phone" type="text"/>
                            <label for="phone" style="color:red;display:none;padding: 0px 0px 5px 0px;">请填写正确的手机</label>
                        </div>
                        <input class="login_submit f14 fb mb10" name="" id="next-button" type="submit" value="立即报名"/>
                    </form>
                    <script type="text/javascript">
                        function checkForm(o){
                            var re=/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
                            if(!re.test(o.phone.value)){
                                alert('请输入正确的手机号码。');
                                return false;
                            }

                        }
                    </script>
                    <p class="mb20 tc c0000 f14">咨询热线：<em>400-881-6188</em></p>
                    <p class="mb10 c0000">今日最新留言客户<b style="color:#F00;">161</b>位</p>
                    <div class="login_scroll">
                        <div class="login_scroll_box oh pr">
                            <table id="showbox" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>黄先生</td>
                                    <td width="85">181****7761</td>
                                    <td width="55">刚刚</td>
                                </tr>
                                <tr>
                                    <td>万女士</td>
                                    <td width="85">189****0718</td>
                                    <td width="55">31分钟前</td>
                                </tr>
                                <tr>
                                    <td>李先生</td>
                                    <td width="85">159****5760</td>
                                    <td width="55">31分钟前</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>友情链接： </div>

<div class="both"></div>
<div class="footer_top">
    <div class="m-1200">
        <!-- 底部logo -->
        <div class="footer_logo_nav fl">
            <div class="footer_logo"> <a href="http://www.ganxi168.com/" title="卡露丝国际洗衣">卡露丝国际洗衣</a> </div>
            <div class="footer_nav">
                <ul>
                    <li><a href="http://www.ganxi168.com/jt/ry/" title="品牌实力"><i class="ico_1"></i><em>品牌实力</em></a></li>
                    <li><a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow" title="在线咨询"><i class="ico_2"></i><em>在线咨询</em></a></li>
                    <li><a href="http://www.ganxi168.com/kd/md/" title="成功案例"><i class="ico_3"></i><em>成功案例</em></a></li>
                    <li><a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow" title="来司路线"><i class="ico_4"></i><em>来司路线</em></a></li>
                    <li><a href="http://www.ganxi168.com/xy/ll/" title="技术团队"><i class="ico_5"></i><em>技术团队</em></a></li>
                    <li><a href="http://www.ganxi168.com/" title="返回首页"><i class="ico_6"></i><em>返回首页</em></a></li>
                </ul>
            </div>
        </div>
        <!-- 底部导航 -->
        <div class="footermenu fl">
            <div class="footermenu_div">
                <h3><a href="http://www.ganxi168.com/kd/" title="投资开店"><i class="ico_1"></i><em>投资开店</em></a></h3>
                <ul>
                    <li><a href="http://www.ganxi168.com/kd/lc/">加盟流程</a></li>
                    <li><a href="http://www.ganxi168.com/kd/ys/">加盟优势</a></li>
                    <li><a href="http://www.ganxi168.com/kd/md/">门店展示</a></li>
                    <li><a href="http://www.ganxi168.com/kd/lr/">利润分析</a></li>
                    <li><a href="http://www.ganxi168.com/kd/zn/">加盟指南</a></li>
                    <li><a href="http://www.ganxi168.com/kd/yw/">开店疑问</a></li>
                </ul>
            </div>
            <div class="footermenu_div">
                <h3><a href="http://www.ganxi168.com/sb/" title="洗护设备"><i class="ico_2"></i><em>洗护设备</em></a></h3>
                <ul>
                    <li><a href="http://www.ganxi168.com/sb/gx/">干洗设备</a></li>
                    <li><a href="http://www.ganxi168.com/sb/sx/">水洗设备</a></li>
                    <li><a href="http://www.ganxi168.com/sb/hg/">烘干设备</a></li>
                    <li><a href="http://www.ganxi168.com/sb/xx/">洗鞋设备</a></li>
                    <li><a href="http://www.ganxi168.com/sb/fz/">辅助设备</a></li>
                    <li><a href="http://www.ganxi168.com/sb/xd/">洗涤用品</a></li>
                </ul>
            </div>
            <div class="footermenu_div">
                <h3><a href="http://www.ganxi168.com/join/" title="加盟服务"><i class="ico_3"></i><em>加盟服务</em></a></h3>
                <ul>
                    <li><a href="http://www.ganxi168.com/join/nr/">服务内容</a></li>
                    <li><a href="http://www.ganxi168.com/join/cn/">企业承诺</a></li>
                    <li><a href="http://www.ganxi168.com/join/al/">成功案例</a></li>
                    <li><a href="http://www.ganxi168.com/join/bk/">洗涤百科</a></li>
                    <li><a href="http://www.ganxi168.com/join/gl/">国际管理</a></li>
                    <li><a href="http://www.ganxi168.com/join/xc/">品牌宣传</a></li>
                </ul>
            </div>
            <div class="footermenu_div">
                <h3><a href="http://www.ganxi168.com/xy/" title="培训学院"><i class="ico_4"></i><em>培训学院</em></a></h3>
                <ul>
                    <li><a href="http://www.ganxi168.com/xy/ll/">师资力量</a></li>
                    <li><a href="http://www.ganxi168.com/xy/xm/">培训项目</a></li>
                    <li><a href="http://www.ganxi168.com/xy/plc/">培训流程</a></li>
                    <li><a href="http://www.ganxi168.com/xy/hj/">培训环境</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_weixin fr">
            <table>
                <tr>
                    <td><img alt="卡露丝微信" src="http://www.ganxi168.com/frontend/images/footer_weixin.jpg" class="weixin"></td>
                    <td><h3>卡露丝官方微信</h3>
                        <p>扫描最新优惠 手机随时咨询</p>
                        <p>干洗实时资讯 马上关注！</p></td>
                </tr>
                <tr>
                    <td colspan="2">地址：上海市宝山区城银路555弄</td>
                </tr>
                <tr>
                    <td colspan="2"><a href="#">企业qq：</a></td>
                </tr>
                <tr>
                    <td colspan="2">加盟热线400-881-6188</td>
                </tr>
            
            </table>
        </div>
        <div class="both"></div>
    </div>
    <div class="footer_ico">
        <ul>
            <li><i class="ico_1"></i>高端干洗服务</li>
            <li><i class="ico_2"></i>无菌透明洗衣</li>
            <li><i class="ico_3"></i>超级五星设备</li>
            <li><i class="ico_4"></i>进口环保原料</li>
            <li><i class="ico_5"></i>单件隔离干洗</li>
            <li><i class="ico_6"></i>1小时快速洗衣</li>
            <li><i class="ico_7"></i>免费上门取送</li>
        </ul>
    </div>
    <div class="both"></div>
</div>

<div class="footer_slide">
    <div class="m-1200"> <a class="next"></a><a class="prev"></a>
        <div class="bd">
            <ul>
                <li><img src="http://www.ganxi168.com/frontend/images/botox_1.jpg" alt="botox"></li>
                <li><img src="http://www.ganxi168.com/frontend/images/botox_2.jpg" alt="botox"></li>
                <li><img src="http://www.ganxi168.com/frontend/images/botox_3.jpg" alt="botox"></li>
                <li><img src="http://www.ganxi168.com/frontend/images/botox_4.jpg" alt="botox"></li>
                <li><img src="http://www.ganxi168.com/frontend/images/botox_5.jpg" alt="botox"></li>
                <li><img src="http://www.ganxi168.com/frontend/images/botox_6.jpg" alt="botox"></li>
                <li><img src="http://www.ganxi168.com/frontend/images/botox_7.jpg" alt="botox"></li>
                <li><img src="http://www.ganxi168.com/frontend/images/botox_8.jpg" alt="botox"></li>
            </ul>
        </div>
    </div>
</div>
<div class="footer_beian"> 
    <span>沪ICP备09015577号-1</span>
    <span>加盟热线：400-881-6188</span>
    <span>上海露丽洗涤设备有限公司   版权所有</span>
</div>
<script src="http://www.ganxi168.com/frontend/js/class11902.js"></script>
<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/jquery.jcarousellite-1.0.1.js"></script>
<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/webindex.js"></script>
<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/common.js"></script>
<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/index.js"></script>
</body>
@yield('footerlibs')
</body>
</html>
