<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $check = User::where('email', 'admin@viscomm.com')->first();
        if(!$check) {
            // Generate admin user
            $user = new User();
            $user->name     ='Admin User';
            $user->email    = 'admin@viscomm.com';
            $user->phone    = '08999887777';
            $user->password = Hash::make('password');
            $user->role     = 1;
            $user->save();
        }

        foreach (range(1, 20) as $index) {
            $user = new User();
            $user->name     = $faker->name;
            $user->email    = $faker->unique()->safeEmail;
            $user->phone    = $faker->unique()->phoneNumber;
            $user->password = Hash::make('password');
            $user->role     = $faker->randomElement([1, 2]);
            $user->save();
        }
    }
}
