<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
	//protected $fillable=['titre','description'];
   protected $guarded=[];
   public function setTitreAttribute($value)//mutator
    { 


        $this->attributes['titre'] = strtoupper($value);
    }
     public function getTitreAttribute($value)//mutator
    { 


        return strtoupper($value);
    }
    public function category(){
      return $this->belongsTo('App\Category');  //appartien a
    }

}
