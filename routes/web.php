<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\MyJobApplicationController;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

Route::get('', fn() => to_route('jobs.index'));
Route::resource('jobs', JobController::class)->only(['index', 'show']);
Route::resource('auth', AuthController::class)->only(['create', 'store']);
Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class,'destroy'])->name('auth.destroy');

Route::middleware('auth')->group(function(){
    Route::resource('job.application', JobApplicationController::class)->only(['create','store']);
    Route::resource('my-job-applications', MyJobApplicationController::class)->only(['index','destroy']);
});


// Route::get('/post', function() {
//     $user = User::create ([
//         'name' => 'test',
//         'email' => 'test@example.com',
//         'password' => Hash::make('password')
//     ]);
// return $user->first();
// });