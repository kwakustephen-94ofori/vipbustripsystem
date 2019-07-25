<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{
     use SoftDeletes;
	 protected $table = 'buses';

     protected $dates = ['deleted_at'];
}
