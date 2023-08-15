<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Faq;
use App\Models\Event;
use App\Models\Image;
use App\Models\Newsletter;
use App\Models\Reservation;
use App\Models\Tour;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Tour::create([
            'title' => 'dsfdsfdfsd',
            'cover_image' => 'fdsfd',
            'overview' => '423',
            'itenary' => '4',
            'cost' => '4',
        ]);
        Event::create([
            'title' => 'dsfdsfdfsd',
            'cover_image' => 'fdsfd',
            'overview' => '423',
            'itenary' => '4',
            'cost' => '4',
        ]);
        // Event::factory(10)->create();
        // Faq::factory(10)->create();
        // Reservation::factory(10)->create();
        // Newsletter::factory(10)->create();
        // Image::factory(10)->create();
    }
}
