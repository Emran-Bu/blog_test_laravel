<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

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

    //  print date

    public function datePrint(Request $request)
    {
        $date = $request->date;
        // $d = date('d-m-Y', strtotime($date));
        // $d = Carbon::parse($date)->format('d m Y');
        // echo $d;

        $sql = DB::table('students')->where($date, 'students.created_at')->get();

        dd($sql);
        
        return view('date_print', compact($sql));
    }

}
