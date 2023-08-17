<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'cover_image',
        'overview',
        'itenary',
        'cost',
    ];

    // Relationship to Reservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'event_id');
    }

    // Relationship to Images
    public function images()
    {
        return $this->hasMany(Image::class, 'event_id');
    }
}
