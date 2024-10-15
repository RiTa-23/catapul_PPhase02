<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //肉・野菜・果物の3カテゴリー作成する
        Category::create([
            'name'=>'肉',
        ]);
        Category::create([
            'name'=>'野菜',
        ]);
        Category::create([
            'name'=>'果物',
        ]);
    }
}
