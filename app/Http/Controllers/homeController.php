<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //Action index()
    public function index(){
        return 'Home';
    }

    //Action getNews()
    public function getNews(){
        return 'Danh sach tin tuc';
    }

    public function getCategories(){
        return 'Chuyen muc';
    }
}
