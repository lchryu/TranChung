<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'orderid';

    protected $fillable = ['productid', 'quantity', 'supplierid', 'order_date'];

    // Các quan hệ với các bảng khác
    public function product()
    {
        return $this->belongsTo(Product::class, 'productid');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplierid');
    }
}
