<?php

use App\Http\Livewire\Admin\AddClientComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\EmployeeComponent;
use App\Http\Livewire\Admin\AddEmployeeComponent;
use App\Http\Livewire\Admin\AddleaveComponent;
use App\Http\Livewire\Admin\AddOrderComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\AddProjectCategoryComponent;
use App\Http\Livewire\Admin\AddProjectComponent;
use App\Http\Livewire\Admin\AddTaskComponent;
use App\Http\Livewire\Admin\CartComponent;
use App\Http\Livewire\Admin\ClientComponent;
use App\Http\Livewire\Admin\DepartmentComponent;
use App\Http\Livewire\Admin\EditClientComponent;
use App\Http\Livewire\Admin\EditEmployeeComponent;
use App\Http\Livewire\Admin\EditLeaveComponent;
use App\Http\Livewire\Admin\EditProductComponent;
use App\Http\Livewire\Admin\EditProjectCategoryComponent;
use App\Http\Livewire\Admin\EditProjectComponent;
use App\Http\Livewire\Admin\EditTaskComponent;
use App\Http\Livewire\Admin\LeaveComponent;
use App\Http\Livewire\Admin\ProductComponent;
use App\Http\Livewire\Admin\ProductDetailsComponent;
use App\Http\Livewire\Admin\ProjectCategoryComponent;
use App\Http\Livewire\Admin\ProjectComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Employee\EmployeeDashboardComponent;
use App\Http\Livewire\Admin\RolePermissionComponent;
use App\Http\Livewire\Admin\TaskComponent;
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
    Route::get('/employee/edit/{e_id}', EditEmployeeComponent::class)->name('edit.employee');

    Route::get('/clients', ClientComponent::class)->name('show.client');
    Route::get('/client/add', AddClientComponent::class)->name('add.client');
    Route::get('/client/edit/{c_id}', EditClientComponent::class)->name('edit.client');

    Route::get('/leaves', LeaveComponent::class)->name('show.leaves');
    Route::get('/leave/add', AddleaveComponent::class)->name('add.leave');
    Route::get('/leave/edit/{l_id}', EditLeaveComponent::class)->name('edit.leave');

    Route::get('/admin/department', DepartmentComponent::class)->name('admin.department');

    Route::get('/project/categories', ProjectCategoryComponent::class)->name('show.category');
    Route::get('/project/category/add', AddProjectCategoryComponent::class)->name('add.category');
    Route::get('/project/categoty/edit/{cat_id}', EditProjectCategoryComponent::class)->name('edit.category');

    Route::get('/project', ProjectComponent::class)->name('show.project');
    Route::get('/project/add', AddProjectComponent::class)->name('add.project');
    Route::get('/project/edit/{pro_id}', EditProjectComponent::class)->name('edit.project');

    Route::get('/tasks', TaskComponent::class)->name('show.task');
    Route::get('/task/add', AddTaskComponent::class)->name('add.task');
    Route::get('/task/edit/{t_id}', EditTaskComponent::class)->name('edit.task');

    Route::get('/products', ProductComponent::class)->name('show.product');
    Route::get('/product/add', AddProductComponent::class)->name('add.product');
    Route::get('/product/edit/{p_id}', EditProductComponent::class)->name('edit.product');
    Route::get('/product/details/{p_id}', ProductDetailsComponent::class)->name('product.details');

    Route::get('/cart', CartComponent::class)->name('product.cart');
});