<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Buscar'
        ]);
        Permission::create([
            'name' => 'Cargar listas'
        ]);
        Permission::create([
            'name' => 'Descargar listas'
        ]);
        Permission::create([
            'name' => 'Ver dashboard'
        ]);
        Permission::create([
            'name' => 'Crear rol'
        ]);

        Permission::create([
            'name' => 'Listar rol'
        ]);

        Permission::create([
            'name' => 'Editar rol'
        ]);

        Permission::create([
            'name' => 'Eliminar rol'
        ]);

        Permission::create([
            'name' => 'Crear usuario'
        ]);

        Permission::create([
            'name' => 'Leer usuarios'
        ]);

        Permission::create([
            'name' => 'Editar usuarios'
        ]);

        Permission::create([
            'name' => 'Eliminar usuarios'
        ]);

        Permission::create([
            'name' => 'Listar seguimiento'
        ]);

        Permission::create([
            'name' => 'Listar entidades'
        ]);

        Permission::create([
            'name' => 'Cargar incremental'
        ]);

        Permission::create([
            'name' => 'Cargar completa'
        ]);

        Permission::create([
            'name' => 'Descargar incremental'
        ]);

        Permission::create([
            'name' => 'Descargar completa'
        ]);


        //Honduras
        Permission::create([
            'name' => 'Buscar honduras'
        ]);

        Permission::create([
            'name' => 'Descargar incremental honduras'
        ]);

        Permission::create([
            'name' => 'Descargar completa honduras'
        ]);
    }
}
