<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operator extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function services()
    {
       
        
            return $this->belongsToMany('App\service');
        
    }

}
