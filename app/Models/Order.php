<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_code', 'user_id', 'event_id', 'ticket_type_id', 'quantity', 'total_price', 'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function ticketType() {
        return $this->belongsTo(TicketType::class);
    }
}
