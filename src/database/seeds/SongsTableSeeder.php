<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = new \App\Song([
            'sheet_id'=>'1','order'=>'1','name'=>'5分後のスターダスト ','time'=>'04:24','genre'=>'Rock','light'=>'暗め青','rehe'=>'イントロ〜１サビ'
        ]);
        $song->save();

        $song = new \App\Song([
            'sheet_id'=>'1','order'=>'2','name'=>'ガリレオのショーケース','time'=>'04:18','genre'=>'Rock','light'=>'明るめ','rehe'=>'1サビ前'
        ]);
        $song->save();

        
        $song = new \App\Song([
            'sheet_id'=>'2','order'=>'1','name'=>'面影ワープ','time'=>'04:32','genre'=>'Rock','light'=>'暖色多め','rehe'=>'1サビ前'
        ]);
        $song->save();

        $song = new \App\Song([
            'sheet_id'=>'2','order'=>'２','name'=>'影踏み','time'=>'04:02','genre'=>'Rock','light'=>'オレンジ多め','rehe'=>'ギターソロ'
        ]);
        $song->save();

        $song = new \App\Song([
            'sheet_id'=>'3','order'=>'1','name'=>'オリオンをなぞる','time'=>'03:25','genre'=>'Rock','light'=>'特になし'
        ]);
        $song->save();

        $song = new \App\Song([
            'sheet_id'=>'3','order'=>'2','name'=>'シュガーソングとビターステップ','time'=>'04:55','genre'=>'Rock','light'=>'特になし'
        ]);
        $song->save();

    }
}
