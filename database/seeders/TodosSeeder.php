<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //lo agrego daniel
        $useradmin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
        ]);
        $useradmin->save();

        $userviewer = User::create([
            'name' => 'viewer',
            'email' => 'viewer@gmail.com',
            'password' => Hash::make('viewer'),
            'fullacces' => 'no',
        ]);
        $userviewer->save();
    }
}
