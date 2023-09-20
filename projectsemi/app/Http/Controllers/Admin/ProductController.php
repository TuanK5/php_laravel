<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function getProduct(){
        $data['productlist'] = DB::table('vp_products')->join('vp_categories','vp_products.product_cate', '=' ,'vp_categories.cate_id')
        ->orderBy('product_id','desc')->get();
        return view('backend.product',$data);    
    }
    public function getAddProduct(){
        $data['catelist'] = Category::all();
        return view('backend.addproduct', $data);
    }
    public function postAddProduct(AddProductRequest $request){
        $filename = $request->img->getClientOriginalName();
        $product = new Product;
        $product->product_name = $request->name;
        $product->product_slug = Str::slug($request->name);
        $product->product_img = $filename;
        $product->product_accessories = $request->accessories; 
        $product->product_price = $request->price;
        $product->product_warranty = $request->warranty;
        $product->product_promotion = $request->promotion;
        $product->product_condition = $request->condition;
        $product->product_status = $request->status; 
        $product->product_description = $request->description;
        $product->product_cate  = $request->cate;
        $product->product_featured =  $request->featured; 
        $product->save();
        $request->img->storeAs('public/image',$filename);
        return back();
    }
    public function getEditProduct($id){
        $data['product'] = Product::find($id);
        $data['catelist'] = Category::all();
        return view('backend.editproduct',$data);
    }
    public function postEditProduct(Request $request,$id){
        $product = new Product;
        $arr['product_name'] = $request->name;
        $arr['product_slug'] = Str::slug($request->name);
        $arr['product_accessories'] = $request->accessories; 
        $arr['product_price'] = $request->price;
        $arr['product_warranty'] = $request->warranty;
        $arr['product_promotion'] = $request->promotion;
        $arr['product_condition'] = $request->condition;
        $arr['product_status'] = $request->status; 
        $arr['product_description'] = $request->description;
        $arr['product_cate']  = $request->cate;
        $arr['product_featured'] =  $request->featured; 
        if($request->hasFile('img')){
            $filename = $request->img->getClientOriginalName();
            $arr['product_img'] = $filename;
            $request->img->storeAs('public/image',$filename);
        }
        $product::where('product_id',$id)->update($arr);
        return redirect()->intended('admin/product');
    }
    public function getDeleteProduct($id){
        Product::destroy($id);
        return back();
    }
}
