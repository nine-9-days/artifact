<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pestcontrolAdd_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pestcontrols')->insert([
            'name'=>'農薬散布',
            'method'=>'ミギワ10フロアブル、ケンジャフロアブル、アフェットフロアブル等を散布する',
        ]);
    }
}
