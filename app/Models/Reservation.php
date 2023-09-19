<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_of_guests',
        'paymentID',
        'check_in',
        'check_out',
        'package_id',
        'cost',
        'event_id',
        'tour_id',
        'confirm_paid',
        'name'
    ];

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship to Event
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    // Relationship to Event
    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
