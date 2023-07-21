<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Artisan;


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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);



Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/p/{slug}', [webcontroller::class, 'blogShow']);
Route::get('/category/{slug}', [webcontroller::class, 'catShow']);

Route::get('/clear', function () {
    try {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');

        return 'Cache cleared successfully.';
    } catch (\Exception $e) {
        return 'Error while clearing cache: ' . $e->getMessage();
    }
});
