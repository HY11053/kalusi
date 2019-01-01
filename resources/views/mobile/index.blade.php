@extends('mobile.mobile')
@section('headlibs')
<title>{{config('app.webname')}}</title>
<meta name="description" content="{{config('app.description')}}">
<meta name="keywords" content="{{config('app.keywords')}}">
<meta name="author" content="卡露丝国际洗衣">
<link rel="canonical" href="{{config('app.url')}}" >
<meta name="baidu-site-verification" content="hHwAKFLfhj" />
<meta name="sogou_site_verification" content="hbZyekUb3t"/>
@stop
@section('main_content')
    <p class="bg-primary">  <em class="col-xs-10"><span class="glyphicon glyphicon-comment"></span><a  href="javascript:void(0);" onclick="online();return false;">点击快速留言</a></em></p>
    <div class="container">
        <div class="row">
            <ul class="clearfix-m col-xs-12">
                <div class="index_headBtn clear">
                    <div><a href="/jt/"><img src="/mobile/images/indexIcos/icon1.png"><span>集团介绍 </span></a></div>
                    <div><a href="/sb/"><img src="/mobile/images/indexIcos/icon2.png"><span>洗护设备 </span></a></div>
                    <div><a href="/join/"><img src="/mobile/images/indexIcos/icon3.png"><span>加盟服务 </span></a></div>
                    <div><a href="/xm/"><img src="/mobile/images/indexIcos/icon4.png"><span>加盟项目 </span></a></div>
                    <div><a href="/kd/"><img src="/mobile/images/indexIcos/icon5.png"><span>投资开店 </span></a></div>
                    <div><a href="/news/"><img src="/mobile/images/indexIcos/icon6.png"><span>新闻资讯 </span></a></div>
                    <div><a href="/join/bk/"><img src="/mobile/images/indexIcos/icon7.png"><span>洗涤百科 </span></a></div>
                    <div><a href="/kd/yw/"><img src="/mobile/images/indexIcos/icon8.png"><span>开店疑问 </span></a></div>
                </div>
            </ul>
        </div>
    </div>
    <!--店面-->
    <div class="ys">
        <div class="title"><h3>卡露丝国际洗衣干洗店加盟投资规模分类</h3></div>
        <ul>
            <li> <img src="/mobile/images/ys01.jpg"><h5>三星干洗店</h5><p>三星店方案A型</p>  </li>
            <li> <img src="/mobile/images/ys01.jpg"><h5>四星干洗店</h5><p>四星店方案B型</p>  </li>
            <li> <img src="/mobile/images/ys01.jpg"><h5>旗舰店加盟</h5><p>旗舰店方案</p>  </li>
        </ul>
    </div>
    <!--店面-->
    <!--shebei show-->

    <div class="cp-show">
        <div class="cp-show-header"><span>干洗设备选购指南</span></div>
        <ul class="cp-show-list clearfix">
            @foreach($shebeilists as $shebeilist)
            <li>
                <a href="/{{$shebeilist->arctype->real_path}}/{{$shebeilist->id}}.html"><img src="{{$shebeilist->litpic}}"></a>
                <span class="cp-font">
            <a href="/{{$shebeilist->arctype->real_path}}/{{$shebeilist->id}}.html">{{$shebeilist->title}}</a>
          </span>
            </li>
            @endforeach
        </ul>
    </div>
    <!--shebei show-->

    <div class="zonghe">
        <ul class="zonghe-nav clearfix">

            <li>
                <h3 class="zonghe-nav-moren">新闻资讯</h3>
                <div class="zonghe-con" style="display: block;">
                    @foreach($newslists as $newslist)
                        <div class="zonghe-con-list clearfix">
                            <a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html"><img src="{{$newslist->litpic}}"></a>
                            <div class="zonghe-right">
                                <a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html">{{$newslist->title}}</a>
                                <span class="zonghe-con-font">{{$newslist->description}}</span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </li>
            <li>
                <h3>洗涤百科</h3>
                <div class="zonghe-con">
                    @foreach($baikelists as $baikelist)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$baikelist->arctype->real_path}}/{{$baikelist->id}}.html"><img src="{{$baikelist->litpic}}"></a>
                        <div class="zonghe-right">
                            <a href="/{{$baikelist->arctype->real_path}}/{{$baikelist->id}}.html">{{$baikelist->title}}</a>
                            <span class="zonghe-con-font">{{$baikelist->description}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </li>

            <li>
                <h3>开店疑问</h3>
                <div class="zonghe-con">
                    @foreach($askists as $askist)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$askist->arctype->real_path}}/{{$askist->id}}.html"><img src="{{$askist->litpic}}"></a>
                        <div class="zonghe-right">
                            <a href="/{{$askist->arctype->real_path}}/{{$askist->id}}.html">{{$askist->title}}</a>
                            <span class="zonghe-con-font">{{$askist->description}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </li>

        </ul>

    </div>

    <div class="koubei">
        <h3>卡露丝国际洗衣干洗店加盟热点资讯</h3>
        <div class="boxkb" id="boxkb">
            <div class="bd">
                <ul>
                    @foreach($latestlists as $latestlist)
                    <li><span class="date">{{date('Y-m-d',strtotime($latestlist->created_at))}}</span><a class="txt" href="/{{$latestlist->arctype->real_path}}/{{$latestlist->id}}.html">{{$latestlist->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--留言-->
@stop