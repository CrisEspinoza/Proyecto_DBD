<?php

use Illuminate\Database\Seeder;

class HistoryDBTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\HistoryDB::class, 18)->create();
    }
}
