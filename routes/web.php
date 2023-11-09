<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Models\Project;
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

Route::get('/', function () {
    $projects = Project::all();
    return view('welcome', compact('projects'));
});

// ROUTES ADMIN
Route::middleware('auth', 'verified') // PER GLI UTENTI LOGGATI & VERIFICATI
    ->name('admin.') // NOME DELLE ROTTE INIZIA CON 'admin.'
    ->prefix('admin') // PREFIX DEGLI URL INIZIANO CON '/admin/'
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('projects/restore/{id}', [ProjectController::class, 'restore'])->name('projects.restore');
        Route::get('projects/forceDelete/{id}', [ProjectController::class, 'forceDelete'])->name('projects.forceDelete');
        Route::get('projects/recycle', [ProjectController::class, 'recycle'])->name('projects.recycle');
        Route::get('projects/recycle/{id}', [ProjectController::class, 'showTrashed'])->name('projects.showTrashed');
        Route::resource('projects', ProjectController::class )->parameters(['projects' => 'project:slug']);
    });

    Route::get('projects/recycle', [ProjectController::class, 'recycle']); // FARE DOMANDE SU QUESTO

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
