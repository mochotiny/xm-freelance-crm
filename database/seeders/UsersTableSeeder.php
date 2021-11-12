<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' =>1], [
            'name' => 'mocho',
            'email' => 'mocho@gmail.com',
            'password' => '$2y$10$fzJTxyBFADah0ZFlqszKmu4zehcwnJNWBclIH16zYif3i6r5QSii.' //password
        ]);
    }
}
