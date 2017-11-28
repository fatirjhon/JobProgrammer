<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataUsersController extends Controller
{
    public function __construct() {
        $this->middleware('sentinel');
    }
    
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataUsersRequest $request)
    {
        $data = $request->except(['cv_file']);
        $data['user_id'] = $request->address;
        $input['cv_file'] = time().'.'.$request->cv_file->getClientOriginalExtension();
        $request->cv_file->move(public_path('cv'), $input['cv_file']);   
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
