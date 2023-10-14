<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants')->insert([
            'name' => 'キャベツ',
            'species' => 'アブラナ科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'はくさい',
            'species' => 'アブラナ科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'きゅうり',
            'species' => 'ウリ科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'キャベツ',
            'species' => 'アブラナ科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'さといも',
            'species' => 'サトイモ科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'だいこん',
            'species' => 'アブラナ科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'たまねぎ',
            'species' => 'ヒガンバナ科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'なす',
            'species' => 'ナス科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'にんじん',
            'species' => 'セリ科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'ねぎ',
            'species' => 'ヒガンバナ科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'ばれいしょ',
            'species' => 'ナス科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'ピーマン',
            'species' => 'ナス科',
        ]);
        
        DB::table('plants')->insert([
            'name' => 'レタス',
            'species' => 'キク科',
        ]);
    }
}
