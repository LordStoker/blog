<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonData = file_get_contents("C:\\temp\\baleart\\usuaris.json");
        $users = json_decode($jsonData, true);
        if ($jsonData === false || $users === null) {
            throw new \Exception("Error al leer o procesar el JSON.");
        }

        foreach ($users['usuaris']['usuari'] as $user) {
             if(isset($user['nom'], $user['dni'],$user['email'], $user['password'])) {
                User::create([
                    'name' => $user['nom'],
                    'email' => $user['email'],
                    'password' => Hash::make($user['password']),
                ]);
            }

        }
    }
}
