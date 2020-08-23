<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class online_accounts extends Model
{
    //
    public function customer()
    {
        return $this->belongsTo('App\customer');
    }
}
