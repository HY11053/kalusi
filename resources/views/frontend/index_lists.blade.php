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
                        <div class="zj_msg"><a href="/sb/sx/" target="_blank"></a></div>
                        <div class="titlemb"><span>产品中心</span></div>
                        <div class="doctors_inner">
                            <ul>
                                <li>
                                    @foreach($productions as $production)
                                    <a href="/{{$production->arctype->real_path}}/{{$production->id}}.html">
                                        <img src="{{$production->title}}" alt="{{$production->title}}" width="80" height="80">
                                        {{$production->title}}
                                    </a>
                                   @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div><a title="门店选址评估" href="/" target="_blank"> <img src="/frontend/images/slv.png" width="250" height="112" alt="门店选址评估"></a></div>

                <div class="side11">
                    <div id="focus1" class="bgfff">
                        <div class="zj_msg"><a href="/kd/md/" target="_blank"></a></div>
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
                <div class="titlen"><strong>Group Introduction</strong>
                    <span><a href="{{config('app.url')}}">主页</a> &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a> &gt;  </span> </div>
                <div class="bg_1"></div>
                <div class="bg_2">
                    <div class="title1"><strong>{{$thistypeinfo->typename}}</strong></div>
                    <div class="introduction">
                        {!! $thistypeinfo->contents !!}
                    </div>
                </div>
                <div class="bg_3"></div>
            </div>
        </div>
    </div>
@stop
