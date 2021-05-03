<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        //Para crear el usuario por defecto para probar el inicio de sesión y agregar 10 regsitros a la tabla user
        $this->call(RoleSeeder::class); 
        $this->call(UsuarioSeeder::class); 
    }
}
