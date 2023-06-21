<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => "Hansen",
            'password' => Hash::make("hansenSalim")
        ]);
        DB::table('users')->insert([
            'username' => "Edgar",
            'password' => Hash::make("edgarJohanChuang")
        ]);
        DB::table('users')->insert([
            'username' => "Jefri",
            'password' => Hash::make("jefriJaya")
        ]);
        DB::table('users')->insert([
            'username' => "Dionathan",
            'password' => Hash::make("dionathan")
        ]);
        DB::table('users')->insert([
            'username' => "Vachell",
            'password' => Hash::make("vachellChristiansenChai")
        ]);
    }
}
