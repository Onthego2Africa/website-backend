<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tour extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'cover_image',
        'slug',
        'overview',
        'itenary',
        'cost',
    ];

    // Relationship to Reservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'tour_id');
    }

    // Relationship to Images
    public function images()
    {
        return $this->hasMany(Image::class, 'tour_id');
    }
}
