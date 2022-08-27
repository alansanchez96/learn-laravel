<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    protected $model = Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nombre = $this->faker->name();
        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre, '-'),
            'descripcion' => $this->faker->text(),
            'categoria' => $this->faker->randomElement(['Desarrollo web', 'Diseño UI UX'])
        ];
    }
}
