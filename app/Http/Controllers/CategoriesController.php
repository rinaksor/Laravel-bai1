<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(){
        
    }

    //Hien thi danh sach chuyen muc (phuong thuc GET)
    public  function index(){
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
    public function addCategory(){
        return view('clients/categories/add');
    }

    //them du lieu vao chuyen muc (phuong thuc POST)
    public function handleAddCategory(){
        return 'Submit thêm chuyên mục';
    }

    //Xoa du lieu (phuong thuc Delete)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục'.$id;
    }
}
