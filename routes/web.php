<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/users', [UsersController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('users');

Route::get('/users/profile/{user}', [UsersController::class, 'show'])
    ->name('users.show');

Route::get('/users/{user}', [UsersController::class, 'edit'])
    ->middleware(['auth'])
    ->name('users.edit');

Route::put('/users/{user}', [UsersController::class, 'update'])
    ->middleware(['auth'])
    ->name('users.update');

Route::delete('/users/{user}', [UsersController::class, 'destroy'])
    ->middleware(['auth', 'admin'])
    ->name('users.destroy');


Route::get('/', function () {
    return view('bienvenue');
});

Route::get('apropos', function () {
    return view('apropos');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('mentionsLegales', function () {
    return view('mentionsLegales');
});

