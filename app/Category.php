<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //pour lier a la model post
    public function category(){
        return $this->hasMany('App\Post'); 
     }
}
