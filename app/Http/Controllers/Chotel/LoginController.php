<?php

namespace App\Http\Controllers\Chotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('chotel.login.login');
    }
    public function postLogin(Request $request){
    	$username = $request->username;
    	$password = $request->password;
    	if(Auth::attempt(['username'=>$username,'password'=>$password])){
    		return redirect()->route('chotel.index.index');
    	}else{
    		return redirect()->route('chotel.login')->with('msg','Sai username hoặc password');
    	}
    	}
    public function getLogout(){
    	Auth::logout();
    	return redirect()->route('chotel.index.index');
    }
    
}
