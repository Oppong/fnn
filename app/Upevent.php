<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upevent extends Model
{
    //

    protected $fillable = ['content', 'title', 'date', 'venue', 'time'];
}
