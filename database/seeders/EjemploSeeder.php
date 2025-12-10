<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EjemploSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // Ejemplo: database/seeders/TutorialSeeder.php
// ...

public function run()
{
    // Verifica que esta línea existe y está correcta:
    \Illuminate\Support\Facades\DB::table('users')->insert([
        'name' => 'Usuario Admin Seeder',
        'email' => 'admin.seeder@tutorial.com',
        'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        'created_at' => now(), // Asegúrate de incluir timestamps si la tabla los requiere
        'updated_at' => now(),
    ]);
}
}