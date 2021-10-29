<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\DriverController;

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
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\HomeController@index');

//Admin

Route::get('/manage_package_view_add',[AdminController::class,'addviewpackage']);
Route::get('/manage_package_view_delete',[AdminController::class,'deleteviewpackage']);
Route::get('/manage_package_view_edit',[AdminController::class,'editviewpackage']);

Route::get('/manage_vehicle_view_add',[AdminController::class,'addviewvehicle']);
Route::get('/manage_vehicle_view_delete',[AdminController::class,'deleteviewvehicle']);
Route::get('/manage_vehicle_view_edit',[AdminController::class,'editviewvehicle']);

Route::get('/search_view_package',[AdminController::class,'searchviewpackage']);
Route::get('/search_view_vehicle',[AdminController::class,'searchviewvehicle']);
Route::get('/search_view_assigned_task',[AdminController::class,'searchviewassignedtask']);

Route::post('/upload_package',[AdminController::class,'uploadpackage']);

Route::get('/remove_data/{id}',[AdminController::class,'remove_data']);

Route::post('/upload_vehicle',[AdminController::class,'uploadvehicle']);

Route::get('/remove_data_vehicle/{id}',[AdminController::class,'remove_data_vehicle']);

Route::get('/search_package',[AdminController::class,'search_package']);

Route::get('/search_vehicle',[AdminController::class,'search_vehicle']);

Route::get('/search_task',[AdminController::class,'search_task']);

Route::get('/update_package_data/{id}',[AdminController::class,'update_package_data']);

Route::post('/admin_edit_package/{id}',[AdminController::class,'admin_edit_package']);

Route::get('/update_vehicle_data/{id}',[AdminController::class,'update_vehicle_data']);

Route::post('/admin_edit_vehicle/{id}',[AdminController::class,'admin_edit_vehicle']);

//Manager
Route::get('/manager_manage_package_view_add',[ManagerController::class,'manager_addviewpackage']);
Route::get('/manager_manage_package_view_delete',[ManagerController::class,'manager_deleteviewpackage']);
Route::get('/manager_manage_package_view_edit',[ManagerController::class,'manager_editviewpackage']);

Route::get('/manager_manage_vehicle_view_add',[ManagerController::class,'manager_addviewvehicle']);
Route::get('/manager_vehicle_view_delete',[ManagerController::class,'manager_deleteviewvehicle']);
Route::get('/manager_vehicle_view_edit',[ManagerController::class,'manager_editviewvehicle']);

Route::get('/manager_search_view_package',[ManagerController::class,'manager_searchviewpackage']);
Route::get('/manager_search_view_vehicle',[ManagerController::class,'manager_searchviewvehicle']);
Route::get('/manager_search_view_assigned_task',[ManagerController::class,'manager_searchviewassignedtask']);

Route::post('/manager_upload_package',[ManagerController::class,'manager_uploadpackage']);

Route::get('/manager_remove_data/{id}',[ManagerController::class,'manager_remove_data']);

Route::post('/manager_upload_vehicle',[ManagerController::class,'manager_uploadvehicle']);

Route::get('/manager_remove_data_vehicle/{id}',[ManagerController::class,'manager_remove_data_vehicle']);

Route::get('/manager_search_package',[ManagerController::class,'manager_search_package']);

Route::get('/manager_search_vehicle',[ManagerController::class,'manager_search_vehicle']);

Route::get('/manage_task_view_add',[ManagerController::class,'manage_task_view_add']);
Route::get('/manage_task_view_delete',[ManagerController::class,'manage_task_view_delete']);
Route::get('/manage_task_view_edit',[ManagerController::class,'manage_task_view_edit']);

//upload task
Route::post('/manager_upload_task',[ManagerController::class,'manager_upload_task']);

Route::get('/manager_remove_data_task/{id}',[ManagerController::class,'manager_remove_data_task']);

Route::get('/manager_search_task',[ManagerController::class,'manager_search_task']);
//

Route::get('/manager_update_package_data/{id}',[ManagerController::class,'manager_update_package_data']);

Route::post('/manager_edit_package/{id}',[ManagerController::class,'manager_edit_package']);

Route::get('/manager_update_vehicle_data/{id}',[ManagerController::class,'manager_update_vehicle_data']);

Route::post('/manager_edit_vehicle/{id}',[ManagerController::class,'manager_edit_vehicle']);

Route::get('/manager_update_task/{id}',[ManagerController::class,'manager_update_task']);

Route::post('/manager_edit_task/{id}',[ManagerController::class,'manager_edit_task']);

//Driver

Route::get('/driver_view_task',[DriverController::class,'driver_view_task']);

Route::get('/driver_search_task',[DriverController::class,'driver_search_task']);