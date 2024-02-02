<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    $html ='<h1>Hoc lap trinh tai Unicode</h1>';
    return $html;
});

// Route::get('unicode',function(){
//     return 'Phuong thuc Get cua path /unicode';
// });

// Route::get('unicode', function(){
//     return view('form');
// });

// Route::post('unicode', function(){
//     return 'Phuong thuc Post cua path /unicode';
// });

// Route::put('unicode', function(){
//     return 'Phuong thuc Put cua path /unicode';
// });

// Route::delete('unicode', function(){
//     return 'Phuong thuc Delete cua path /unicode';
// });

// Route::patch('unicode', function(){
//     return 'Phuong thuc Patch cua path /unicode';
// });

// Route::any('unicode', function(Request $request){
//     return $request->method();
// });

// Route::get('show-form', function(){
//     return view('form');
// });

//Route::redirect('unicode', 'show-form', 404);

//Route::view('show-form', 'form');

Route::prefix('admin')->group(function(){
    Route::get('unicode',function(){
        return 'Phuong thuc Get cua path /unicode';
    });
    
    Route::get('show-form', function(){
        return view('form');
    });

    Route::prefix('admin')->group(function(){
        Route::get('/', function(){
            return 'Danh sach san pham';
        });

        Route::get('/add', function(){
            return 'Them san pham';
        });

        Route::get('edit', function(){
            return 'sua san pham';
        });

        Route::get('delete', function(){
            return 'Xoa san pham';
        });
    });
});
