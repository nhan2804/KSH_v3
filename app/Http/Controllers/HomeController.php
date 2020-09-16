<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Product;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = News::orderBy('created_at')->take(3)->get();
        // $product = Product::orderBy('created_at')->take(4)->get()->toArray();
        $product = DB::table('product')->join('imageproduct','product.id_pro','imageproduct.id_pro')->groupBy('product.id_pro')->get()->toArray();
        $arr=[
            'news'=>$data,
            'product'=>$product
        ];
        return view('page.home',$arr);
    }

    public function introduce() {
        return view('page.introduce');
    }

    public function system_company() {
        return view('page.system_company');
    }
}
