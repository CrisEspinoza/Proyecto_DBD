<?php

use Illuminate\Database\Seeder;

class UserRolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserRol::class, 18)->create();
    }
}
