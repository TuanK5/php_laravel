<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;
class CartController extends Controller
{
    //
    public function getAddCart($id){
        $product = Product::find($id);
        Cart::add(['id' => $id, 'name' => $product->product_name, 'qty' => 1, 
        'price' => $product->product_price, 
        'options' => ['img' => $product->product_img]]);
        return redirect('cart/show');
    }
    public function getShowCart(){
        $data['total']=Cart::total();
        $data['items'] = Cart::content();
        return view('frontend.cart',$data);
    }
    public function getDeleteCart($id){
        if($id=='all'){
            Cart::destroy();
        }else{
            Cart::remove($id);
        }
        return back();
    }
    public function getUpdateCart(Request $request){
        Cart::update($request->rowId,$request->qty);
    }
    // public function postComplete(Request $request){
    //     $data['info'] =  $request->all();    
    //     $email = $request->email;
    //     $data['total']=Cart::total();
    //     $data['cart'] = Cart::content();
    //     Mail::send('frontend.email', $data, function($message) use ($email){
    //         $message->from('tuanvvqbd00048@fpt.edu.vn', 'Vo Van Quoc Tuan (BTEC DN)');
    //         $message->to($email, $email);
    //         $message->cc('run210723@gmail.com', 'Túnk');
    //         $message->subject('Xac nhan hoa don mua hang cua Tunk');
    //     });
    //     return redirect('complete');
    // }
    public function postOrderstatus(Request $request){
        $order = new Order;
        $order->or_email = $request->email;
        $order->or_phone = $request->phone;
        $order->or_address = $request->address;
        $order->save();
        // $data['info'] =  $request->all();    
        $data['total']=Cart::total();
        $data['items'] = Cart::content();
        return redirect('orderstatus',$data);
    }
    
    public function getOrderstatus(){ 
        $data['total']=Cart::total();
        $data['items'] = Cart::content();
        return view('frontend.orderstatus');
    }
}
