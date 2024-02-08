<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public function index(){
        $this->data['welcome'] = 'Hoc lap trinh Laravel tai <b>Unicode</b>';
        $this->data['content'] = '<h3>Chuong 1: Nhap mon Laravel</h3>
        <p>Kien thuc 1 </p>
        <p>Kien thuc 2 </p>
        <p>Kien thuc 3 </p>';

        $this->data['index']=1;

        $this->data['dataArr'] = [];

        $this->data['number'] =3;
        
        return view('home', $this->data);
    }
}
