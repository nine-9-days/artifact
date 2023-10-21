<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class disease_plant_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 1;
        
        while ($count<30){
            DB::table('disease_plant')->insert([
                'plant_id' => 1,
                'disease_id' => $count,
            ]);
            $count++;
        }
    }
}
