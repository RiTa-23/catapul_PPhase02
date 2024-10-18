<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Item;
use Illuminate\Support\Facades\Hash;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Item::create([
            'Category_id'=>'1',
            'name'=>'鶏むね肉',
        ]);
        Item::create([
            'Category_id'=>'1',
            'name'=>'鶏もも肉',
        ]);
        Item::create([
            'Category_id'=>'1',
            'name'=>'豚ロース肉',
        ]);
        Item::create([
            'Category_id'=>'1',
            'name'=>'豚バラ肉',
        ]);
        Item::create([
            'Category_id'=>'1',
            'name'=>'豚挽き肉',
        ]);
        Item::create([
            'Category_id'=>'1',
            'name'=>'牛ヒレ肉',
        ]);
        Item::create([
            'Category_id'=>'1',
            'name'=>'牛ロース肉',
        ]);
        Item::create([
            'Category_id'=>'1',
            'name'=>'牛スジ肉',
        ]);
        Item::create([
            'Category_id'=>'2',
            'name'=>'トマト',        
        ]);
        Item::create([
            'Category_id'=>'2',
            'name'=>'ピーマン',        
        ]);
        Item::create([
            'Category_id'=>'2',
            'name'=>'なすび',        
        ]);
        Item::create([
            'Category_id'=>'2',
            'name'=>'ニンジン',        
        ]);
        Item::create([
            'Category_id'=>'2',
            'name'=>'玉ねぎ',        
        ]);
        Item::create([
            'Category_id'=>'2',
            'name'=>'じゃがいも',        
        ]);
        Item::create([
            'Category_id'=>'2',
            'name'=>'かぼちゃ',        
        ]);
        Item::create([
            'Category_id'=>'2',
            'name'=>'キャベツ',        
        ]);
        Item::create([
            'Category_id'=>'2',
            'name'=>'レタス',        
        ]);
        Item::create([
            'Category_id'=>'3',
            'name'=>'みかん',        
        ]);
        Item::create([
            'Category_id'=>'3',
            'name'=>'キウイ',        
        ]);
        Item::create([
            'Category_id'=>'3',
            'name'=>'バナナ',        
        ]);
        Item::create([
            'Category_id'=>'3',
            'name'=>'ぶどう',        
        ]);
        Item::create([
            'Category_id'=>'3',
            'name'=>'いちご',        
        ]);
        Item::create([
            'Category_id'=>'3',
            'name'=>'りんご',        
        ]);
    }
}
