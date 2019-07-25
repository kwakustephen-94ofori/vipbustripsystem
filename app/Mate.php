<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mate extends Model
{
    use SoftDeletes;
	 protected $table = 'mates';

     protected $dates = ['deleted_at'];
}
