<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TacticsController;
use App\Http\Controllers\TrainingController;

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

Route::get('/', [PagesController::class, 'index'] );

Route::get('/tactics', [PagesController::class, 'tactics'] );
Route::get('/tactic-352', [TacticsController::class, 'tactics352'] );
Route::get('/tactic-343', [TacticsController::class, 'tactics343'] );
Route::get('/tactic-442', [TacticsController::class, 'tactics442'] );
Route::get('/tactic-433', [TacticsController::class, 'tactics433'] );
Route::get('/tactic-451', [TacticsController::class, 'tactics451'] );
Route::get('/tactic-4411', [TacticsController::class, 'tactics4411'] );
Route::get('/tactic-442D', [TacticsController::class, 'tactics442D'] );
Route::get('/tactic-4141', [TacticsController::class, 'tactics4141'] );
Route::get('/tactic-4231', [TacticsController::class, 'tactics4231'] );

Route::get('/training', [PagesController::class, 'training'] );
Route::get('/training-drill-1', [TrainingController::class, 'tdrill1'] );
Route::get('/training-drill-2', [TrainingController::class, 'tdrill2'] );
Route::get('/training-drill-3', [TrainingController::class, 'tdrill3'] );
Route::get('/training-drill-4', [TrainingController::class, 'tdrill4'] );
Route::get('/training-drill-5', [TrainingController::class, 'tdrill5'] );
Route::get('/training-drill-6', [TrainingController::class, 'tdrill6'] );

