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
            <div class="ul_list">
                <ul class="list-group">
                    @foreach($pagelists as $pagelist)
                        <li class="block news-item space white-bg clearfix" data-id="39722" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">
                            <div class="flex justify">
                                <div class="col-xs-7 j-left ">
                                    <h3 class="j-title overWord"><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">{{$pagelist->title}}</a></h3>
                                    <div class="overWord">{{str_limit($pagelist->description,100,'...')}}</div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="full-img">
                                        <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html"><img class="img-responsive" src="{{$pagelist->litpic}}" alt="{{$pagelist->title}}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="resource-label resource-label-v2 clearfix">
                                <span class="btn news-type btn-v2 float-left">资讯</span>
                                <span class="float-left flex-1">{{$pagelist->arctype->typename}}</span>
                                <span class="float-right right view-right">
                                    <span class=" clearfix"><i class="icon icon-views"></i> <span> {{$pagelist->click*100}}</span></span>
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <nav>
                {!! $pagelists->links() !!}
            </nav>
        </div>
        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="clear: both;">
            <p class="bg-primary">　<span class="glyphicon glyphicon-flag" style="font-size: 12pt;">　{{$thistypeinfo->typename}}</span></p>
        </ul>
        <ul class="list-group tjw_z">
            @foreach($productions as $production)
                <li class="list-group-item"><a href="/{{$production->arctype->real_path}}/{{$production->id}}.html">{{$production->title}}</a></li>
            @endforeach
        </ul>
    </div>
@stop