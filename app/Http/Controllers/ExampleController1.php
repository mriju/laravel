<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController1 extends Controller
{
    public function about()
    {
       $name = "Riju";
       $dept = "BCSE";
       $mail = "reju1230@gmail.com";
        return view('about', compact('name', 'dept', 'mail'));
    }
}
