<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;




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

Route::get('/', [HelloController::class, 'index']);
Route::get('/act', [HelloController::class, 'act']);
Route::get('/act/teste', [HelloController::class, 'teste']);



// Route::get('/mazza', function () {
//     return 'MazzaFC';
// });

?>

