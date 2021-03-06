@extends('mobile.mobile')
@section('headlibs')
    <title>{{$thisarticleinfos->title}}-卡露丝国际洗衣</title>
    <meta name="description" content="{{$thisarticleinfos->description}}">
    <meta name="keywords" content="{{$thisarticleinfos->keywords}}">
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" >
@stop
@section('main_content')
<p class="bg-primary">　<a href='/'>卡露丝国际洗衣店加盟</a> > <a href='/{{$thistypeinfo->real_path}}/'>{{$thistypeinfo->typename}}</a></p>
<div class="container-fluid list_clear">
    <div clas="row">
        <div class="col-xs-12">
            <div id="content">
                <h1>{{$thisarticleinfos->title}}</h1>
                <small>时间：{{$thisarticleinfos->created_at}}　|　浏览量:{{$thisarticleinfos->click}}</small>
                {!! $thisarticleinfos->body !!}
             </div>
        </div>
        <div class="shangxiapian clearfix">
            <span>上一篇：@if(!empty($prev_article))<a href='/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}.html'>{{$prev_article->title}}</a>@else没有了@endif </span>
            <span>下一篇：@if(!empty($next_article))<a href='/{{$next_article->arctype->real_path}}/{{$next_article->id}}.html'>{{$next_article->title}}</a>@else 没有了@endif </span>
        </div>
    </div>
    <ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="clear: both;">
        <p class="bg-primary">　<span class="glyphicon glyphicon-flag" style="font-size: 12pt;">　相关阅读</span></p>
    </ul>
    <ul class="list-group tjw_z">
        @foreach($latesenews as $latesenew)
        <li class="list-group-item"><a href="/{{$latesenew->arctype->real_path}}/{{$latesenew->id}}.html">{{$latesenew->title}}</a></li>
        @endforeach
    </ul>
</div>
@stop
