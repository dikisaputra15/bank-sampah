<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@admin.com',
               'type'=>0,
               'password'=> hash::make('admin12345'),
            ],
            [
               'name'=>'Petugas',
               'email'=>'petugas@petugas.com',
               'type'=> 1,
               'password'=> hash::make('petugas12345'),
            ],
            [
               'name'=>'Nasabah',
               'email'=>'nasabah@nasabah.com',
               'type'=>2,
               'password'=> hash::make('nasabah12345'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
