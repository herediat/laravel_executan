<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                "name" => "Tshishimbi",
                "prenom" => "Heredia",
                "age" => "24",
                "email" => "heredia@gmail.com",
                "password" => Hash::make("24heredia"),
                "role_id" => 1, //admin
            ],
            [
                "name" => "Makaya",
                "prenom" => "Kevin",
                "age" => "24",
                "email" => "kevin@gmail.com",
                "password" => Hash::make("243kevin"),
                "role_id" => 2, //admin
            ],
        ]);
    }
}
