<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Gale;

class Gallery extends Model
{
    //
     protected $fillable = ['title', 'para', 'image'];

     public function gale() {

    	return $this->belongsTo(Gale::class);
    }
}
