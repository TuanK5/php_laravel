<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAccountRequest;

class FrontendController extends Controller
{
    //
    public function getHome() {
        $data['featured'] = Product::where('Product_featured',1)->orderBy('product_id', 'desc')->take(8)->get();
        $data['news'] = Product::orderBy('product_id', 'desc')->take(8)->get();
        return view('frontend.home',$data);
    }
    public function getDetail($id) {
        $data['items'] = Product::find($id);
        $data['comments'] = Comment::where('com_product',$id)->get();
        return view('frontend.details',$data);
    }
    public function getCategory($id) {
        $data['cateName'] = Category::find($id);
        $data['items'] = Product::where('Product_cate',$id)->orderBy('product_id','desc')->paginate(4);
        return view('frontend.category',$data);
    }
    public function postComment(Request $request,$id) {
        $comment = new Comment;
        $comment->com_name = $request->name;
        $comment->com_email = $request->email;
        $comment->com_content = $request->content;
        $comment->com_product = $id;
        $comment->save();
        return back();
    }
    public function getSearch(Request $request) {
        $result = $request->result;
        $data['keyword'] =  $result;
        $result = str_replace(' ', '%', $result);
        $data['itemstk'] = Product::where('product_name','like','%'.$result.'%')->paginate(2);
        $data['itemstk']->withPath('/search?result=' .$result .'&submit=T%C3%ACm+Ki%E1%BA%BFm');
        return view('frontend.search', $data);
    }


    public function getSignup(){
        return view('frontend.signup');
    }
    public function postSignup(CreateAccountRequest $request){
       //
       $user = new User;
       $user->email = $request->email;
       $user->password = bcrypt($request->password);
       $user->level=0;
       $user->save();
       return back()->withInput()->with('success', 'Đăng kí thành công! Vui lòng đăng nhập.');
    }
}
