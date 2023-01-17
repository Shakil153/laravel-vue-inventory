<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'phone','address','photo','shop_name'
    ];
}
