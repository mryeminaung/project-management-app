<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('projects', ProjectController::class);

    Route::resource('tasks', TaskController::class);

    Route::get('tasks/completed', function () {
        $completedTasks = Task::complete()->inRandomOrder()->take(3)->get();
        dd($completedTasks);

        return Inertia::render('Task/Partials/CompletedTasks', [
            'tasks' => $completedTasks
        ]);
    })->name('tasks.completed');

    Route::get('tasks/in-progress', function () {
        $inProgressTasks = Task::inProgress()->inRandomOrder()->take(3)->get();
        dd($inProgressTasks);

        return Inertia::render('Task/Partials/InProgressTasks', [
            'tasks' => $inProgressTasks
        ]);
    })->name('tasks.progress');

    Route::get('tasks/pending', function () {
        $pendingTasks = Task::pending()->inRandomOrder()->take(3)->get();
        dd($pendingTasks);

        return Inertia::render('Task/Partials/PendingTasks', [
            'tasks' => $pendingTasks
        ]);
    })->name('tasks.pending');

    Route::resource('users', UserController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
