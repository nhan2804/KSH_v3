<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageProduct;
use App\Product;
use App\CateProduct;
use App\News;
use DB;


class ProductController extends Controller
{
    public function index()
    {
    	$cate = CateProduct::where('type_cate',0)->get();
    	$products = DB::table('product')->join('imageproduct','product.id_pro','imageproduct.id_pro')->groupBy('product.id_pro')->paginate(10);
    	$news = News::take(10)->get();
    	$arr = [
    		'cate'=>$cate,
    		'products'=>$products,
    		'news'=>$news
    	];
    	return view('page.products',$arr);
    }

    public function product_details($slug)
    {
    	// $product = Product::find(1)->where('slug_pro','=',$slug)->first()->image();
		$pro = DB::table('product')->join('imageproduct','product.id_pro','imageproduct.id_pro')							->where('slug_pro','=',$slug)
								->groupBy('product.id_pro')->first();
    	$img = ImageProduct::where('id_pro',$pro->id_pro)->get();
		$ref_pro = DB::table('product')->join('imageproduct','product.id_pro','imageproduct.id_pro')						->where('cate_3',$pro->cate_3)
								->where('product.id_pro','!=',$pro->id_pro)
								->groupBy('product.id_pro')->take(6)->get();
    	$arr = [
    		'pro'=>$pro,
    		'imgs'=>$img,
    		'ref_pro'=>$ref_pro
		];

        return view('page.product_details',$arr);
    }
    public function category($slug){
         $cate = CateProduct::where('slug_cate',$slug)->first();
        $data = DB::table('product')->join('imageproduct','product.id_pro','imageproduct.id_pro')->where('cate_1',$cate->id_cate)->orWhere('cate_2', $cate->id_cate)->orWhere('cate_3', $cate->id_cate)->groupBy('product.id_pro')->paginate(18);
       
        $check_cate_1= CateProduct::where('id_cate',$cate->parent_id)->first();
        if ($check_cate_1!=null) {
            if ($check_cate_1->parent_id!=0) {
               $cate = $check_cate_1;
            }
        }else{
            $cate= CateProduct::where('parent_id',$cate->id_cate)->first();
        }
        $cate_parent = CateProduct::all();
        $arr = [
    		'data'=>$data,
            'cate_first'=>$cate,
    		'cate'=>$cate_parent
		];
        return view('page.cate_product',$arr);
    }
    public function search(Request $req)
    {
    	$q=$req->get('query');
    	// $data = Product::where([ 
     //    ['name_pro', 'LIKE', '%' . $q . '%'],
    	// ])->get();
    	$data = DB::table('product')->join('imageproduct','product.id_pro','imageproduct.id_pro')->where('name_pro', 'LIKE', '%' . $q . '%')->groupBy('product.id_pro')->get();
    	$cate = CateProduct::all();
    	$news = News::take(10)->get();
    	$arr = [
    		'cate'=>$cate,
    		'data'=>$data,
    		'news'=>$news,
    		'query'=>$q
    	];
    	return view('page.product_search',$arr);
    }
}
