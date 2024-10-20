<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;
class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Store::create([
            'name'=>'北野エース福岡パルコ店',
            'locationx'=>'33.59101',
            'locationy'=>'130.39856',
        ]);Store::create([
            'name'=>'フクショクC&C点',
            'locationx'=>'33.58879',
            'locationy'=>'130.40441',
        ]);Store::create([
            'name'=>'サニー赤坂店',
            'locationx'=>'33.58844',
            'locationy'=>'130.39099',
        ]);Store::create([
            'name'=>'マックスバリュエクスプレス大名店',
            'locationx'=>'33.58784',
            'locationy'=>'130.39288',
        ]);Store::create([
            'name'=>'生鮮市場大手門',
            'locationx'=>'33.59172',
            'locationy'=>'130.38577',
        ]);Store::create([
            'name'=>'ドン・キホーテ福岡天神本店',
            'locationx'=>'33.58662',
            'locationy'=>'130.39796',
        ]);Store::create([
            'name'=>'フードウェイ中州食小町店',
            'locationx'=>'33.59373',
            'locationy'=>'130.40603',
        ]);Store::create([
            'name'=>'日本一の新鮮市場かいぶつくん赤坂店',
            'locationx'=>'33.59037',
            'locationy'=>'130.39257',
        ]);Store::create([
            'name'=>'八百屋桃太郎',
            'locationx'=>'33.58605',
            'locationy'=>'130.39549',
        ]);Store::create([
            'name'=>'博多ステーションフード',
            'locationx'=>'33.59175',
            'locationy'=>'130.42093',
        ]);Store::create([
            'name'=>'ロピア博多ヨドバシ店',
            'locationx'=>'33.58823',
            'locationy'=>'130.42153',
        ]);Store::create([
            'name'=>'マックスバリュエクスプレス博多祇園店',
            'locationx'=>'33.59289',
            'locationy'=>'130.41075',
        ]);Store::create([
            'name'=>'にしてつストアレガネットキューソテラソ店',
            'locationx'=>'33.58806',
            'locationy'=>'130.42427',
        ]);Store::create([
            'name'=>'サニー駅南店',
            'locationx'=>'33.58319',
            'locationy'=>'130.42916',
        ]);Store::create([
            'name'=>'マルショク駅南店',
            'locationx'=>'33.58327',
            'locationy'=>'130.42402',
        ]);Store::create([
            'name'=>'マックスバリュ博多消防署通り店',
            'locationx'=>'33.58480',
            'locationy'=>'130.41844',
        ]);Store::create([
            'name'=>'サニー博多住吉店',
            'locationx'=>'33.58501',
            'locationy'=>'130.41698',
        ]);Store::create([
            'name'=>'マミーズ美野島店',
            'locationx'=>'33.57936',
            'locationy'=>'130.41673',
        ]);Store::create([
            'name'=>'たべごろ百旬館渡辺通本店',
            'locationx'=>'33.58444',
            'locationy'=>'130.40558',
        ]);Store::create([
            'name'=>'西鉄ストアレガネット天神店',
            'locationx'=>'33.59091',
            'locationy'=>'130.39898',
        ]);Store::create([
            'name'=>'サニー警固店',
            'locationx'=>'33.58377',
            'locationy'=>'130.39004',
        ]);
    }
}
