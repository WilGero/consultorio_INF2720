<?php

namespace Database\Seeders;

use App\Models\Paciente;
use App\Models\Tratamiento;
use Illuminate\Database\Seeder;

class TratamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      Tratamiento::factory(50)->create();

    }
}
