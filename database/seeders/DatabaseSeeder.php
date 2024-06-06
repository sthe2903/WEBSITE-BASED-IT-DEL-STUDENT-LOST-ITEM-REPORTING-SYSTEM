<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data =array([
            'name'=>'Admin Laporkan Saja',
            'email'=>'laporkansaja@gmail.com',
            'nomor'=>'082246821633',
            'role'=>'a',
            'password'=>Hash::make('laporkansaja')
        ]);
        foreach ($data as $d) {
            User::create([
                'name' => $d['name'],
                'email' => $d['email'],
                'nomor' => $d['nomor'],
                'password' => $d['password'],
                'role' => $d['role'],
            ]);
        }
    }
}
