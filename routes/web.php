<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{    
    Dashboard,
    Aquarium,
    AquarimDashboard,
    TypeEquipment\TypeEquipment
};
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard2');

Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/dashboard',Dashboard::class)->name('dashboad');
    Route::get('/aquario',Aquarium::class)->name('aquarium');
    Route::get('/aquario-dashboard/{id}',AquarimDashboard::class)->name('aquariumDashboard');
    Route::get('/tipo-de-equipamento',TypeEquipment::class)->name('typeEquipment');
});