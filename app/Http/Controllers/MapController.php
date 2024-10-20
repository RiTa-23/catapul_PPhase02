<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;  // 店舗情報のモデル
use App\Models\Price;  // 価格情報のモデル
use App\Models\Item;

class MapController extends Controller
{
    public function showMap(Item $item)
    {
        // 商品と店舗の情報をデータベースから取得
        $prices = $item->prices()->get();
        //$prices = Price::with('store')->get(); // storeリレーションを事前に取得
        return view('items.search', compact('prices'));
    }
    public function showMap_priceCreate(Item $item)
    {
        // 商品と店舗の情報をデータベースから取得
        $prices = Price::with('store')->get(); // storeリレーションを事前に取得
        $stores = Store::All();
        return view('prices.create', compact('stores','prices'));
    }
}
