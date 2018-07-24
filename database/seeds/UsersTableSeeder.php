<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Admin',
            'email' => 'admin',
            'password' => bcrypt('asdasd'),
        ];
        $user = User::whereEmail($data['email'])->first();

        if (!$user) {
            User::create($data);
        }
        else {
            $user->update($data);
        }
    }
}
