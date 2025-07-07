<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'ReservedName',
        'PhoneNumber', 
        'TicketType',
        'ReservationDate',
        'Count',
        'UserId',
        'Sum'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'UserId');
    }

    public function ticket()
    {
        return $this->belongsTo(Tickets::class, 'TicketType');
    }
}


