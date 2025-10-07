<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    public function definition(): array
    {
        $colegios = [
            'Escuela Secundaria de Innovación',
            'Colegio Nacional',
            'Instituto San Martín',
            'Escuela Técnica Nº1',
            'Colegio del Sol',
        ];

        $cursos = [
            '1° año', '2° año', '3° año', '4° año', '5° año'
        ];

        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'edad' => $this->faker->numberBetween(13, 18),
            'dni' => $this->faker->unique()->numerify('########'),
            'curso' => $this->faker->randomElement($cursos),
            'colegio' => $this->faker->randomElement($colegios),
        ];
    }
}
