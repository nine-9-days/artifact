<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parts')->insert([
            'name'=>'植物体全体',
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
