<?php

namespace Database\Seeders;

use App\Models\Personas;
use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personas = new Personas();

        $personas->apellido_paterno="Jurado";
        $personas->apellido_materno="Quiroz";
        $personas->nombre="Emilia Esther";
        $personas->fecha_nacimiento="1998-11-14";
        $personas->sexo="Femenino";
        
        $personas->save();

        $personas2 = new Personas();

        $personas2->apellido_paterno="Flores";
        $personas2->apellido_materno="Santana";
        $personas2->nombre="Cesar Augusto";
        $personas2->fecha_nacimiento="1995-05-25";
        $personas2->sexo="Masculino";
        
        $personas2->save();

    }
}
