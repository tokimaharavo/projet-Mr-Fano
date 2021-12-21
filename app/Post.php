<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   //les champs modifiable
    protected $fillable=['name','price','qty','img','category_id'];

    //pour lier a la model category
    public function category(){
       return $this->belongsTo('App\Category'); 
    }

    //scope pour la recherche
    public function scopeSearchByTitle($query,$q){
        return $query->where('name','LIKE','%'.$q.'%');
    }
}
