<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;

use Illuminate\Http\Response;
use PhpParser\Node\Stmt\Return_;

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

Route::post('/them-san-pham', [HomeController::class, 'postAdd']);

Route::put('/them-san-pham', [HomeController::class, 'putAdd']);

Route::get('lay-thong-tin',[HomeController::class, 'getArr']);

Route::get('demo-response', function(){
   
    return view('clients.demo-test');
})->name('demo-respone');

Route::post('demo-response', function(Request $request){
    //return 'submit ok';
    if(!empty($request->username)){
        //return route('demo-respone');
        //return redirect(route('demo-respone'))->with('');

        return back()->withInput()->with('mess', 'validate thanh cong');
    }
    return redirect(route('demo-respone'))->with('mess', 'validate khong thanh cong');
});

Route::post('download-image',  [HomeController::class, 'downloadImage'])->name('download-image');

Route::post('download-doc',  [HomeController::class, 'downloadDoc'])->name('download-doc');

