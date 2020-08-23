<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
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
    public function online_accounts()
    {
        return $this->hasMany('App\online_accounts' );
    }


}
