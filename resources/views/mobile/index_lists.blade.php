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
            <div class="box box-solid">
                <div class="box-header panel-heading with-border">
                    <span class="glyphicon glyphicon-send"></span>
                    <h3 class="box-title">{{$thistypeinfo->typename}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {!! $thistypeinfo->contents !!}
                </div>
                <!-- /.box-body -->
            </div>
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