<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function index()
    {
        return view('client.products.index');
    }

    public function show()
    {
        return view('client.products.show');
    }
}
