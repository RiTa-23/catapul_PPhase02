<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

use App\Models\Category;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        $items = $category->items()->get();


    return view('items.index', compact('items','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
    // items.index ビューにデータを渡す
    return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function search(Item $item)
    {
        //
        return view('items.search', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
