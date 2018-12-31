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
<div class="product">
    @foreach($pagelists as $pagelist)
    <dl class="pd_list_dl">
        <dt>
            <a target="_blank" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" title="{{$pagelist->title}}">
            <img src="{{$pagelist->litpic}}" alt="{{$pagelist->title}}" title="{{$pagelist->title}}"></a>
        </dt>
        <dd>
            <a target="_blank" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" title="{{$pagelist->title}}">{{$pagelist->title}}</a>
        </dd>
    </dl>
    @endforeach
</div>
<div class="pagination-wrapper">
    {!! $pagelists->links() !!}
</div>
@stop