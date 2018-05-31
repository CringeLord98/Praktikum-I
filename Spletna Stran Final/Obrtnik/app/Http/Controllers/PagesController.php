<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Pindex(){
        return view('pages.index');
    }

    public function Plog(){
        return view('pages.prijava');
    }

    public function Preg(){
        return view('pages.registracija');
    }
    

    
}
