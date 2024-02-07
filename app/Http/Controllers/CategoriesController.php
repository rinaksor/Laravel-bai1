<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(Request $request){
       // neu la trang danh sach chuyen muc => hien thi ra dong chu: xin chao unicode
        // if ($request->is('categories')){
        //     echo '<h3>xin chao unicode</h3>';
        // }
    }

    //Hien thi danh sach chuyen muc (phuong thuc GET)
    public  function index(Request $request){
        // if (isset($_GET['id'])){
        //     echo $_GET['ID'];
        // }
        // $request = new Request();
        // dd($request);
        // $allData = $request->all();
        // $request->all()['id'];
        // echo $allData['id'];
        // dd($allData);
        // $path = $request->path();
        // echo $path;
        // $url = $request->url();
    
        // $fullUrl= $request->fullUrl();
        // echo $fullUrl;

        // $method = $request->method();
        // echo $method;

        $ip = $request->ip();
        // echo 'IP la: '.$ip;

        // if ($request->isMethod('GET')){
        //     echo 'Phuong thuc GET';
        // }

        // $server = $request->server();
        // print_r($server);

        // dd($server['REQUEST_URI']);

        // $header = $request->header('user-agent');
        // dd($header);

        // $id = $request->input('id');
        // echo $id;

        //$id = $request->input('id.*.name');

        // $id = $request->id;
        // $name = $request->name;
        // dd($id);

        //dd(request()->id);

        $name = request('name', 'Unicode');
        dd($name);

        return view('clients/categories/list');

    }
    // lay ra 1 uc theo id (phuong thuc GET)
    public function getCategory($id){
        return view('clients/categories/edit');
    }

    //cap nhat 1 chuyen muc (phuong thuc POST)
    public function updateCategory($id){
        return 'Submit sửa chuyên mục'.$id;
    }

    //Show form them du lieu (phuong thuc GET)
    public function addCategory(Request $request){
        $path = $request->path();
        echo $path;

        return view('clients/categories/add');
    }

    //them du lieu vao chuyen muc (phuong thuc POST)
    public function handleAddCategory(Request $request){
        // $allData = $request->all();

        // dd($allData);

        // if ($request->isMethod('POST')){
        //     echo 'Phuong thuc POST';
        // }


        //return 'Submit thêm chuyên mục';
    }

    //Xoa du lieu (phuong thuc Delete)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục'.$id;
    }
}
