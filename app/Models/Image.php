<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;


    protected $fillable = [
        'url',
        'event_id',
        'event_id'
    ];


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
