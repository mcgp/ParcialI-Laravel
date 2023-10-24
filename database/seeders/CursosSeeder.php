<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     // Curso::factory()->count(10)->create();
    public function run(): void
    {
        Curso::factory()->count(10)->create();

        DB::table('cursos')->insert([
            'nombre' => 'Curso de Programación - Seeder I',
            'descripcion' => 'Aprende a programar con este curso.',
            'duracion' => 20,
            'precio' => 99.99,
            'fecha_inicio' => '2023-09-15',
        ]

    );
      
    


    }
}
