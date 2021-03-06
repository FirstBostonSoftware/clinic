<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Input;
use Hash;

class Auth extends Controller
{
    public function __construct(){
        $this->middleware('allowsPages', ['only' => 'register']);
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function checklogin(){

		if(Session::has('user')){
			$user_id = Session::get('user');
			$user = User::where('doc_id',$user_id)->first();
			if ($user->id == 1 ) {
				return redirect('/dashboard');
			}
			elseif ($user->position == "Doctor") {
				return redirect('/myinfo');
			}
			elseif ($user->position == "Xray") {
				return redirect('/NFHSI/queueing');
			}
			elseif ($user->position == "Labtest") {
				return redirect('/NFHSI/queueing');
			}
			elseif ($user->position = "Cashier") {
				return redirect('/NFHSI');
			}
			else{
				Session::flush();
				return redirect()->action('Auth@checklogin');
			}
		}
		else{
			return view('welcome');
		} 
	}

	public function getlogin(Request $request){
		
		$user = $request->input('username');
		$pass = $request->input('password');
		$auth = User::where('username', $user)->first();
		if( count($auth) > 0 && $auth->password != ''){
			if (Hash::check($pass, $auth->password)) {
				Session::put('user', $auth->doc_id);
				Session::put('adminpassword', $pass);
				Session::put('position', $auth->position);
				Session::save();
				
				$user_id = Session::get('user');
				$user = User::where('doc_id',$user_id)->first();
				if ($user->id == 1 ) {
					return redirect('/dashboard');
				}
				elseif ($user->position == "Doctor") {
					return redirect('/myinfo');
				}
				elseif ($user->position == "Xray") {
					return redirect('/NFHSI/queueing');
				}
				elseif ($user->position == "Labtest") {
					return redirect('/NFHSI/queueing');
				}
				elseif ($user->position == "Cashier") {
					return redirect('/NFHSI');
				}
				else{
					return redirect('/')->with('error','Inactive Account');
				}
			}
			else{
				return redirect('/')->with('error','Invalid Password');
			}
		}
		else{
			return redirect('/')->with('error','Invalid Acccount');
		}
	}

	public function logout(){
		Session::flush();
		return redirect()->action('Auth@checklogin');
	}

}
