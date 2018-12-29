@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
@stop
@section('main_content')
    <div class="box1">
        <div class="box">
            <div class="leftbox">
                <div class="menu1">
                    <h3><img alt="" src="/frontend/images/a_1.png"></h3>
                    <ul>

                        <li><a href="/web/20161021083614/http://ganxi58.com/jt/js/">企业介绍</a></li>

                        <li><a href="/web/20161021083614/http://ganxi58.com/jt/wh/">企业文化</a></li>

                        <li><a href="/web/20161021083614/http://ganxi58.com/jt/jg/">企业架构</a></li>

                        <li><a href="/web/20161021083614/http://ganxi58.com/jt/ry/">资质荣誉</a></li>

                        <li><a href="/web/20161021083614/http://ganxi58.com/news/">新闻资讯</a></li>

                        <li><a href="/web/20161021083614/http://ganxi58.com/jt/zp/">招贤纳士</a></li>

                    </ul>
                </div>
                <div class="side11">
                    <div id="focus1" class="bgfff">
                        <div class="zj_msg"><a href="/web/20161021083614/http://ganxi58.com/sb/sx/" target="_blank"></a></div>

                        <div class="titlemb"><span>产品中心</span></div>


                        <div class="doctors_inner">

                            <ul>
                                <li>
                                    <a href="/web/20161021083614/http://ganxi58.com/sb/sx/248.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150820/1-150R01615545N.jpg" alt="变频洗脱" width="80" height="80">
                                        变频洗脱</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/sb/sx/249.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150820/1-150R0161641606.jpg" alt="变频洗脱" width="80" height="80">
                                        变频洗脱</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/sb/gx/214.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150802/1-150P209543E17.jpg" alt="变频水洗" width="80" height="80">
                                        变频水洗</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/sb/sx/250.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150820/1-150R0161H20-L.jpg" alt="全自动变" width="80" height="80">
                                        全自动变</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/sb/hg/271.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150824/1-150R4102153K5.jpg" alt="自动人像" width="80" height="80">
                                        自动人像</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/sb/xx/270.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150824/1-150R4102041G4.jpg" alt="自动感应" width="80" height="80">
                                        自动感应</a>

                                </li>

                            </ul>

                        </div>

                    </div>
                </div>
                <div><a title="门店选址评估" href="/web/20161021083614/http://ganxi58.com/" target="_blank"> <img src="/web/20161021083614im_/http://ganxi58.com/templets/lz/images/slv.png" width="250" height="112" alt="门店选址评估"></a></div>

                <div class="side11">
                    <div id="focus1" class="bgfff">
                        <div class="zj_msg"><a href="/web/20161021083614/http://ganxi58.com/kd/md/" target="_blank"></a></div>

                        <div class="titlemb"><span>形象店展示</span></div>


                        <div class="doctors_inner">

                            <ul>
                                <li>
                                    <a href="/web/20161021083614/http://ganxi58.com/kd/md/239.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150820/1-150R01536010-L.jpg" alt="天津干洗" width="80" height="80">
                                        天津干洗</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/kd/md/230.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150806/150808/1-150PQ324545I.jpg" alt="日照店" width="80" height="80">
                                        日照店</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/kd/md/231.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150808/1-150PQ200300-L.jpg" alt="平湖店" width="80" height="80">
                                        平湖店</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/kd/md/242.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150820/1-150R01542070-L.jpg" alt="盛泽干洗" width="80" height="80">
                                        盛泽干洗</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/kd/md/233.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/allimg/150820/1-150R01516300-L.jpg" alt="贵阳干洗" width="80" height="80">
                                        贵阳干洗</a>
                                    <a href="/web/20161021083614/http://ganxi58.com/kd/md/243.html">
                                        <img src="/web/20161021083614im_/http://ganxi58.com/uploads/151022/1-1510221FZ1b1.jpg" alt="六安干洗" width="80" height="80">
                                        六安干洗</a>

                                </li>

                            </ul>

                        </div>

                    </div>
                </div>

            </div>

            <div class="rightbox">
                <div class="titlen"><strong>NEWS</strong><span><a href="http://web.archive.org/web/20161021083614/http://www.ganxi58.com/">主页</a> &gt; <a href="/web/20161021083614/http://ganxi58.com/jt/">集团介绍</a> &gt; <a href="/web/20161021083614/http://ganxi58.com/news/">新闻资讯</a> &gt;  </span> </div>
                <div class="bg_1"></div>
                <div class="bg_2">

                    <ul>

                        <div class="news">
                            <ul class="news2">
                                <li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/525.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁怎么做才赚钱</a><a id="n2">16-10-21</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/524.html">&gt;&gt;&nbsp;&nbsp;开干洗店为什么要选干洗加盟</a><a id="n2">16-10-20</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/523.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁的未来趋势</a><a id="n2">16-10-19</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/522.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟还有市场吗</a><a id="n2">16-10-18</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/521.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁后续增值服务到位吗</a><a id="n2">16-10-14</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/520.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟如何快速抢占市场</a><a id="n2">16-10-13</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/519.html">&gt;&gt;&nbsp;&nbsp;干洗加盟助你成功</a><a id="n2">16-10-12</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/518.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁好不好做</a><a id="n2">16-10-11</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/517.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁经营前景前瞻</a><a id="n2">16-10-10</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/516.html">&gt;&gt;&nbsp;&nbsp;干洗加盟商家所具备的条件</a><a id="n2">16-10-09</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/515.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁加盟费贵不贵</a><a id="n2">16-09-29</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/514.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁的选择方法</a><a id="n2">16-09-28</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/513.html">&gt;&gt;&nbsp;&nbsp;如何选择干洗店加盟连锁</a><a id="n2">16-09-27</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/512.html">&gt;&gt;&nbsp;&nbsp;干洗加盟哪个品牌好</a><a id="n2">16-09-26</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/511.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁生意好不好做</a><a id="n2">16-09-23</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/510.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁值得投资吗</a><a id="n2">16-09-22</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/509.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟选择品牌非常关键</a><a id="n2">16-09-21</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/507.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟选哪一家比较好</a><a id="n2">16-09-20</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/506.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁创造属于你的商机</a><a id="n2">16-09-19</a></li><li id="x1">

                                    <a href="/web/20161021083614/http://ganxi58.com/news/505.html">&gt;&gt;&nbsp;&nbsp;干洗店加盟连锁怎么那么火</a><a id="n2">16-09-18</a></li><li>

                                    <a href="/web/20161021083614/http://ganxi58.com/news/504.html">&gt;&gt;&nbsp;&nbsp;干洗加盟是否成为创业者的首选</a><a id="n2">16-09-14</a></li>
                            </ul>
                        </div>
                        <div class="pagination-wrapper">
                            <div class="pagination">
                                <li>首页</li>
                                <li><a href="6_2.html">下一页</a></li>
                                <li><a href="6_4.html">末页</a></li>

                            </div>
                        </div>


                        <div class="bg_3"></div>

                    </ul></div>
            </div>
        </div>
    </div>
@stop
