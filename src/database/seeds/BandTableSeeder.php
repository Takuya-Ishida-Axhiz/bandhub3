<?php

use Illuminate\Database\Seeder;

class BandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $band = new \App\Band([
            'band_name'=>'Unison Square Garden','band_song'=>'Orion wo nazoru','band_created_at'=>'2004-04-01'
        ]);
        $band->save();

        $band = new \App\Band([
            'band_name'=>'アニソンバンド','band_song'=>'little Busters!','band_created_at'=>'2005-07-01'
        ]);
        $band->save();

        $band = new \App\Band([
            'band_name'=>'LiSA','band_song'=>'RisingHope','band_created_at'=>'2005-07-01'
        ]);
        $band->save();
    }
}
