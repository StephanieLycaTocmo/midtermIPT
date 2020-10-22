<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Tocmo',
                'fname' => 'Stephanie Lyca',
                'address' => 'Catmonan, Calape, Bohol',
                'phone' => '099988712176',
                'email' => 'kalay@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Josol',
                'fname' => 'Carl Socrates',
                'address' => 'Sohotn, New Jersey',
                'phone' => '09457398101',
                'email' => 'bayot@gmail.com',
                'password' => bcrypt('password123')
            ]
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}

