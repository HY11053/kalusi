@extends('mobile.mobile')
@section('headlibs')
    <title>{{$thistypeinfo->title}}_UCC干洗</title>
    <meta name="keywords" content="{{$thistypeinfo->keywords}}" />
    <meta name="description" content="{{$thistypeinfo->description}}" />
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" >
@stop
@section('main_content')
    <p class="bg-primary">   <a href="/">干洗店加盟</a> ><a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></p>
    <div class="container-fluid list_clear">
        <div clas="row">
            <img class="img-responsive" src="/templets/laundry/images/shebei_bn.jpg">
            <div class="box box-solid">
                <div class="box-header panel-heading with-border">
                    <span class="glyphicon glyphicon-send"></span>
                    <h3 class="box-title">干洗店设备价格</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong>干洗店设备</strong>是开干洗店比较重要的硬件设施，也是开干洗店最大一笔投资，而<strong>干洗店设备</strong>当中价格较高的就是干洗机,因此，想开干洗店的朋友可以依据目前市场情况和自身经济实力出发，来选择干洗设备，以上图例展示的是众多干洗店加盟商选购干洗店设备的最好组合，仅供参考！
                </div>
                <!-- /.box-body -->
            </div>
            <div class="ysb">
                <div class="title">
                    <h3>干洗店设备|干洗店设备组合</h3>
                </div>
                <ul>
                    @foreach($productions as $production)
                    <li>
                        <a href="/{{$production->arctype->real_path}}/{{$production->id}}.html" title="{{$production->title}}" id="{{$production->id}}">
                            <img src="{{$production->litpic}}" width="160" height="157" alt="{{$production->title}}">
                        </a>
                        <h5>
                            <a href="/{{$production->arctype->real_path}}/{{$production->id}}.html" title="{{$production->title}}">{{$production->title}}</a></h5>
                        <p style="color:#F00">￥{{$production->jiage}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="clear: both;">
            <p class="bg-primary">　<span class="glyphicon glyphicon-flag" style="font-size: 12pt;"></span>　干洗店设备推荐</p>
        </ul>
        <ul class="list-group tjw_z">
            @foreach($shebeilists as $shebeilist)
            <li class="list-group-item"><a href="/{{$shebeilist->arctype->real_path}}/{{$shebeilist->id}}.html">{{$shebeilist->title}}</a></li>
            @endforeach

        </ul>

        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="clear: both;">
            <p class="bg-primary">　<span class="glyphicon glyphicon-flag" style="font-size: 12pt;"></span>　干洗店设备选购</p>
        </ul>
        <ul class="list-group tjw_z">
            @foreach($shebeixuangoulists as $shebeixuangoulist)
                <li class="list-group-item"><a href="/{{$shebeixuangoulist->arctype->real_path}}/{{$shebeixuangoulist->id}}.html">{{$shebeixuangoulist->title}}</a></li>
            @endforeach
        </ul>

        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="clear: both;">
            <p class="bg-primary">　<span class="glyphicon glyphicon-flag" style="font-size: 12pt;"></span>　干洗店设备价格</p>
        </ul>
        <ul class="list-group tjw_z">
            @foreach($shebeijiagelists as $shebeijiagelist)
                <li class="list-group-item"><a href="/{{$shebeijiagelist->arctype->real_path}}/{{$shebeijiagelist->id}}.html">{{$shebeijiagelist->title}}</a></li>
            @endforeach
        </ul>

        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="clear: both;">
            <p class="bg-primary">　<span class="glyphicon glyphicon-flag" style="font-size: 12pt;"></span>干洗设备最新资讯</p>
        </ul>
        <ul class="list-group tjw_z">
            @foreach($shebeis as $shebei)
                <li class="list-group-item"><a href="/{{$shebei->arctype->real_path}}/{{$shebei->id}}.html">{{$shebei->title}}</a></li>
            @endforeach
        </ul>
    </div>
@stop