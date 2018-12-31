@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" />
    <meta property="og:image" content="{{config('app.url')}}{{str_replace(config('app.url'),'',$thisarticleinfos->litpic)}}"/>
@stop
@section('main_content')
    <div style="background:#FFF; margin:0 auto; width:1000px;">
        <section class="top20">
            <div id="boxl" class="gr">
                <div id="focus" class="bgfff">
                    <div class="zj_msg"><a href="http://ganxi58.com/sb/sx/" target="_blank"></a></div>
                    <div class="titlemb"><span>产品中心</span></div>
                    <div class="doctors_inner">
                        <ul>
                            <li>
                                @foreach($productions as $production)
                                    <a href="/{{$production->arctype->real_path}}/{{$production->id}}.html">
                                        <img src="{{$production->litpic}}" alt="{{$production->title}}" width="80" height="80">
                                        {{$production->title}}
                                    </a>
                                @endforeach
                            </li>

                        </ul>

                    </div>

                </div>

                <div style=" position:relative; height:180px;border-top:1px dotted #dfdfdf;left: 24px; top:14px; padding-top:21px"> <a href="#" id="listapDiv1" rel="nofollow" target="_blank"></a> <a href="#" onclick="" id="listapDiv2" target="_blank"></a> <img src="/frontend/images/list_10_01.png" width="254" height="104">

                </div>
                <div id="focus" class="bgfff">
                    <div class="zj_msg"><a href="http://ganxi58.com/kd/md/" target="_blank"></a></div>
                    <div class="titlemb"><span>形象店展示</span></div>
                    <div class="doctors_inner">
                        <ul>
                            <li>
                                @foreach($mendianlists as $mendianlist)
                                    <a href="/{{$mendianlist->arctype->real_path}}/{{$mendianlist->id}}.html"><img src="{{$mendianlist->litpic}}" alt="{{$mendianlist->title}}" width="80" height="80">{{$mendianlist->title}}</a>
                                @endforeach
                            </li>

                        </ul>

                    </div>

                </div>
                <div class="boxlbox">
                    <div class="titlemb2"><span>精彩图文</span></div>

                    <div class="zj_msg"><a href="http://ganxi58.com/xm/fx/" target="_blank"></a></div>
                    <ul>

                        @foreach($cnews as $cnew)
                        <li class="zt_list"> <span><a href="/{{$cnew->arctype->real_path}}/{{$cnew->id}}.html" target="_blank"><img src="{{$cnew->litpic}}" width="80" height="65"></a></span>
                            <div class="zt_listtxt">
                                <h3><a href="/{{$cnew->arctype->real_path}}/{{$cnew->id}}.html" target="_blank">{{$cnew->title}}</a></h3>
                                <p><a href="/{{$cnew->arctype->real_path}}/{{$cnew->id}}.html" target="_blank"> {{str_limit($cnew->description,30,'...')}}</a></p>
                            </div>

                        </li>
                        @endforeach
                    </ul>

                </div>

                <div class="boxlbox">
                    <div class="xihuan_qh_nav titlemb">
                        <div class="titlemb2"><span>卡露丝推荐</span></div>
                    </div>
                    <div class="xihuan_qh_txtbox">
                        <div class="xihuan_qh_txt">
                            <ul>
                                @foreach($latesenews as $latesenew)
                                <li><a href="/{{$latesenew->arctype->real_path}}/{{$latesenew->id}}.html" target="_blank">{{$latesenew->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div id="boxr" class="gl bgfff">

                <div class="items">当前位置：<a href="http://www.ganxi58.com/">主页</a> &gt; <a href="http://ganxi58.com/jt/">集团介绍</a> &gt; <a href="http://ganxi58.com/news/">新闻资讯</a> &gt;  </div>

                <div class="content_tie">
                    <h1>{{$thisarticleinfos->title}}</h1>
                    <p>时间：{{$thisarticleinfos->created_at}}   | 来源：<span>卡露丝国际洗衣</span></p>

                </div>

                <div class="content">
                    {!! $thisarticleinfos->body !!}
                    <div class="gclear"></div>
                    <div class="ov"></div>
                </div>

                <div class="sx">

                    <ul>

                        <li class="s">&nbsp;上一篇：@if(isset($prev_article->id))<a href="/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}.html">{{$prev_article->title}}</a>@else 没有了 @endif </li>

                        <li class="x">&nbsp;下一篇：@if(isset($next_article->id))<a href="/{{$next_article->arctype->real_path}}/{{$next_article->id}}.html">{{$next_article->title}}</a>@else 没有了 @endif</li>

                    </ul>

                </div>

                <div class="content_two">

                    <div class="fx1 relative">

                        <div id="fx1apDiv3">分享到：</div>

                        <div id="fx1apDiv4"><img src="/frontend/images/i24_03.jpg" width="161" height="73"></div>

                        <div id="fx1apDiv5"> <a href="#" target="_blank" id="fx1apDiv5a1"></a> <a href="#"></a> </div>

                        <div id="fx1apDiv6" class="bshare-custom"><div class="bsPromo bsPromo1"></div>

                            <a title="分享到新浪微博" class="bshare-sinaminiblog" id="fx1apDiv6a1"></a>

                            <a title="分享到腾讯微博" class="bshare-qqmb" id="fx1apDiv6a2"></a>

                            <a href="分享到微信" class="bshare-weixin" id="fx1apDiv6a3"></a>

                            <a title="分享到QQ空间" class="bshare-qzone" id="fx1apDiv6a4"></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="gclear"></div>

        </section>
    </div>
@stop