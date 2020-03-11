<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/index';

    public function __construct()
    {
    	$this->middleware(guest)->except('logout');
    }

    public function login(Request $request)
    {
    	$input = $request->all();

    	$this->validate($request,[
    		'email' => 'request|email',
    		'password' => 'request',
    	]);
    	if (auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))) {
    		if (auth()->user()->is_admin == 1) {
    			return redirect()->route('indexadmin');
    		}else{
    			return redirect()->route('index');
    		}
    	
    	}
    }
}
