<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PestcontrolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pestcontrols')->insert([
            'name' => 'シルバーマルチ、シルバーテープを張る',
            'method' => 'アブラムシの飛来を防ぐ',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '除草',
            'method' => '圃場内外の除草',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '防虫ネットの設置',
            'method' => '施設内に原因害虫の侵入を抑制するための防虫ネットを設置する',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '粘着版の設置',
            'method' => '黄色、青色の粘着版を設置する',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '農薬散布',
            'method' => 'ネオニコチノイド系薬剤',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '農薬散布',
            'method' => 'カスケード乳剤',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '農薬散布',
            'method' => 'コテツフロアブル',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '生物防除',
            'method' => 'オンシツツヤコバチ、サバクツヤコバチ、リモニカカブリダニ剤、マイコタール等を導入する',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '農薬散布',
            'method' => 'マスタピース水和剤を散布する',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '農薬散布',
            'method' => 'Zボルドーを散布する',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '農薬散布',
            'method' => 'アミスター、ロブラール水和剤、オルバ顆粒水和剤、スクレアフロアブル、ボルドーを散布する',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '植物残渣の処分',
            'method' => '植物残渣を処分する',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '農薬散布',
            'method' => 'ダコニール、アミスターを散布する',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '農薬散布',
            'method' => 'シグナムWDG、アフェットフロアブル、ピクシオDF、ゲッター水和剤等を散布する。',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '農薬散布',
            'method' => 'アファーム乳剤、ディアナSC、フェニックス顆粒水和剤、プレオフロアブルなどを散布する。',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '耐病性台木',
            'method' => '耐病性台木に接ぎ木をする',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '土壌消毒',
            'method' => '土壌消毒をする（クロルピクリンくん蒸剤、バスアミド微粒剤などを使用しても良い）',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => 'ポッド、培地消毒',
            'method' => '栽培用のポッドや培地を消毒する',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => 'オクトクロスの使用',
            'method' => '培養液中にオクトクロスを入れておく',
        ]);
        
        DB::table('pestcontrols')->insert([
            'name' => '天地返し',
            'method' => '天地返しにより、菌核を地中に埋没させる',
        ]);
    }
}
