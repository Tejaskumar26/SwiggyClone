<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Food;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('det',[HomeController::class,'index']);
Route::get('search', [HomeController::class, 'search']);
Route::get('detail/{id}', [HomeController::class, 'details']);
Route::post('/add_to_cart', [HomeController::class, 'addToCart']);
Route::get('cart', [HomeController::class, 'cart']);
Route::get('removecart/{id}', [HomeController::class, 'removecart']);
Route::get('orders', [HomeController::class, 'ordernow']);
Route::post('orderplace', [HomeController::class, 'orderPlace']);
Route::get('contact', [HomeController::class, 'contact']);
Route::post('contactus', [HomeController::class, 'contactus']);
Route::get('form',[HomeController::class,'form']);
Route::post('pay',[HomeController::class,'paid']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $details = Food::all();
        $userId = Auth::user()->id;
        $count = Cart::where('user_id', $userId)->count();
        return view('dashboard', ['details' => $details, 'count' => $count]);
        //return view('dashboard');
    })->name('dashboard');
});
