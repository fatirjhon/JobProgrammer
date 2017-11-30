<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DataUsersRequest;
use Session;
use File;
use App\UserDetail;
use Sentinel;
use DB;

class DataUsersController extends Controller
{
    public function __construct() {
        $this->middleware('sentinel');
        $this->middleware('sentinel.role');
    }
    
    public function index()
    {
        $data = Sentinel::getUser()->id;
        $dicek = DB::table('user_details')->where('user_id', '=', $data)->first();
        if ($dicek != null) {
            $userdetail = UserDetail::where('user_id', '=', $data)->get();
            return view('user.index')->with('userdetail', $userdetail);
        } else {
            Session::flash("error", "Anda harus melengkapi data pribadi terlebih dahulu");
            return view('user.form');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Sentinel::getUser()->id;
        $dicek = DB::table('user_details')->where('user_id', '=', $data)->first();
        if ($dicek != null) {
            Session::flash("error", "Anda sudah melengkapi data pribadi");
            return redirect()->route("DataUsers.index");
        } else {
            return view('user.form');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataUsersRequest $request)
    {
        $data = $request->except(['sipi']);
        $data['user_id'] = Sentinel::getUser()->id;
        $data['sipi'] = time().'.'.$request->sipi->getClientOriginalExtension();
        $request->sipi->move(public_path('sipi'), $data['sipi']);   
        UserDetail::create($data);
        Session::flash("notice", "Info berhasil dibuat");
        return redirect()->route("DataUsers.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $userdetail = UserDetail::find($id);
        // return view('user.profile')
        // ->with('userdetail', $userdetail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
