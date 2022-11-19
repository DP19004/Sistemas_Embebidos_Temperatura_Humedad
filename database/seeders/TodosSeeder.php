<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Zona;
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

        $Zona=Zona::create([
            'nombre'=>'p1',
            'editado'=>'0',
        ]);
        $Zona->save();
        $Zona=Zona::create([
            'nombre'=>'p2',
            'editado'=>'0',
        ]);
        $Zona->save();
        $Zona=Zona::create([
            'nombre'=>'p3',
            'editado'=>'0',
        ]);
        $Zona->save();
        $Zona=Zona::create([
            'nombre'=>'p4',
            'editado'=>'0',
        ]);
        $Zona->save();
        $Zona=Zona::create([
            'nombre'=>'p5',
            'editado'=>'0',
        ]);
        $Zona->save();
        $Zona=Zona::create([
            'nombre'=>'p6',
            'editado'=>'0',
        ]);
        $Zona->save();
        $Zona=Zona::create([
            'nombre'=>'p7',
            'editado'=>'0',
        ]);
        $Zona->save();
        $Zona=Zona::create([
            'nombre'=>'p8',
            'editado'=>'0',
        ]);
        $Zona->save();
        $Zona=Zona::create([
            'nombre'=>'p9',
            'editado'=>'0',

        ]);
        $Zona->save();
        $Zona=Zona::create([
            'nombre'=>'p10',
            'editado'=>'0',
        ]);
        $Zona->save();

    }
}
