<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{

    use SoftDeletes;

    protected $fillable = ['title', 'data'];


    

    public function customers()
    {
        $this->belongsToMany(Customer::class);
    }
}
