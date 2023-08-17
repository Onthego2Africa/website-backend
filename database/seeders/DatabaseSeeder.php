<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Tour;
use App\Models\User;
use App\Models\Event;
use App\Models\Image;
use App\Models\Newsletter;
use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@onthego2africa.com',
            'password' => bcrypt('123456789'),
            'username' => 'admin1',
            'email_verified_at' => now()
        ]);

        $user->assignRole('super-admin');
    }
}
