<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->randomElement(['Curso PHP', 'Curso Laravel', 'Curso JavaScript', 'Curso Vue.js',
             'Curso React.js','Curso Python', 'Curso Django', 'Curso Flask',
             'Curso Ruby', 'Curso Rails', 'Curso Java', 'Curso Spring']),
            'descripcion' => $this->faker->paragraph(),
            'duracion' => $this->faker->randomElement([10, 20, 40]),
            'precio' => $this->faker->randomElement([19.99, 29.99, 39.99]),
            'fecha_inicio' => $this->faker->date()
        ];
    }
}
