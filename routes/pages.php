<?php
use Illuminate\Support\Facades\Route;

$pages = \App\Models\ContentPage::all();

foreach ($pages as $page){
    Route::get('/'.$page->slug, [\App\Http\Controllers\ContentPageController::class, 'index']);
}
