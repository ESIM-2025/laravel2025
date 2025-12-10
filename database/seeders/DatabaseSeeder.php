<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // LLAMAR a tu seeder (el nombre debe coincidir con el archivo que contiene la inserción)
        $this->call([
            EjemploSeeder::class, // Usa este si tu archivo se llama TutorialSeeder.php
            // O si tu archivo se llama EjemploSeeder.php:
            // EjemploSeeder::class, 
        ]);
    }
}