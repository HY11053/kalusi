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
                    @foreach($pagelists as $pagelist)
                        <li>
                            <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" title="{{$pagelist->title}}" id="{{$pagelist->id}}">
                                <img src="{{$pagelist->litpic}}" width="160" height="157" alt="{{$pagelist->title}}">
                            </a>
                            <h5>
                                <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" title="{{$pagelist->title}}">{{$pagelist->title}}</a></h5>
                            <p style="color:#F00">￥{{$pagelist->jiage}}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@stop