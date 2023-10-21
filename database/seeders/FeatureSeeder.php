<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            'name'=>'色',
            'feature'=>'黄化している',
            ]);
            
        DB::table('features')->insert([
            'name'=>'色',
            'feature'=>'半透明である',
            ]);
            
        DB::table('features')->insert([
            'name'=>'色',
            'feature'=>'褐変している',
            ]);
            
        DB::table('features')->insert([
            'name'=>'斑点',
            'feature'=>'斑点がある',
            ]);
            
        DB::table('features')->insert([
            'name'=>'斑点',
            'feature'=>'斑点の色は黒色または褐色である',
            ]);
            
        DB::table('features')->insert([
            'name'=>'形',
            'feature'=>'隆起している',
            ]);
            
        DB::table('features')->insert([
            'name'=>'形',
            'feature'=>'くぼんでいる',
            ]);
            
        DB::table('features')->insert([
            'name'=>'糸葉',
            'feature'=>'糸葉がある',
            ]);
            
        DB::table('features')->insert([
            'name'=>'空洞化',
            'feature'=>'空洞化している',
            ]);
            
        DB::table('features')->insert([
            'name'=>'萎縮',
            'feature'=>'萎縮している',
            ]);
            
        DB::table('features')->insert([
            'name'=>'位置',
            'feature'=>'病斑の位置は縁である',
            ]);
            
        DB::table('features')->insert([
            'name'=>'異臭',
            'feature'=>'異臭がする',
            ]);
            
        DB::table('features')->insert([
            'name'=>'枯れている',
            'feature'=>'枯れている',
            ]);
            
        DB::table('features')->insert([
            'name'=>'切り口',
            'feature'=>'白い膿汁を噴出している',
            ]);
            
        DB::table('features')->insert([
            'name'=>'水浸状',
            'feature'=>'水浸状である',
            ]);
            
        DB::table('features')->insert([
            'name'=>'穴',
            'feature'=>'穴が開いている',
            ]);
            
        DB::table('features')->insert([
            'name'=>'色',
            'feature'=>'白色である',
            ]);
            
        DB::table('features')->insert([
            'name'=>'腐敗',
            'feature'=>'腐敗している',
            ]);
            
        DB::table('features')->insert([
            'name'=>'かび',
            'feature'=>'白色のかびがある',
            ]);
            
        DB::table('features')->insert([
            'name'=>'かび',
            'feature'=>'灰褐色のかびがある',
            ]);
            
        DB::table('features')->insert([
            'name'=>'位置',
            'feature'=>'症状は半分にだけ現れている',
            ]);
            
        DB::table('features')->insert([
            'name'=>'位置',
            'feature'=>'病斑は10-15cm程度である',
            ]);
            
        DB::table('features')->insert([
            'name'=>'表皮',
            'feature'=>'コルク化し、細かい亀裂がある',
            ]);
            
        DB::table('features')->insert([
            'name'=>'くびれ',
            'feature'=>'細くくびれている',
            ]);
            
        DB::table('features')->insert([
            'name'=>'位置',
            'feature'=>'地際にある',
            ]);
            
        DB::table('features')->insert([
            'name'=>'芋虫',
            'feature'=>'芋虫がいる',
            ]);
            
        DB::table('features')->insert([
            'name'=>'虫の色',
            'feature'=>'虫の色は白色である',
            ]);
            
        DB::table('features')->insert([
            'name'=>'白い筋',
            'feature'=>'白い筋がある',
            ]);
            
        DB::table('features')->insert([
            'name'=>'色',
            'feature'=>'紫色になっている',
            ]);
            
        DB::table('features')->insert([
            'name'=>'葉',
            'feature'=>'症状は新葉が中心である',
            ]);
            
        DB::table('features')->insert([
            'name'=>'クロロシス',
            'feature'=>'クロロシスが生じている',
            ]);
            
        DB::table('features')->insert([
            'name'=>'奇形',
            'feature'=>'奇形である',
            ]);
            
        DB::table('features')->insert([
            'name'=>'とがっている',
            'feature'=>'とがっている',
            ]);
            
        DB::table('features')->insert([
            'name'=>'チャック上',
            'feature'=>'チャック状の線がある',
            ]);
            
        DB::table('features')->insert([
            'name'=>'網',
            'feature'=>'網が見える',
            ]);
            
        DB::table('features')->insert([
            'name'=>'ひび',
            'feature'=>'ひびが入る',
            ]);
            
    }
}
