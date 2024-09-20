<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['companyName','activity', 'phone', 'email', 'address', 'image'];
}
