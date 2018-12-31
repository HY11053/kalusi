<?php

namespace App\Http\Controllers\Mobile;

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
        $shebeilists=Archive::whereIn('typeid',Arctype::where('reid',8)->pluck('id'))->take(6)->orderBy('id','desc')->get();
        $newslists=Archive::where('typeid',6)->take(5)->orderBy('id','desc')->get();
        $baikelists=Archive::where('typeid',18)->take(5)->orderBy('id','desc')->get();
        $askists=Archive::where('typeid',37)->take(5)->orderBy('id','desc')->get();
        $latestlists=Archive::take(10)->orderBy('id','desc')->get();
        return view('mobile.index',compact('shebeilists','newslists','baikelists','askists','latestlists'));
    }

}
