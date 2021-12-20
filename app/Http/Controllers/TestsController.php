<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    //
    public function one(){
        return view('tests.one',[
            'var1' => "contenu 1"
        ]);
    }
    public function two(){
        return view('tests.two',[
            'var1' => "contenu 1"
        ]);
    }
}
