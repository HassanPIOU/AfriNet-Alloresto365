<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['type','first_name','last_name','email','phone_number','addresse','city','country','company_name',"password"];

    public function subscriptions()
    {
        $this->belongsToMany(Subscription::class);
    }

    public function packages()
    {
        $this->belongsToMany(Package::class);
    }

    public function tickets()
    {
        $this->morphToMany(Ticket::class, 'ticketable');
    }

    public function messages()
    {
        $this->hasMany(Message::class);
    }
}
