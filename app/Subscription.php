<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{




    public function customers()
    {
        $this->belongsToMany(Customer::class);
    }
}
