<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseasesAdd_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([
            'name'=>'窒素欠乏',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'アンモニアガス障害',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'亜硝酸ガス障害',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'亜硝酸過剰',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'窒素過剰',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'リン酸欠乏',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'リン酸過剰',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'カリウム欠乏',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'カルシウム欠乏',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'カルシウム過剰',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'マグネシウム欠乏',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'鉄欠乏',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'マンガン過剰',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'ニッケル過剰',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'低温障害',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'炭酸ガス過剰',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'くん蒸剤障害',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'オキシダント障害',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'酸性障害',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'スミレックス水和剤障害',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'薬害',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'すじぐされ果',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'徒長苗',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'老化苗',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'異常茎',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'乱形果',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'窓あき果',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'先とがり果',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'チャック果',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'網入り果',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'裂果',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'窒素欠乏類似症',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'カリウム欠乏類似症',
        ]);
        
    }
}
