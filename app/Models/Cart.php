<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table='cart';               //Model name 'cart' is singular and table name 'cart' should be plural, here table name 'cart' is singular. So we write "public $table='cart';"

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()               //This function is used in myorders.blade.php
    {
        return $this->belongsTo(Product::class);
    }
}
