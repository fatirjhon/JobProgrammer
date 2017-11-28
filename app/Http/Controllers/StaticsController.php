<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticsController extends Controller
{
    public function home() {
	return view('static/home');
	}
}