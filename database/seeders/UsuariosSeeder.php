<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Ludmila Ciancia Arias',
                'email' => 'ludmila.ciancia@example.com',
                'edad' => 17,
                'dni' => '47583910',
                'curso' => '5° año',
                'colegio' => 'Escuela Secundaria de Innovación',
            ],
            [
                'nombre' => 'Tomás Benítez',
                'email' => 'tomas.benitez@example.com',
                'edad' => 16,
                'dni' => '48102739',
                'curso' => '4° año',
                'colegio' => 'Colegio Nacional San Martín',
            ],
            [
                'nombre' => 'Sofía Ramírez',
                'email' => 'sofia.ramirez@example.com',
                'edad' => 15,
                'dni' => '49827364',
                'curso' => '3° año',
                'colegio' => 'Instituto del Sol',
            ],
            [
                'nombre' => 'Martín López',
                'email' => 'martin.lopez@example.com',
                'edad' => 17,
                'dni' => '46201845',
                'curso' => '5° año',
                'colegio' => 'Escuela Técnica Nº1',
            ],
            [
                'nombre' => 'Valentina Gómez',
                'email' => 'valentina.gomez@example.com',
                'edad' => 14,
                'dni' => '50738261',
                'curso' => '2° año',
                'colegio' => 'Colegio San José',
            ],
            [
                'nombre' => 'Lucas Fernández',
                'email' => 'lucas.fernandez@example.com',
                'edad' => 13,
                'dni' => '52810934',
                'curso' => '1° año',
                'colegio' => 'Colegio del Sol',
            ],
            [
                'nombre' => 'Camila Duarte',
                'email' => 'camila.duarte@example.com',
                'edad' => 16,
                'dni' => '47203958',
                'curso' => '4° año',
                'colegio' => 'Escuela Secundaria de Innovación',
            ],
            [
                'nombre' => 'Julián Torres',
                'email' => 'julian.torres@example.com',
                'edad' => 15,
                'dni' => '49302741',
                'curso' => '3° año',
                'colegio' => 'Instituto San Martín',
            ],
            [
                'nombre' => 'Milagros Acuña',
                'email' => 'milagros.acuna@example.com',
                'edad' => 17,
                'dni' => '45920387',
                'curso' => '5° año',
                'colegio' => 'Colegio del Sol',
            ],
            [
                'nombre' => 'Ignacio Pereyra',
                'email' => 'ignacio.pereyra@example.com',
                'edad' => 16,
                'dni' => '48201936',
                'curso' => '4° año',
                'colegio' => 'Colegio Nacional San Martín',
            ],
        ]);
    }
}


