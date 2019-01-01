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
                        @foreach($sontypes as $sontype)
                            <li><a href="/{{$sontype->real_path}}/">{{$sontype->typename}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="side11">
                    <div id="focus1" class="bgfff">
                        <div class="zj_msg"><a href="http://www.ganxi168.com/sb/sx/" target="_blank"></a></div>
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
                </div>
                <div><a title="门店选址评估" href="http://www.ganxi168.com/" target="_blank"> <img src="http://www.ganxi168.com/templets/lz/images/slv.png" width="250" height="112" alt="门店选址评估"></a></div>

                <div class="side11">
                    <div id="focus1" class="bgfff">
                        <div class="zj_msg"><a href="http://www.ganxi168.com/kd/md/" target="_blank"></a></div>
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
                </div>

            </div>

            <div class="rightbox">
                <div class="titlen"><strong>NEWS</strong><span><a href="{{config('app.url')}}">主页</a> &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></span> </div>
                <div class="bg_1"></div>
                <div class="bg_2">
                    <ul>
                        <div class="news">
                            <ul class="news2">
                                <li>
                                    @foreach($pagelists as $pagelist)
                                    <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">{{$pagelist->title}}</a><a id="n2">{{date('Y-m-d',strtotime($pagelist->created_at))}}</a></li><li id="x1">
                                    @endforeach
                            </ul>
                        </div>
                        <div class="pagination-wrapper">
                            {!! $pagelists->links() !!}
                        </div>
                        <div class="bg_3"></div>
                    </ul></div>
            </div>
        </div>
    </div>
@stop
