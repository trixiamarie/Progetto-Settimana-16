<?php

use App\Http\Controllers\ProfileController;
use App\Models\Progetto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    $userId = Auth::id(); 
    $progetti = Progetto::where('user_id', $userId)->get(); 
    $role_id = auth()->user()->role_id;

    if ($role_id != 1) {
        return view('dashboard', ['userId' => $userId, 'progetti' => $progetti]); 
    } else {
        $users = User::all();
        return view('dashboardadmin', ['userId' => $userId, 'users' => $users]); 
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
