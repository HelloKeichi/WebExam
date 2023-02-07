<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Course_group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::prefix('admin')->group(['middleware' => ['auth', 'verified']], function () {
    /* Name: course_group
     * Url: /course_group/*
     * Route: course_group.*

    Route::get('course_group', Course_group::class)->name('course_group');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
