<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'contact_info'];

    // Các quan hệ với các bảng khác
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
