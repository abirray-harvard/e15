<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Note the use of the `updateOrCreate` Eloquent method
        # This is useful here because the email for each user has to be unique
        $user = User::updateOrCreate(
            ['email' => 'jill@harvard.edu', 'first_name' => 'Jill', 
            'last_name' => 'Harvard'],
            ['password' => Hash::make('asdfasdf')
        ]);
        
        $user = User::updateOrCreate(
            ['email' => 'jamal@harvard.edu', 'first_name' => 'Jamal',
            'last_name' =>  'Harvard'],
            ['password' => Hash::make('asdfasdf')
        ]);

        $user = User::updateOrCreate(
            ['email' => 'b@w.com', 'first_name' => 'Bruce',
            'last_name' =>  'Wayne'],
            ['password' => Hash::make('12345678')
        ]);
    }
}
