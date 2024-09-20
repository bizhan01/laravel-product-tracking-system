<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['orderCode','costumerName','productName', 'quantity', 'desc'];
}
