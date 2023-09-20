<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Comment;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function getHome(){
        $data['product'] = DB::table('vp_products')->get()->count();
        $data['comment'] = DB::table('vp_comment')->get()->count();
        $data['users'] = DB::table('vp_users')->get()->count();
        $data['categories'] = DB::table('vp_categories')->get()->count();
    
        return view('backend.index',$data);
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('/');
    }
}
