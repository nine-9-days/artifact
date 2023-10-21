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
        $parts = array('葉','茎','根','果実');
 
        foreach($parts as $part){
            DB::table('parts')->insert([
                'name'=>$part,
            ]);
        }
        
    }
}
