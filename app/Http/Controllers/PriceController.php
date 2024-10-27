<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Store;
use App\Models\Item;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 「登録した値段一覧」の画面を表示
        $prices = Price::with('user')->latest()->get();
        return view('prices.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Item $item)
    {
        //
        // ストアの一覧を取得
        $stores = Store::all();
        return view('prices.create',['stores' => $stores], ['item' => $item]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // バリデーションを追加
        $request->validate([
            'price' => 'required|min_digits:1|max_digits:4',
            'item_id' => 'required|exists:items,id', // item_id は items テーブルに存在する必要があります
            'store_id' => 'required|exists:stores,id', // store_id は stores テーブルに存在する必要があります
        ]);

        // リクエストから price, item_id, store_id, user_id を取得し、保存
        $request->user()->prices()->create([
            'price' => $request->price,
            'item_id' => $request->item_id,
            'store_id' => $request->store_id,
            'user_id' => $request->user()->id,
        ]);

        // 保存完了後、リダイレクト
        return redirect()->route('complete', [
            'item' => $request->input('item_id'),
            'store' => $request->input('store_id'),
        ])->with('success', '値段が登録されました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store,Item $item)
    { 
        return view('prices.show',compact('store'),compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        // 値段更新処理の入力側に飛ばす
        return view('prices.edit', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Price $price)
    {
        // バリデーションを追加
        $request->validate([
            'price' => 'required|min_digits:1',
        ]);

        // 値段の更新処理
        $price->update($request->only('price'));

        return redirect()->route('prices.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        // 値段削除処理
        $price->delete();
        return redirect()->route('prices.index');
    }
}