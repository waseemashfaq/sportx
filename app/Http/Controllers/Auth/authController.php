<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class authController extends Controller
{
 
    protected $redirectTo = '/admin/dashboard';

   
    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('logout');
    // }

    //login page showing
    public function login(Request $request){
        // dd('login');
        // exit('poikkk');
        return view('admin.auth.login');
    }


    //login form Submit
    public function loginSubmit(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            return response()->json(['success' => 'Login Successfully'], 200);
        }
        else{
            return response()->json(['error'=>'Can not log in with the data provide.'], 200);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Perform any additional actions or custom logic here

        return redirect()->url('/');
    }

}
