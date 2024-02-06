<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class homeController extends Controller
{
    //Action index()
    public function index(){
        $title = "Hoc lap trinh web tai unicode";
        $content = 'Hoc lap trinh laravel 8.x tai unicode';

        // 'title'=>$title,
        // 'content' =>$content,
        
        //compact('title', 'content')

        return view('home')->with(['title'=>$title, 'content'=>$content]); //load view home.php
        //return View::make('home', compact('title', 'content'));
        //return View::make('home')->with(['title'=>$title, 'content'=>$content]);
        // $contentView = view('home')->render();
        //$contentView = $contentView->render();
        // dd($contentView);
        //return $contentView;
    
    }

    //Action getNews()
    public function getNews(){
        return 'Danh sach tin tuc';
    }

    public function getCategories(){
        return 'Chuyen muc';
    }

    public function getProductDetail($id){
        return view('clients.products.detail', compact('id'));
    }
}
