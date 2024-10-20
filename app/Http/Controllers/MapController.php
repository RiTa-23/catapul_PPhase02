<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;  // 店舗情報のモデル
use App\Models\Price;  // 価格情報のモデル

class MapController extends Controller
{
    public function showMap()
    {
        // 商品と店舗の情報をデータベースから取得
        $prices = Price::with('store')->get(); // storeリレーションを事前に取得
        return view('items.search', compact('prices'));
    }
}
