<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\Http\Requests\SessionRequest;
use DB;

class SessionsController extends Controller
{
    public function login() {
    	if ($user = Sentinel::check()) {
    		Session::flash("notice", "Kamu berhasil login". $user->email);
    		return redirect('home');
    	} else {
    		return view ('auth.login');
    	}
    }

    public function login_store(SessionRequest $request) {
    	if ($user = Sentinel::authenticate($request->all())) {
    		Session::flash("notice", "Selamat Datang". $user->email);
            $login=Sentinel::getUser()->id ;
            $dicek= DB::table('user_details')->where('user_id', '=', $login)->first();
            if ($dicek != null) {
                return redirect()->intended('dashboard');
            } else {
                return redirect('DataUsers.create'); //can beres
            }

    	} else {
    		Session::flash("error", "Login gagal");
    		return view ('auth.login');
    	}
    }

    public function logout() {
    	Sentinel::logout();
    	Session::flash("notice", "Berhasil logout");
    	return redirect('login');
    }
}
