<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
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
                'name' => 'Super Admin',
                'email' => 'adminnancy@gmail.com',
                'type' => 1, // super admin
                'password' => bcrypt('nancy12345'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
            ];

            foreach ($users as $key => $user) {
                User::create($user);
            }
    }
}
