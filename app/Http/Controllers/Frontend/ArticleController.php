<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\AdminModel\Comment;

class ArticleController extends Controller
{
    /**普通文档界面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function GetArticle(Request $request,$path,$id)
    {
        $thistypeinfos=Arctype::findOrFail(Arctype::where('real_path',$path)->value('id'));
        $thisarticleinfos=Archive::findOrFail($id);
        $published=$thisarticleinfos->created_at;
        DB::table('archives')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
        $prev_article = Archive::latest('published_at')->find($this->getPrevArticleId($thisarticleinfos->id));
        $next_article = Archive::latest('published_at')->find($this->getNextArticleId($thisarticleinfos->id));
        $cnews=Archive::where('flags','like','%c%')->take(3)->latest()->orderBy('id','desc')->get();
        $latesenews=Archive::take(5)->latest()->orderBy('id','desc')->get();
        $productions=Archive::whereIn('typeid',Arctype::where('reid',8)->pluck('id'))->take(6)->get();
        $mendianlists =Archive::where('typeid',34)->take(6)->get();
        return view('frontend.article_article',compact('thisarticleinfos','prev_article','next_article','latesenews','productions','mendianlists','cnews'));
    }

    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->max('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->min('id');
    }

}
