<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'venue', 'city', 'event_date', 'poster_image', 'status'
    ];

    public function ticketType() {
        return $this->hasMany(TicketType::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }
}
