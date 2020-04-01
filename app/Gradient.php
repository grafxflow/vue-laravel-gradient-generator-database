<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gradient extends Model
{
    //
    use SoftDeletes;
    
    protected $hidden = ['timestamp'];
}
