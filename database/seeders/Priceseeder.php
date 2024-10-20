<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Price;
use App\Models\Item;
use App\Models\Category;
use App\Models\Store;
use App\Models\User;
class Priceseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Price::create([
            'price'=>'300',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'1',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'350',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'2',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'400',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'3',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'330',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'4',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'290',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'5',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'360',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'6',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'450',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'7',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'390',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'8',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'440',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'9',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'280',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'10',
            'user_id'=>'1',
    ]);Price::create([
            'price'=>'250',
            'stock'=>NULL,
            'category_id'=>'3',
            'item_id'=>'18',
            'store_id'=>'11',
            'user_id'=>'1',
    ]);
            
            

    
    }
}
