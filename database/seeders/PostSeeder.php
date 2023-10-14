<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants')->insert([
            'name' => 'トマト',
            'species' => 'ナス科',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '黄化葉巻病',
            'feature'=>'縁が黄色くなっている',
        ]);
            
        DB::table('counterplans')->insert([
            'name'=>'株の廃棄',
            'feature'=>'病気株の廃棄',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name'=>'媒介昆虫のコナジラミ駆除',
            'method'=>'防虫ネットおよび粘着版の使用、農薬散布（カスケード乳剤、チェス粒剤、ダントツ粒剤等',
        ]);
        
        DB::table('parts')->insert([
            'name'=>'葉',
        ]);
        
        DB::table('parts')->insert([
            'name'=>'茎',
        ]);
        
        DB::table('parts')->insert([
            'name'=>'根',
        ]);
        
        DB::table('parts')->insert([
            'name'=>'花',
        ]);
        
        DB::table('parts')->insert([
            'name'=>'果実',
        ]);
        
    }
}
