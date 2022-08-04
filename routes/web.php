<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\EmployeeComponent;
use App\Http\Livewire\Admin\AddEmployeeComponent;
use App\Http\Livewire\Admin\DepartmentComponent;
use App\Http\Livewire\Admin\EditEmployeeComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Employee\EmployeeDashboardComponent;
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
    Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
});

//Employee
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/employee/dashboard', EmployeeDashboardComponent::class)->name('employee.dashboard');
});

//admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/', AdminDashboardComponent::class);
    Route::get('/employee/show', EmployeeComponent::class)->name('show.employee');
    Route::get('/employee/add', AddEmployeeComponent::class)->name('add.employee');
    Route::get('/employee/edit/{employee_id}', EditEmployeeComponent::class)->name('edit.employee');

    Route::get('/admin/department', DepartmentComponent::class)->name('admin.department');
});