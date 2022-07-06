<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role as ContractsRole;
use Spatie\Permission\Models\Role;

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

Route::get('/create', function () {
    return view('create');
})->middleware(['auth'])->name('create');

Route::get('/createusers', function () {
    return view('createusers');
})->name('users');

Route::get('/edit/{id}/{name}/{des}/{role}', function ($id, $name, $des, $role) {
    return view('edituser', ['id' => $id, 'name' => $name, 'description' => $des, 'role ' => $role]);
})->name('edit');
Route::controller(UserController::class)->group(function () {
    Route::get('/show', 'show')->name('show');
    Route::get('/dashboard', 'show')->name('dashboard');
    Route::post('/storeuser', 'store')->name('store');
    Route::get('/delete/{id}', 'delete')->name('delete');
    Route::post('/update', 'update')->name('update');
});

Route::group(['middleware' => ['role:superadmin']], function () {
    Route::get('/superadmin', function () {
        return view('superadmin');
    })->name('superadmin');
});
require __DIR__ . '/auth.php';
