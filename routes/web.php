<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Request as ModelsRequest;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\Admin\RequestController as AdmimRequestController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;

//* Public Routes
Route::get('/', [RequestController::class , 'index']);
Route::get('request/{id}' , function ($id) {
    return view('show', [
        'request' => ModelsRequest::find($id)
    ]);
});

//* Auth Route

Route::middleware('auth')->group(function(){
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/edit', [ProfileController::class, 'edit']);
    Route::put('/profile', [ProfileController::class, 'update']);
    Route::get('/password/ensure', [PasswordController::class, 'index']);
    Route::post('/password/check', [PasswordController::class, 'check']);
    Route::get('/password/edit', [PasswordController::class, 'edit']);
    Route::put('/password', [PasswordController::class, 'update']);
});


//* Supervisor Routes

Route::middleware('supervisor')->group(function () {
    Route::get('supervisor' , [SupervisorController::class , 'index']);
    Route::get('supervisor/request/create', [RequestController::class, 'create']);
    Route::post('supervisor/request', [RequestController::class, 'store']);
});




//* Admin Routes
Route::middleware('admin')->group(function () {
    Route::get('admin', function (){
        return view('admin.index', [
            'requests' => ModelsRequest::all(),
            'ActiveIniative' => ModelsRequest::where('classification', '=' , 'initiative')->where('status', '=', 'accepted')->get(),
            'ActiveOpportunity' => ModelsRequest::where('classification', '=' , 'opportunity')->where('status', '=', 'accepted')->get(),
            'PendingIniative' => ModelsRequest::where('classification', '=' , 'initiative')->where('status', '=', 'pending')->get(),
            'PendingOpportunity' => ModelsRequest::where('classification', '=' , 'opportunity')->where('status', '=', 'pending')->get(),
        ]);
    })->name('dashboard');


        Route::resource('admin/users', UserController::class);
        Route::resource('admin/requests', AdmimRequestController::class)->only(
            'index',
            'show',
            'edit',
            'update'
        );
});


//* Authtication 
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
    Route::get('register', [RegisterController::class , 'create']);
    Route::post('register', [RegisterController::class, 'store']);
});

Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');
