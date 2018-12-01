<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gallery;

class Gale extends Model
{
     protected $fillable = ['name'];

    public function galleries() {

    	return $this->hasMany(Gallery::class);
    }
}
