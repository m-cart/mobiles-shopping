<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table='cart';               //Model name 'cart' is singular and table name 'cart' should be plural, here table name 'cart' is singular. So we write "public $table='cart';"
}
