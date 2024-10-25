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
        //
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
        // dd($request);
        // バリデーションを追加
        $request->validate([
            'price' => 'required|min_digits:1',
            'item_id' => 'required|exists:items,id', // item_id は items テーブルに存在する必要があります
            'store_id' => 'required|exists:stores,id', // store_id は stores テーブルに存在する必要があります
        ]);

        // リクエストから price, item_id, store_id を取得し、保存
        $request->user()->prices()->create([
            'price' => $request->price,
            'item_id' => $request->item_id,
            'store_id' => $request->store_id,
            'user_id' => $request->user()->id,
        ]);

        // 保存完了後、リダイレクト
        return redirect()->route('prices.show', [
            'item' => $request->input('item_id'),
            'store' => $request->input('store_id'),
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Price $price)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        //
    }
}
