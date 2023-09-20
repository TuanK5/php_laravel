<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartadmController extends Controller
{
    //
    public function getOrderconfirm(){
        return view('backend.orderconfirm');
    }
   
}
