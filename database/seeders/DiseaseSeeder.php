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
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '黄化えそ病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '黄化葉巻病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '茎えそ細菌病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '黒斑細菌病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '斑点細菌病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '軟腐病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> 'かいよう病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '青枯病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '輪紋病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '斑点病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '白星病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '炭疽病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '褐色輪紋病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> 'うどんこ病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '疫病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '葉かび病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '灰色かび病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '菌核病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '萎凋病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '根腐萎凋病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '半身萎凋病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '褐色根腐病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '灰色疫病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '根腐病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '根腐疫病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '黒点根腐病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '白絹病',
        ]);
        
        DB::table('diseases')->insert([
            'name'=> '苗立枯病',
        ]);
    }
}
