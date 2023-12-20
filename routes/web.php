<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RecipeController;

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

Route::get('/', [RecipeController::class,'index'])->name('recipe.index');
Route::get('/create', [RecipeController::class,'create'])->name('recipe.create');
Route::post('/', [RecipeController::class,'store'])->name('recipe.store');
Route::get('/{recipe}', [RecipeController::class,'show'])->name('recipe.show');


