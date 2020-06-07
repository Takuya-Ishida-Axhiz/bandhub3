<?php

use Illuminate\Database\Seeder;

class SheetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sheet = new \App\Sheet([
            'band_id'=>'1','name'=>'Bee Side See Side','date'=>'2019-10-13','time'=>'18:15','place'=>'武道館'
        ]);
        $sheet->save();


        $sheet = new \App\Sheet([
            'band_id'=>'2','name'=>'夏ライブアニソンバンドセッティングシート','date'=>'2019-07-13','time'=>'18:15','place'=>'Yotsuya Outbreak'
        ]);
        $sheet->save();

        $sheet = new \App\Sheet([
            'band_id'=>'2','name'=>'お盆ライブJ-Rockバンドお品書き','date'=>'2019-08-11','time'=>'20:00','place'=>'Kichijoji Silver Elephant'
        ]);
        $sheet->save();
    }
}
