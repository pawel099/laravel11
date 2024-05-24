<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

   public function index() {

       return view ('product.products');
        
    }


    public function logIn() {

        return view ('components.welcome');
         
     }
}
