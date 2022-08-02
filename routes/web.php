<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\RolePermissionComponent;
use App\Http\Livewire\HomeComponent;
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

Route::get('/', function () {
    return view('welcome');
}); 

//Route::get('/', HomeComponent::class);
Route::get('/admin/role', RolePermissionComponent::class)->name('role.permission');

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/

//user or customer
Route::middleware(['auth:sanctum','verified'])->group(function(){

});

//Employee
Route::middleware(['auth:sanctum','verified'])->group(function(){

});

//admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/dashboard', AdminDashboardComponent::class);
});