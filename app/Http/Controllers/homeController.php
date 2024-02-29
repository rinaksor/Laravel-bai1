<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public function index(){
        $this->data['title'] = 'Dao tao lap trinh web';

        $this->data['message'] = 'Dang ky tai khoan thanh cong';
        return view('clients.home', $this->data);
    }

    public function products(){
        $this->data['title'] = 'San pham';

        return view('clients.products', $this->data);
    }

    public function getAdd(){
        $this->data['title'] = 'Them San pham';
        return view('clients.add', $this->data);
    }

    public function postAdd(Request $request){
        dd($request);
    }

    public function putAdd(Request $request){
        return 'Phuong thuc PUT';
        dd($request);
    }

    public function getArr(){
        $contentArr = [
            'name' => 'laravel 8.x',
            'lesson' => 'Khóa học lập trình Laravel',
            'academy' => 'Unicode Academy'
        ];
    
        return $contentArr;
    }

    public function downloadImage(Request $request){
        if (!empty($request->image)){
            $image = trim($request->image);

            $fileName = 'image_'.uniqid().'.jpg';
            //$fileName = basename($image);

            // return response()->streamDownload(function() use( $image){
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // }, $fileName);

            return response()->download($image, $fileName);
        }
    }
    public function dowloadDoc(Request $request){
        if (!empty($request->file)){
            $file = trim($request->file);

            $fileName = 'tai-lieu_'.uniqid().'.pdf';
            //$fileName = basename($image);

            // return response()->streamDownload(function() use( $image){
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // }, $fileName);
            
            $headers = [
                'Content-Type' => 'application/pdf'
            ];
            return response()->download($file, $fileName, $headers);
        }
    }
}
