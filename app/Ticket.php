<?php

namespace App;

use App\Message;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $fillable = ['title', 'ticketable_id', 'ticketable_type', 'type'];


    public function ticketable()
    {
        return $this->morphTo();
    }

    public function getFormatStateAttribute()
    {
        switch($this->state) {
            case 1:
                return '<b class="badge badge-info">En cours</b>';
            break;
            default:
                return 'Default';
        }
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
