@extends('mobile.mobile')
@section('headlibs')
    <title>{{$thistypeinfo->title}}_卡露丝国际洗衣</title>
    <meta name="keywords" content="{{$thistypeinfo->keywords}}" />
    <meta name="description" content="{{$thistypeinfo->description}}" />
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" >
@stop
@section('main_content')
    <p class="bg-primary">   <a href="/">干洗店加盟</a> ><a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></p>
    <div class="container-fluid list_clear">
        <div clas="row">
            <div class="ysb">
                <ul>
                    @foreach($pagelists as $pagelist)
                        <li>
                            <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" title="{{$pagelist->title}}" id="{{$pagelist->id}}">
                                <img src="{{$pagelist->litpic}}" width="160" height="157" alt="{{$pagelist->title}}">
                            </a>
                            <h5>
                                <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" title="{{$pagelist->title}}">{{$pagelist->title}}</a></h5>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@stop