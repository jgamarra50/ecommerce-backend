<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $listProducts = Product::paginate();

        return view('index', compact('listProducts') ); //retornar listado de productos
    }

    public function create(){
        return view('products.create'); //retorna un formulario para crear un producto
    }

    public function show($id){

        $product = Product::find($id);
        //echo "PRODUCTO: $name";
        return view('products.show', ["product"=>$product]); //retornar el detalle de un producto
    }
}
