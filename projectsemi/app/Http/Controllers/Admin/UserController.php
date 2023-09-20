<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getUser(){
        $data['user'] = User::all();
        return view('backend.admin', $data);
    }
}
