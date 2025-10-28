<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Empleado::create([
            'nombre' => 'Pablo',
            'apellido' => 'Mendez',
            'correo' => 'pablo.mendez@outlook.com',
            'salario' => 3500.00
        ]);
        Empleado::create([
            'nombre' => 'Maria',
            'apellido' => 'Mercado',
            'correo' => 'maria.mercado@outlook.com',
            'salario' => 3700.00
        ]);
        Empleado::create([
            'nombre' => 'Jorge',
            'apellido' => 'Padilla',
            'correo' => 'jorge.padilla@outlook.com',
            'salario' => 3100.00
        ]);
        Empleado::create([
            'nombre' => 'Juan Carlos',
            'apellido' => 'Teran',
            'correo' => 'juancarlos.teran@outlook.com',
            'salario' => 3500.00
        ]);
        Empleado::create([
            'nombre' => 'Danitza',
            'apellido' => 'Veizaga',
            'correo' => 'danitza.veizaga@outlook.com',
            'salario' => 3400.00
        ]);
        Empleado::create([
            'nombre' => 'Rossio',
            'apellido' => 'Ledezma',
            'correo' => 'rossio.ledezma@outlook.com',
            'salario' => 3550.00
        ]);
        Empleado::create([
            'nombre' => 'Cristian',
            'apellido' => 'Jimenez',
            'correo' => 'cristian.jimenez@outlook.com',
            'salario' => 5500.00
        ]);
        Empleado::create([
            'nombre' => 'Sergio',
            'apellido' => 'Revollo',
            'correo' => 'sergio.revollo@outlook.com',
            'salario' => 4000.00
        ]);
        Empleado::create([
            'nombre' => 'Paola',
            'apellido' => 'Quiroga',
            'correo' => 'paola.quiroga@outlook.com',
            'salario' => 4100.00
        ]);
        Empleado::create([
            'nombre' => 'Arturo',
            'apellido' => 'Mercado',
            'correo' => 'arturo.mercado@outlook.com',
            'salario' => 3800.00
        ]);
        Empleado::create([
            'nombre' => 'Brenda',
            'apellido' => 'Guevara',
            'correo' => 'brenda.guevara@outlook.com',
            'salario' => 3800.00
        ]);
        Empleado::create([
            'nombre' => 'Susan',
            'apellido' => 'Gonzales',
            'correo' => 'susan.gonzales@outlook.com',
            'salario' => 4100.00
        ]);
    }
}
