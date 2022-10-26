<?php

use App\Events\ChatEvent;
use App\Models\User;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Notifications\RealTimeNotification;
use App\Http\Controllers\TransferenciasController;
use App\Models\Transferencia;

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
    return view('welcome');
});

Route::get('/sender', function () {
    return view('sender');
});

Route::get('/receiver', function () {
    return view('receiver');
});

Route::post('send', function(Request $request){
    $request->validate([
        'name' => 'required',
        'message' => 'required'
    ]);
    
    $user = User::findOrFail($request->destination);
    // $trans = new TransferenciasController;
    // $trans->almacenarTransferencia($request->name, $request->message, $request->destination, $request->item);
    $user->notify(new RealTimeNotification($request->message));
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/login', [LoginController::class, 'show']);