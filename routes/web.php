<?php

use App\Models\Organization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\OrganizationController;

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

Route::get('/', function () {
    return view('welcome' , [
        'title' => 'Home Page'
    ]);
});
Route::get('/home', function () {
    return view('welcome' , [
        'title' => 'Home Page'
    ]);
});

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles/search', [ArticleController::class, 'search']);
Route::post('/articles/category', [ArticleController::class, 'category']);
Route::get('/articles/{article}/show', [ArticleController::class, 'show']);


Route::get('/myarticles', [ArticleController::class, 'myIndex']);
Route::get('/myarticles/create', [ArticleController::class, 'create']);
Route::post('/myarticles/create', [ArticleController::class, 'store']);
Route::get('/myarticles/{article}/edit', [ArticleController::class, 'edit']);
Route::put('/myarticles/{article}/edit', [ArticleController::class, 'update']);
Route::delete('/myarticles/{article}/delete', [ArticleController::class, 'destroy']);


Route::get('/organization', [OrganizationController::class, 'index']);
Route::get('/myorganization', [OrganizationController::class, 'myIndex']);
Route::get('/myorganization/create', [OrganizationController::class, 'create']);
Route::get('/myorganization/{organization}/show', [OrganizationController::class, 'show']);
Route::get('/myorganization/{organization}/edit', [OrganizationController::class, 'edit']);
Route::put('/myorganization/{organization}/edit', [OrganizationController::class, 'update']);
Route::post('/myorganization/create', [OrganizationController::class, 'store']);