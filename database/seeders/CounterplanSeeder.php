<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounterplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counterplans')->insert([
            'name' => 'シルバーマルチ、シルバーテープを張る',
            'feature' => 'アブラムシの飛来を防ぐ',
            'pestcontrol_id' => 1,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '除草',
            'feature' => '圃場内外の除草',
            'pestcontrol_id' => 2,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '防虫ネットの設置',
            'feature' => '施設内に原因害虫の侵入を抑制するための防虫ネットを設置する',
            'pestcontrol_id' => 3,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '粘着版の設置',
            'feature' => '黄色、青色の粘着版を設置する',
            'pestcontrol_id' => 4,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '農薬散布',
            'feature' => 'ネオニコチノイド系薬剤',
            'pestcontrol_id' => 5,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '農薬散布',
            'feature' => 'カスケード乳剤',
            'pestcontrol_id' => 6,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '農薬散布',
            'feature' => 'コテツフロアブル',
            'pestcontrol_id' => 7,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '農薬散布',
            'feature' => 'マスタピース水和剤を散布する',
            'pestcontrol_id' => 9,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '農薬散布',
            'feature' => 'Zボルドーを散布する',
            'pestcontrol_id' => 10,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '農薬散布',
            'feature' => 'アミスター、ロブラール水和剤、オルバ顆粒水和剤、スクレアフロアブル、ボルドーを散布する',
            'pestcontrol_id' => 11,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '植物残渣の処分',
            'feature' => '植物残渣を処分する',
            'pestcontrol_id' => 12,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '農薬散布',
            'feature' => 'ダコニール、アミスターを散布する',
            'pestcontrol_id' => 13,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '農薬散布',
            'feature' => 'シグナムWDG、アフェットフロアブル、ピクシオDF、ゲッター水和剤等を散布する。',
            'pestcontrol_id' => 14,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '農薬散布',
            'feature' => 'アファーム乳剤、ディアナSC、フェニックス顆粒水和剤、プレオフロアブルなどを散布する。',
            'pestcontrol_id' => 15,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '土壌消毒',
            'feature' => '土壌消毒をする（クロルピクリンくん蒸剤、バスアミド微粒剤などを使用しても良い）',
            'pestcontrol_id' => 17,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => 'ポッド、培地消毒',
            'feature' => '栽培用のポッドや培地を消毒する',
            'pestcontrol_id' => 18,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => 'オクトクロスの使用',
            'feature' => '培養液中にオクトクロスを入れておく',
            'pestcontrol_id' => 19,
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '幼虫を手作業で取り除く',
            'feature' => '幼虫を手作業で取り除く',
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '病徴部位を取り除く',
            'feature' => '病徴部位を取り除く',
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '必要な栄養素を添加',
            'feature' => '必要な栄養素を培地や培養液中に添加する',
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '培養液を作り直す',
            'feature' => '培地に排水が出る程度にかん水を行い、今やっている培養液を作り直す',
        ]);
        
        DB::table('counterplans')->insert([
            'name' => '株を廃棄する',
            'feature' => '伝染する可能性があるため、病徴が出た株を廃棄する',
        ]);
        
    }
}
