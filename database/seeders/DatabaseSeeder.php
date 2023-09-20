<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Tour;
use App\Models\User;
use App\Models\Event;
use App\Models\Image;
use App\Models\Newsletter;
use App\Models\Reservation;
use App\Models\Package;
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

        Package::create([
            'title' => 'Gye Nyame Package',
            'image'=> 'https://onthego2africa.com/api/assets/images/gyenyame.jpg',
            'plan_1_name' => 'Single',
            'plan_1_price' => '$4,150.00 per person',
            'plan_2_name' => 'Twin',
            'plan_2_price' => '$3,685.00 per person',
        ]);

        Package::create([
            'title' => 'Fawohodie Package',
            'image' => 'https://onthego2africa.com/api/assets/images/fawohodie.jpg',
            'plan_1_name' => 'Single',
            'plan_1_price' => '$3,790.00',
            'plan_2_name' => 'Twin',
            'plan_2_price' => '$3,443.00',
        ]);

        Package::create([
            'title' => 'Sankofa Package',
            'image' => 'https://onthego2africa.com/api/assets/images/sankofa.jpg',
            'plan_1_name' => 'Hotel - Single',
            'plan_1_price' => '$3,400.00',
            'plan_2_name' => 'Hotel - Twin',
            'plan_2_price' => '$2,520.00',
            'plan_3_name' => 'Apartment (The Signature) - Single',
            'plan_3_price' => '$3,000.00',
            'plan_4_name' => 'Apartment (The Signature) - Twin',
            'plan_4_price' => '$2,200.00'
        ]);
    }
}
