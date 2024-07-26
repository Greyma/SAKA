<?php
use App\Http\Controllers\ClientController;
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
/*
    Route::get('/', function () {
        return view('welcome');
    });
*/

Route::get('/',[ClientController::class,'index']);
Route::get('/checkout',[ClientController::class,'checkout']);
Route::get('/decouvrer',[ClientController::class,'decouvrer']);
Route::get('/formulaire',[ClientController::class,'formulaire']);
Route::get('/panier',[ClientController::class,'panier']);
Route::get('/register',[ClientController::class,'register']);
Route::get('/shop',[ClientController::class,'shop']);
Route::get('/signin',[ClientController::class,'signin']);