<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeamMembersController;
use App\Http\Controllers\ProjectMembersController;
use App\Http\Controllers\ProjectLeaderController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\TeamLeaderController;
use App\Http\Controllers\workerController;
use App\Models\Request;
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

Route::get('/', [LoginController::class,'login'])->name('home');
Route::get('/worker', [WorkerController::class,'index'])->name('worker');
Route::get('/projects', [ProjectsController::class,'index'])->name('projects');
Route::get('/projectMembers', [ProjectMembersController::class, 'index'])->name('project_members');
Route::get('/projectleader', [ProjectLeaderController::class, 'index'])->name('project_leader');
Route::get('/teamleader', [TeamLeaderController::class, 'index'])->name('team_leader');
Route::get('/teamMembers', [TeamMembersController::class, 'index'])->name('team_members');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/requests', [RequestController::class, 'index'])->name('request');
