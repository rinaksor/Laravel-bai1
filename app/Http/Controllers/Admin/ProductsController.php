<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return 'Danh sach san pham';
    }
    /**
     * Show the form for creating a new resource.
     */
    // hien thi form them san pham (Phuong thuc Get)
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // xu ly them san pham (Phuong thuc POST)
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // lay ra thong tin san pham (Phuong thuc Get)
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //hien thi form sua san pham (Phuong thuc Get)
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    //xu ly sua san pham
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    //xu ly xoa san pham
    public function destroy(string $id)
    {
        //
    }
}
