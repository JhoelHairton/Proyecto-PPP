<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        //Dashboard
        Permission::create([
            'name'=>'Ver dashboard'
        ]);

        //Supervisor
        Permission::create([
            'name'=>'Evaluar estudiantes'
        ]);
        Permission::create([
            'name'=>'Supervisar tareas'
        ]);
        Permission::create([
            'name'=>'Mentoria Profesional   '
        ]);
        Permission::create([
            'name'=>'Subir archivos'
        ]);

        //Estudiante
        Permission::create([
            'name'=>'Subir documentos'
        ]);
        Permission::create([
            'name'=>'Solicitar carta'
        ]);
        Permission::create([
            'name'=>'Descargar archivos'
        ]);
        Permission::create([
            'name'=>'Elegir sede'
        ]);
    }

}
