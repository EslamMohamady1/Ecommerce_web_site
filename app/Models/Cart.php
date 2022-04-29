<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable =
    [
        'prod_id',
        'user_id',
        'prod_qty',
        'offer'
    ];
    use HasFactory;
}
