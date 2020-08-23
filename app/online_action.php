<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class online_action extends Model
{
    //
    public function customer_service()
    {
        return $this->belongsTo('App\customer_service');

    }
    public function online_account()
    {
       
        
            return $this->belongsToMany('App\online_account');
        
    }

    public function takenby()
    {
        return $this->belongsTo('App\user','user_id');
        
    }
}
