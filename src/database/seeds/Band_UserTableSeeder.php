<?php

use Illuminate\Database\Seeder;

class Band_userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $band_user = new \App\Band_user([
            'band_id'=>1,'user_id'=>2
        ]);
        $band_user->save();

        $band_user = new \App\Band_user([
            'band_id'=>1,'user_id'=>3
        ]);
        $band_user->save();

        $band_user = new \App\Band_user([
            'band_id'=>1,'user_id'=>4
        ]);
        $band_user->save();


        $band_user = new \App\Band_user([
            'band_id'=>2,'user_id'=>1
        ]);
        $band_user->save();


    }
}
