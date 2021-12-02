<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistration;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class SiteController extends Controller
{
    //
    public function index ()
    {
        return view('frontend.home');
    }
    //
    public function singlePost ()
    {
        return view('frontend.single-post');
    }
    //
    public function userRegisterForm ()
    {
        return view('frontend.auth.user-register-form');
    }
    //
    public function Registration (Request $request)
    {


        # validation 1st rule

        // dd($request->all());
        // die();
        // $request->validate([
        //     "name"      =>  "required|string",
        //     "email"     =>  "required|email",
        //     "password"  =>  "required|min:8|same:confirm_password",
        //     "confirm_password"  =>  "required|same:confirm_password",
        //     "photo"  =>  ['required', 'image']
        // ]);

        $rules = [
            "name"      =>  "required|string",
            "email"     =>  "required|email",
            "password"  =>  "required|min:6|confirmed",
            "password_confirmation"  =>  "required",
            // "photo"  =>  ['required', 'image']
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $photo = $request->file('photo');
        // if ($photo->isValid()) {
        //     $filename = rand() . date('_d_M_Y_h_i_s_') . $photo->getClientOriginalName();
        //     $photo->storeAs('images', $filename);
        // }

        try{
            User::create([
                "name"      => $request->name,
                "email"     => $request->email,
                "password"  => bcrypt($request->password)
            ]);

            session()->flash('message', 'User registration success.');
            session()->flash('type', 'success');

        } catch (Exception $exc)
            {
                // session()->flash('message', 'Registration Already Exist.');
                session()->flash('message', $exc->getMessage());
                session()->flash('type', 'danger');
            }
        return redirect()->back();
    }

    // user login
    public function userLoginForm ()
    {
        return view('frontend.auth.user-login-form');
    }

    public function login (Request $request)
    {
        // receive data
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // validation
        $rules = ([
            "email"     =>  "required|email",
            "password"  =>  "required|min:6"
        ]);

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // dd($data);
        // auth()->attempt($rules);
        if (Auth::attempt($data)) {
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('message', 'These credentials do not match our records.');
            return redirect()->back();
        }
    }

    public function logout ()
    {
        // auth()->logout();
        Auth::logout();
        return redirect('/');
    }
}
