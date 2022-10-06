<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            [
                'id' => 1,
                'name'=> 'hisyam',
                'email'=> 'hisyam@mpc.com.my',
                'password' => hash('sha256', 'abc123')
            ],
            [
                'id' => 2,
                'name'=> 'atikah',
                'email'=> 'atikah@mpc.com.my',
                'password' => hash('sha256','abc123')
            ],
            [
                'name'=> 'atikahs',
                'email'=> 'atikahs@mpc.com.my',
                'password' => hash('sha256','abc123')
            ]
        ];

        foreach ($users as $key => $value) {
            // User::create($value);
            $user = new User;
            $user->name = $value['name'];
            $user->email = $value['email'];
            $user->password = $value['password'];
            $user->save();
        }
    }
}
