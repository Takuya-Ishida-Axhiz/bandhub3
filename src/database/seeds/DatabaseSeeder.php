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
        # UserTableSeeder を呼び出すよう登録
        $this->call(UsersTableSeeder::class);
        $this->call(SheetsTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(Band_userTableSeeder::class);
        $this->call(BandTableSeeder::class);


        // $this->call(Band_userTableSeeder::class);
    }
}
