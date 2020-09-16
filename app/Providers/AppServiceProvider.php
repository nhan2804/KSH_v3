<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\CateProduct;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

       $all_cate_pro = CateProduct::all();
        View::share('all_cate_pro',$all_cate_pro);
        // view()->composer('*', function ($view) 
        // {
        //     $id_user= Session::get("id");
        //     $notify= DB::table('notify')->join('accounts','notify.id_send','=','accounts.id')->where('notify.id_rec',$id_user)->get();
        //     $view->with('notify', $notify);    
        // }); 
    }
}
