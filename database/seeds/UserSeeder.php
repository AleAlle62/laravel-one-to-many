

<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'Alessio',
                'email'     => 'alessioallegrini@gmail.com',
                'password'  =>  Hash::make('123'),
            ],
            [
                'name'      => 'Alessandro',
                'email'     => 'alessandroallegrini@gmail.com',
                'password'  =>  Hash::make('456'),
            ],
            [
                'name'      => 'Giulio',
                'email'     => 'giulioallegrini@gmail.com',
                'password'  =>  Hash::make('789'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
