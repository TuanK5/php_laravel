<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'vp_categories';
    // nếu không đặt biến table tên bản thì nó lấy  tên bảng mặt định là class Category nó không trùng vs tên bảng mình tạo.
    protected $primaryKey = 'cate_id';
    protected $guarded = [];  
}
