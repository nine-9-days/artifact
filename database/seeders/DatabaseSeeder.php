<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(PostSeeder::class);
        //$this->call(disease_plant_Seeder::class);
        $this->call(feature_part_Seeder::class);
        //$this->call(PlantSeeder::class);
        //$this->call(DiseaseSeeder::class);
       // $this->call(PestcontrolSeeder::class);
       // $this->call(CounterplanSeeder::class);
        //$this->call(FeatureSeeder::class);
        //$this->call(PartSeeder::class);
        $this->call(disease_plant_Seeder::class);
    }
}
