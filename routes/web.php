<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;

use Illuminate\Http\Response;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sanpham', [HomeController::class, 'products'])->name('product');

Route::get('/them-san-pham', [HomeController::class, 'getAdd']);

//Route::post('/them-san-pham', [HomeController::class, 'postAdd']);

Route::put('/them-san-pham', [HomeController::class, 'putAdd']);

Route::get('lay-thong-tin',[HomeController::class, 'getArr']);

Route::get('demo-response', function(){

//$content = '<h2>Học lập trình tại Unicode</h2>';
// $content = 'Học lập trình tại Unicode';
//    $content = json_encode([
//     'Item 1',
//     'Item 2',
//     'Item 3'

//    ]);
//     $response = (new Response($content))->header('Content-Type', 'application/json');
//    dd($response);

// $response = response();
// dd($response);

//$response = new Response('', 201);
//$response = response('Học lập trình tại Unicode', 404);

// $response = (new Response())->cookie('unicode', 'Training PHP - Laravel', 30);
// return $response;

//return view('clients.demo-test');

    $response = response()
    ->view('clients.demo-test', [
        'title' => 'Hoc HTTP Response'
    ], 201)
    ->header('Content-Type', 'application/json')
    ->header('API-Key', '123456');

    return $response;
});

// Route::get('demo-response-2', function(Request $request){
//     return $request->cookie('unicode');
// });
