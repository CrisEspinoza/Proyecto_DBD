<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountryTableSeeder::class);
        $this->call(RegionTableSeeder::class);
        $this->call(CommuneTableSeeder::class);

        $this->call(TestTableSeeder::class);
    	$this->call(UserTableSeeder::class);
        $this->call(CommentaryTableSeeder::class);


        $this->call(PermissionTableSeeder::class);
        $this->call(RolTableSeeder::class);
        

        $this->call(UserRolTableSeeder::class);
        $this->call(UserTestTableSeeder::class);
        $this->call(HistoryDBTableSeeder::class);
    }
}
