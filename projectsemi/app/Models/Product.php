<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'vp_products';
    // nếu không đặt biến table tên bản thì nó lấy  tên bảng mặt định là class Product nó không trùng vs tên bảng mình tạo.
    protected $primaryKey = 'product_id';
    protected $guarded = [];  
}
