<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listed extends Model
{
    //

    protected $fillable = ['name', 'year'];

    protected $table = 'lists';
}
