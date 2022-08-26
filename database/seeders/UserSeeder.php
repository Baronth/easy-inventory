<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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

        $user = User::create([
            'email' => 'alessandro@delvai.it',
            'name' => 'Alessandro',
            'password' => Hash::make('password'),
        ]);

        $user = User::create([
            'email' => 'omar@delvai.it',
            'name' => 'Omar',
            'password' => Hash::make('password'),
        ]);
    }
}
