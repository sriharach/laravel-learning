<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use Whoops\Run;

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
    // return view('welcome');
});
Route::get('/', [BasicController::class, 'home']); //เรียกจาก controller
Route::get('/link', [BasicController::class, 'link']);
Route::get('/login', [BasicController::class, 'login']);

Route::get('/employees', [BasicController::class, 'employees']);

Route::get('view_deptmanager', [EmployeeController::class, 'view_deptmanager']);

// Route::resource('products', [ProductController::class]);


// Route::get('/employeelist', [BasicController::class, 'employeelist']);

// Route::get('users/{id}', function ($id) {
//     return "Hello " . $id;
// });
