<?php
use App\Http\Controllers\ControllerTest;
use App\Http\Controllers\MeowController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
// use app\Http\Controllers;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/products', 'app/Http/Controllers/controllerTest.php@index'){
//     return view"hello";
// };

// Route::get('/data/{index}', 'app\Http\Controllers\controllerTest@index');

Route::get('/data', [ControllerTest::class, 'index']);
Route::get('/data/{index}', [ControllerTest::class, 'getData']);

Route::get('/', [HomeController::class, 'homepage']);
Route::get('/meows', [MeowController::class, 'datas']);
Route::get('/meows/{id}', [MeowController::class, 'datasById']);
