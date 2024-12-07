<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //

    public function index(){
       
        return view ('homepage');
    }

    public function criarContacto(){
       
        return view ('criarContacto');
    }

}
