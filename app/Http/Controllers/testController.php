<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function test ()
    {
        return view('test');
    }

    //
    public function about ()
    {
        return view('about');
    }

    // id pass
    public function idPass ($id)
    {
        echo $id;
    }

    // array return
    public function arr (Request $request)
    {
        return $request->ip('name');
    }
}
