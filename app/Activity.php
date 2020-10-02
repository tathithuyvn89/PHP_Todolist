<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model

{
    protected $fillable = ['activity_name'];

    protected $hiden =[];

    public function items() {

         return $this->hasMany('App\Item');
    }
    
    

}




