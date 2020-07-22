<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerSubscription extends Model
{
 protected $table = 'customers_subscription';
protected $fillable = ['customer_id','package_id','duration'];
}
