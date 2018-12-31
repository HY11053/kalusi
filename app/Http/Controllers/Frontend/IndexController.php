<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\flink;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function Index()
    {
        //项目抢先看
        $huodonglists=Archive::where('typeid',21)->take(5)->orderBy('id','desc')->get();
        $hotarticle=Archive::where('typeid',6)->where('flags','like','%h%')->first();
        $newslists=Archive::where('typeid',6)->take(6)->orderBy('id','desc')->get();
        $flinks=flink::latest()->take(25)->get();
        return view('frontend.index',compact('huodonglists','hotarticle','newslists','flinks'));
    }

}
