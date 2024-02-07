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

        // $name = request('name', 'Unicode');
        // dd($name);

        //$id = $request->query('id');
        //dd($id);

        $query = $request->query();
        dd($query);

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
        // $path = $request->path();
        // echo $path;
        
        $cateName = $request->old('category_name', 'Mac dinh');

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

        //$cateName = $request->query();
        
        if ($request->has('category_name')){
            $cateName = $request->category_name;
            $request->flash(); //set session flash

            return redirect(route('categories.add'));
        }
    }

    //Xoa du lieu (phuong thuc Delete)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục'.$id;
    }

    public function getFile(){

        return view('clients/categories/file');
    }

    //Xu ly lay thong tin file
    public function handleFile(Request $request){
        //$file = $request->file('photo');
        if($request->hasFile('photo')){
            if ($request->photo->isValid()){
                $file = $request->photo;
                //path = $file->path();
                $ext = $file->extension();
                //$path = $file->store('file-txt' ,'local');
                //$path = $file->storeAs('file-txt' ,'khoa-hoc.txt');
                
                //$fileName = $file->getClientOriginalName();

                //Doi ten 
                $fileName = md5(uniqid()).'.'.$ext;
                dd($fileName);

            }else{
                return 'Upload khong thanh cong';
            }
        }else{
            return 'Vui long chon file';
        }
        $file = $request->photo;
        dd($file);
    }
}
