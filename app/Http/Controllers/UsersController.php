<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\User;
use App\Http\Requests\UserRequest;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function signup() {
    	return view('auth.register');
    }

    public function signup_store(UserRequest $request) {

    	$datebirth = Carbon::parse($request->input('datebirth'));
    	$age = Carbon::createFromDate($datebirth->year, $datebirth->month, $datebirth->day)->age;
    	if ($age < 17) {
    		Session::flash('error', 'Umur minimal harus 17 tahun');
    		return redirect()->route('signup');
    	} else {
            $user = Sentinel::registerAndActivate($request->all());
            $userrole = Sentinel::findRoleByName('Pl');
            $user->roles()->attach($userrole);
    		Session::flash('notice', 'Kamu berhasil daftar baru');
    		return redirect()->route('login');
    	}
    }
}
