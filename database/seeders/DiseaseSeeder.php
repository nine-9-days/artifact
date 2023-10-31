<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([
            'name'=> 'モザイク病',
            'feature_part_id1'=>1,
            'feature_part_id2'=>2,
            'feature_part_id3'=>3,
            'feature_part_id4'=>4,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '黄化えそ病',
            'feature_part_id1'=>5,
            'feature_part_id2'=>6,
            'feature_part_id3'=>7,
            'feature_part_id4'=>8,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '黄化葉巻病',
            'feature_part_id1'=>9,
            'feature_part_id2'=>10,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '茎えそ細菌病',
            'feature_part_id1'=>11,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '黒斑細菌病',
            'feature_part_id1'=>12,
            'feature_part_id2'=>13,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '斑点細菌病',
            'feature_part_id1'=>14,
            'feature_part_id2'=>15,
            'feature_part_id3'=>16,
            'feature_part_id4'=>17,
            'feature_part_id5'=>18,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '軟腐病',
            'feature_part_id1'=>19,
            'feature_part_id2'=>20,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> 'かいよう病',
            'feature_part_id1'=>21,
            'feature_part_id2'=>22,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '青枯病',
            'feature_part_id1'=>23,
            'feature_part_id2'=>24,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '輪紋病',
            'feature_part_id1'=>25,
            'feature_part_id2'=>26,
            'feature_part_id3'=>27,
            'feature_part_id4'=>28,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '斑点病',
            'feature_part_id1'=>29,
            'feature_part_id2'=>30,
            'feature_part_id3'=>31,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '白星病',
            'feature_part_id1'=>32,
            'feature_part_id2'=>33,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '炭疽病',
            'feature_part_id1'=>34,
            'feature_part_id2'=>35,
            'feature_part_id3'=>36,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '褐色輪紋病',
            'feature_part_id1'=>37,
            'feature_part_id2'=>38,
            'feature_part_id3'=>39,
            'feature_part_id4'=>40,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> 'うどんこ病',
            'feature_part_id1'=>41,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '疫病',
            'feature_part_id1'=>42,
            'feature_part_id2'=>43,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '葉かび病',
            'feature_part_id1'=>44,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '灰色かび病',
            'feature_part_id1'=>45,
            'feature_part_id2'=>46,
            'feature_part_id3'=>47,
            'feature_part_id4'=>48,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '菌核病',
            'feature_part_id1'=>48,
            'feature_part_id2'=>49,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '萎凋病',
            'feature_part_id1'=>50,
            'feature_part_id2'=>51,
            'feature_part_id3'=>52,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '根腐萎凋病',
            'feature_part_id1'=>53,
            'feature_part_id2'=>54,
            'feature_part_id3'=>55,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '半身萎凋病',
            'feature_part_id1'=>56,
            'feature_part_id2'=>57,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '褐色根腐病',
            'feature_part_id1'=>58,
            'feature_part_id2'=>59,
            'feature_part_id3'=>60,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '灰色疫病',
            'feature_part_id1'=>61,
            'feature_part_id2'=>62,
            'feature_part_id3'=>63,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '根腐病',
            'feature_part_id1'=>64,
            'feature_part_id2'=>65,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '根腐疫病',
            'feature_part_id1'=>66,
            'feature_part_id2'=>67,
            'feature_part_id3'=>68,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '黒点根腐病',
            'feature_part_id1'=>69,
            'feature_part_id2'=>70,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '白絹病',
            'feature_part_id1'=>71,
            'feature_part_id2'=>72,
            'feature_part_id3'=>73,
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '苗立枯病',
            'feature_part_id1'=>74,
            'feature_part_id2'=>75,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'窒素欠乏',
            'feature_part_id1'=>76,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'アンモニアガス障害',
            'feature_part_id1'=>77,
            'feature_part_id2'=>78,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'亜硝酸ガス障害',
            'feature_part_id1'=>79,
            'feature_part_id2'=>80,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'亜硝酸過剰',
            'feature_part_id1'=>81,
            'feature_part_id2'=>82,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'窒素過剰',
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'リン酸欠乏',
            'feature_part_id1'=>83,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'リン酸過剰',
            'feature_part_id1'=>84,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'カリウム欠乏',
            'feature_part_id1'=>85,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'カルシウム欠乏',
            'feature_part_id1'=>86,
            'feature_part_id2'=>87,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'カルシウム過剰',
            'feature_part_id1'=>88,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'マグネシウム欠乏',
            'feature_part_id1'=>89,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'鉄欠乏',
            'feature_part_id1'=>90,
            'feature_part_id2'=>91,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'マンガン過剰',
            'feature_part_id1'=>92,
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
            'feature_part_id1'=>93,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'スミレックス水和剤障害',
            'feature_part_id1'=>94,
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
            'feature_part_id1'=>95,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'乱形果',
            'feature_part_id1'=>96,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'窓あき果',
            'feature_part_id1'=>97,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'先とがり果',
            'feature_part_id1'=>98,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'チャック果',
            'feature_part_id1'=>99,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'網入り果',
            'feature_part_id1'=>100,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'裂果',
            'feature_part_id1'=>101,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'窒素欠乏類似症',
            'feature_part_id1'=>102,
        ]);
        
        DB::table('diseases')->insert([
            'name'=>'カリウム欠乏類似症',
            'feature_part_id1'=>103,
        ]);
    }
}
