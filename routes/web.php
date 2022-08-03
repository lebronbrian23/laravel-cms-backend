<?php

use App\Http\Controllers\ContentBlockController;
use App\Http\Controllers\SocialMediaController;
use App\Models\Project;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\UsersController;
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
    return view('welcome', [
        'projects' => Project::all(),
    ]);
});

Route::get('/project/{project:slug}', function (Project $project) {
    return view('project', [
        'project' => $project,
    ]);
})->where('project', '[A-z\-]+');

Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

Route::get('/console/projects/list', [ProjectsController::class, 'list'])->middleware('auth');
Route::get('/console/projects/add', [ProjectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/projects/add', [ProjectsController::class, 'add'])->middleware('auth');
Route::get('/console/projects/edit/{project:id}', [ProjectsController::class, 'editForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/edit/{project:id}', [ProjectsController::class, 'edit'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/delete/{project:id}', [ProjectsController::class, 'delete'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/image/{project:id}', [ProjectsController::class, 'imageForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/image/{project:id}', [ProjectsController::class, 'image'])->where('project', '[0-9]+')->middleware('auth');

Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

Route::get('/console/types/list', [TypesController::class, 'list'])->middleware('auth');
Route::get('/console/types/add', [TypesController::class, 'addForm'])->middleware('auth');
Route::post('/console/types/add', [TypesController::class, 'add'])->middleware('auth');
Route::get('/console/types/edit/{type:id}', [TypesController::class, 'editForm'])->where('type', '[0-9]+')->middleware('auth');
Route::post('/console/types/edit/{type:id}', [TypesController::class, 'edit'])->where('type', '[0-9]+')->middleware('auth');
Route::get('/console/types/delete/{type:id}', [TypesController::class, 'delete'])->where('type', '[0-9]+')->middleware('auth');

Route::get('/console/content-blocks/list', [ContentBlockController::class, 'list'])->middleware('auth');
Route::get('/console/content-blocks/add', [ContentBlockController::class, 'addForm'])->middleware('auth');
Route::post('/console/content-blocks/add', [ContentBlockController::class, 'add'])->middleware('auth');
Route::get('/console/content-blocks/edit/{content_block:id}', [ContentBlockController::class, 'editForm'])->where('content_block', '[0-9]+')->middleware('auth');
Route::post('/console/content-blocks/edit/{content_block:id}', [ContentBlockController::class, 'edit'])->where('content_block', '[0-9]+')->middleware('auth');
Route::get('/console/content-blocks/delete/{content_block:id}', [ContentBlockController::class, 'delete'])->where('content_block', '[0-9]+')->middleware('auth');
Route::get('/console/content-blocks/image/{content_block:id}', [ContentBlockController::class, 'imageForm'])->where('content_block', '[0-9]+')->middleware('auth');
Route::post('/console/content-blocks/image/{content_block:id}', [ContentBlockController::class, 'image'])->where('content_block', '[0-9]+')->middleware('auth');

Route::get('/console/social-media/list', [SocialMediaController::class, 'list'])->middleware('auth');
Route::get('/console/social-media/add', [SocialMediaController::class, 'addForm'])->middleware('auth');
Route::post('/console/social-media/add', [SocialMediaController::class, 'add'])->middleware('auth');
Route::get('/console/social-media/edit/{social_media:id}', [SocialMediaController::class, 'editForm'])->where('social_media', '[0-9]+')->middleware('auth');
Route::post('/console/social-media/edit/{social_media:id}', [SocialMediaController::class, 'edit'])->where('social_media', '[0-9]+')->middleware('auth');
Route::get('/console/social-media/delete/{social_media:id}', [SocialMediaController::class, 'delete'])->where('social_media', '[0-9]+')->middleware('auth');
Route::get('/console/social-media/image/{social_media:id}', [SocialMediaController::class, 'imageForm'])->where('social_media', '[0-9]+')->middleware('auth');
Route::post('/console/social-media/image/{social_media:id}', [SocialMediaController::class, 'image'])->where('social_media', '[0-9]+')->middleware('auth');
