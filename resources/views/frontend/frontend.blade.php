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

        <div class="navR">
            <a href="http://www.ganxi168.com/" title="卡露丝首页">首 页</a>
            <a href="http://www.ganxi168.com/jt/">集团介绍</a>
            <a href="http://www.ganxi168.com/sb/">洗护设备</a>
            <a href="http://www.ganxi168.com/join/">加盟服务</a>
            <a href="http://www.ganxi168.com/xm/">加盟项目</a>
            <a href="http://www.ganxi168.com/kd/">投资开店</a>
            <a href="http://www.ganxi168.com/xy/">培训学院</a>
            <a href="http://www.ganxi168.com/wsxy/o2o/">网上洗衣</a>
            <a class="navRLast" href="http://www.ganxi168.com/kd/dh.html#dh" title="你在烦恼什么?">你在烦恼什么?</a>
        </div>
    </div>
</div>

@yield('main_content')
<!-- 底部开始 -->
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

<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/jquery.jcarousellite-1.0.1.js"></script>
<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/webindex.js"></script>
<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/common.js"></script>
<script type="text/javascript" src="http://www.ganxi168.com/frontend/js/index.js"></script>
<script src="http://www.ganxi168.com/frontend/js/class11902.js"></script>
</body>
@yield('footerlibs')
</body>
</html>
