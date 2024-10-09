<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Skripsi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'point' => 10000,
        ]);

        Admin::create([
            'name' => 'admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        Skripsi::create([
            'judul' => 'penjualan tambak udang',
            'nama' => 'Najua Rahmah Putri',
            'nim' => '6304',
            'angkatan' => '2022',
            'dosen_1' => 'fajri profesio putra',
            'dosen_2' => 'elvi rahmi'
        ]);
    }
}
