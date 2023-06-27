<?php

use App\Http\Livewire\Pages\CatalogPage;
use App\Http\Livewire\Pages\HomePage;
use App\Http\Livewire\Pages\ProductDetailPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomePage::class)
     ->name('home');

Route::get('/catalog', CatalogPage::class)
     ->name('catalog.index');

Route::get('/product/{slug}', ProductDetailPage::class)
     ->name('products.show');
