<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
session_start();

class ManageController extends Controller
{
    public function admin() {
        if(Auth::check()) {
            return view('admin.dashboard');
        } else {
            return redirect('admin/login');
        }
    }

    public function index() {
        return view('admin.login');
    }

    public function login_confirm(Request $req) {
        $user = User::where('email', $req->username)->where('password', md5($req->password))
                ->where('privacy', '=', 0)->first();
        if(isset($user)) {
            Auth::login($user);
            return redirect('/admin');
        } else {
            Session::put('notification', 'Thông tin đăng nhập không đúng');
            return redirect('/admin/login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/admin/login');
    }
}
