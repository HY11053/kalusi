<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;

class CheckToolsController extends Controller
{
    public function cheakUrls()
    {
        /**
         * $archives=Brandarticle::where('ismake',1)->get();
        foreach ($archives as $archive)
        {
        echo config('app.url').'/'.$archive->arctype->real_path.'/'.$archive->id.'.shtml'.'<br/>';
        }
         */

        $archives=Arctype::all();
        foreach ($archives as $archive)
        {
            echo config('app.url').'/'.$archive->real_path.'/'.'<br/>';
        }

    }

    /**
     * 更新文档对应品牌
     */
        public function checktoolBrandId()
        {
            $nullBrandArticles=Archive::where('brandid',0)->get();
            $brandNmaes=Brandarticle::where('brandname','<>','')->pluck('brandname');
            foreach ($nullBrandArticles as $nullBrandArticle)
            {
                foreach ($brandNmaes as $brandNmae)
                {
                    if (str_contains($nullBrandArticle,$brandNmae))
                    {
                        $thisArticlebdName=$brandNmae;
                        $thisArticlebdId=Brandarticle::where('brandname',$brandNmae)->value('id');
                        Archive::where('id',$nullBrandArticle->id)->update(['bdname'=>$thisArticlebdName,'brandid'=>$thisArticlebdId]);
                    }
                }
            }
            echo '更新完成！！！';

        }

    /**
     * 文档采集发布时间更新
     */

        public function updateArticleTime()
        {
            $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('id','>',180)->pluck('id');
            foreach ($articles as $article) {

                Archive::withoutGlobalScope(PublishedScope::class)->where('id',$article)->update(['typeid'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now(),'published_at'=>Carbon::now()]);
            }
            echo '1';
        }


        public function updateArticles()
        {
            $articlesids=Archive::withoutGlobalScope(PublishedScope::class)->where('ismake',0)->where('title','like','%投资干洗店%')->pluck('id');
            foreach ($articlesids as $articlesid)
            {
                Archive::withoutGlobalScope(PublishedScope::class)->where('id',$articlesid)->update([
                    //'brandid'=>Brandarticle::withoutGlobalScope(PublishedScope::class)->where('brandname','ucc')->value('id'),
                    'typeid'=>12
                ]);
            }
            echo '更新完毕';
        }
}
