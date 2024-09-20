<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
      protected $fillable = ['companyName','description', 'address', 'phone1', 'phone2', 'email', 'image'];
}
