<?php

use Illuminate\Database\Seeder;
use App\Commune;

class CommuneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // Se realiza el llamado al Factory, para que itere una cantidad de veces determinada y realice el llenado de la información 
        //          a la base de datos.
        factory(App\Commune::class, 18)->create();
    }
}
