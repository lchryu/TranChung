<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'productid';
    protected $fillable = ['name', 'description', 'price', 'stock_quantity'];

    // Các quan hệ với các bảng khác
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
