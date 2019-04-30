<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class userController extends Controller
{
    public function register(){
    	if(!Auth::check()){
            return view('register');
        }
        else{
            if(Auth::user()->type == 'admin'){
                return redirect('admin');
            }
            else{
                return redirect('customer');
            }
        }

    }
    
    public function registerUser(Request $request){
    	$user = new User;
    	$user->name = $request->input('name');
    	$user->username = $request->input('username');
    	$user->password = bcrypt($request->input('password'));
    	$user->type = 'customer';
    	$user->save();

    	$msg =  "Register Success!";
        return view('login')->with('msg',$msg);
    }

    public function login(){
    	if(!Auth::check()){
	    	return view('login');
	    }
	    else{
	    	if(Auth::user()->type == 'admin'){
    			return redirect('admin');
    		}
    		else{
    			return redirect('customer');
    		}
	    }
    }
    
    public function loginUser(Request $request){
    	$user = Auth::attempt([
    		'username' => $request->username,
    		'password' => $request->password
    	]);
    	if($user){
    		if(Auth::user()->type == 'admin'){
    			return redirect()->intended('admin');
    		}
    		else{
    			return redirect()->intended('customer');
    		}
    	}
    	else{
    		echo "Invalid username or password";
    	}
    }

    public function admin(){
    	if(Auth::check()){
	    	return view('admin.index');
	    }
	    else{
	    	return redirect('login');
	    }
    }

    public function customer(){
    	if(Auth::check()){
	    	return view('customer.index');
	    }
	    else{
	    	return redirect('login');
	    }
    }

    public function logout(){
    	Auth::logout();
    	return redirect('login');
    }
}
