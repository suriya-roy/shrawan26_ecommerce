<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class pagecontroller
{
    public function home()
    {
        return view('frontend.home');
    }
}
