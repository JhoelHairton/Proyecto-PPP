<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user=User::create([
            'name'=>'Jhoel Hairton Quispe',
            'email'=>'Jhoel.HQ@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Administrador');

        $user=User::create([
            'name'=>'Jenson Chambi',
            'email'=>'jenson.HC@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Supervisor');

        $user=User::create([
            'name'=>'Pedro Fernandez',
            'email'=>'Juan.P@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Estudiante');

    }
}
