<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('index'); //retornar listado de productos
    }

    public function create(){
        return view('products.create'); //retorna un formulario para crear un producto
    }

    public function show($name){
        echo "PRODUCTO: $name";
        return view('products.show'); //retornar el detalle de un producto
    }
}
