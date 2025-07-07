<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price'
    ];

    public $timestamps = false;
    
    
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'TicketType');
    }
}
