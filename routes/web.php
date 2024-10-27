<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\MapController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/leaflet', function () {
    return view('layouts.leaflet');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/complete', function () {
    return view('prices.complete');
})->middleware(['auth', 'verified'])->name('complete');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('stores', StoreController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('items', ItemController::class);
    Route::resource('prices', PriceController::class);
    Route::get('/categories/{category}/items', [ItemController::class, 'index'])->name('items.index');

    Route::get('/items/search/{item}', [ItemController::class, 'search'])->name('items.search');
    Route::get('/items/search/{item}', [MapController::class, 'showMap'])->name('items.search');

    Route::get('/prices/create/{item}/', [PriceController::class, 'create'])->name('prices.create');
    Route::get('/prices/create/{item}/', [MapController::class, 'showMap_priceCreate'])->name('prices.create');

    Route::get('/prices/show/{store}/{item}', [PriceController::class, 'show'])->name('prices.show');

    Route::post('/prices/store', [PriceController::class, 'store'])->name('prices.store');
});

require __DIR__.'/auth.php';
