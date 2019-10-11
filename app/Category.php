<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Livre;
class Category extends Model
{ protected $fillable=['name'];
   
    //  public function getNameAttribute($value)//mutator
    // { 


    //     $this->attributes['name'] = "cat_".($value);
    // }
  public function setNameAttribute($value)//mutator
    { 


        $this->attributes['name'] = strtoupper($value);
    }
      public function getNameAttribute($value)//mutator
    { 


        return strtoupper($value);
    }
    public function livres(){
        return $this->hasMany(Livre::class);
    }
}
