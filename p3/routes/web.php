<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ConfirmationController;

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

//Route::get('/', function () {
    //[IndexController::class, 'getVaccines'];
//    return view('index');
//})->name('index');

Route::get('/', [IndexController::class, 
    'getVaccines']);

Route::post('confirm', ConfirmationController::class)->name('confirm');

Route::get('index', [IndexController::class, 
    'getVaccines'])->name('index');

Route::get('vaccines', [IndexController::class, 'getVaccines']);

Route::post('process', SubmissionController::class)->name('process');

Route::get('process', function () { 
    return view ('process');
});



Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});