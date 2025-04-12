<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [HomeController::class, 'index']);
Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/contact', 'contact');
Route::view('/gallery', 'gallery');
Route::post('/save/enquery/farmer', [HomeController::class, 'farmer'])->name('save.farmer');
Route::post('/save/enquery/customer', [HomeController::class, 'customer'])->name('save.customer');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [HomeController::class, 'loginCheck'])->name('login.check');



Route::get('/admin',[DashboardController::class, 'index'])->name('admin.home');
Route::get('/admin/blank',[DashboardController::class, 'blank']);
Route::get('/admin/view/{pagename}',[DashboardController::class, 'viewPage'])->name('viewadmin');
Route::post('/admin/save/product',[DashboardController::class, 'saveProduct'])->name('saveProduct');
Route::get('/admin/edit/product/{product}',[DashboardController::class, 'editProduct'])->name('editProduct');
Route::get('/admin/edit/recipes/{id}',[DashboardController::class, 'editRecipes'])->name('editRecipes');
Route::post('/admin/update/product/{product}',[DashboardController::class, 'updateProduct'])->name('updateProduct');
Route::post('/admin/update/recipe/{recipe}',[DashboardController::class, 'updateRecipe'])->name('updateRecipe');
Route::post('/admin/save/recipes',[DashboardController::class, 'saveRecipes'])->name('saveRecipes');
// saveRecipes
// viewPage
