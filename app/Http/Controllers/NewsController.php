<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\CateNews;
use Illuminate\Support\Facades\Session;
class NewsController extends Controller
{
    public function index()
    {
    	$data = News::take(10)->get();
        $cate = CateNews::all();
        $productsArray = array();
        foreach($cate as $category=>$v) {
                $products = News::where('cate_parent', $v->id_cate)->get();
            if(sizeof($products)) {
                $products = $products->take(4);
                $productsArray[$v->id_cate] = [
                    'name_cate'=>$v->name_cate,
                    'products'=>$products
                ];
            }
        }
    	return view('page.news')->with('news',$data)->with('pros',$productsArray);
    }
    public function view($slug)
    {
    	$data = News::where('slug',$slug)->first();
        $news_view = 'news_'.$data->id_news;
          if (!Session::has($news_view)) {
             $data->view_blog=$data->view_blog+1;
             $data->save();
             Session::put($news_view,1);
          }
        $ref_news = News::where('cate_parent',$data->cate_parent)->where('id_news','!=',$data->id_news)->take(6)->get();
    	return view('page.view_news')->with('data',$data)->with('ref_news',$ref_news);

    }
}
