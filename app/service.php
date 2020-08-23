<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //
    public function customers()
    {
       
        
            return $this->belongsToMany('App\customer');
        
    }
}
