<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Acreagement;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListNewsController extends Controller
{
    /**文档列表 通配 包含普通文档 品牌文档及产品文档
     * @param $path
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listNews(Request $request,$path,$page=0)
    {
        $typeid=Arctype::where('real_path',preg_replace('/\/page\/[0-9]+/','',$request->path()))->value('id')?:abort(404);
        $thistypeinfo=Arctype::where('id',$typeid)->first();
        if ($thistypeinfo->reid)
        {
            $typeids=Arctype::where('reid',$thistypeinfo->reid)->pluck('id');
            $sontypes=Arctype::whereIn('id',$typeids)->get();
        }else{
            $sontypes=Arctype::where('reid',$typeid)->get();
        }
        $productions=Archive::whereIn('typeid',Arctype::where('reid',8)->pluck('id'))->take(6)->get();
        $mendianlists =Archive::where('typeid',34)->take(6)->get();
        $cid=$path;
        //针对不同栏目类型返回不同类型页面
        //普通文档列表
        if(Arctype::where('id',$typeid)->value('mid')==0)
        {
            $pagelists=Archive::where('typeid',$typeid)->orderBy('published_at','desc')->paginate($perPage = 13, $columns = ['*'], $pageName = 'page', $page);
            $pagelists= Paginator::transfer(
                $cid,//传入分类id,
                $pagelists//传入原始分页器
            );
            return view('frontend.list_article',compact('thistypeinfo','pagelists','sontypes','productions','mendianlists'));
        }elseif (Arctype::where('id',$typeid)->value('mid')==1)
        {
            return view('frontend.index_lists',compact('thistypeinfo','pagelists','productions','mendianlists','sontypes'));
        }
    }

    /**设备列表页
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function shebeiList(Request $request,$page=0)
    {
        $typeid=Arctype::where('real_path',preg_replace('/\/page\/[0-9]+/','',$request->path()))->value('id')?:abort(404);
        $thistypeinfo=Arctype::where('id',$typeid)->first();
        $cid=$request->path();
        if ($thistypeinfo->reid)
        {
            $pagelists=Archive::where('typeid',$typeid)->orderBy('published_at','desc')->paginate($perPage = 13, $columns = ['*'], $pageName = 'page', $page);
        }else{
            $typeids=Arctype::where('reid',$thistypeinfo->reid)->pluck('id');
            $pagelists=Archive::whereIn('typeid',$typeids)->orderBy('id','desc')->paginate($perPage = 13, $columns = ['*'], $pageName = 'page', $page);
        }
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $pagelists//传入原始分页器
        );
        return view('frontend.shebei_list',compact('thistypeinfo','pagelists','sontypes','productions','mendianlists'));

    }
}
