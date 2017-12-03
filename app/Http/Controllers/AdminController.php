<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use App\User;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('sentinel');
        $this->middleware('sentinel.role');
        }

    public function index()
    {
        $usdet = UserDetail::where('sipi_status','=','Belum dibaca')->orderBy('created_at', 'asc')->get();
        // dd ($usdet);
        return view('admin.index')->with('usdet', $usdet);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usdet = \DB::table('user_details')->paginate(1);
        return view('admin.user', compact('usdet'));
        // $usdet = UserDetail::where('fullname','!=','Admin')->orderBy('created_at', 'asc')->paginate(1);
        // return view('admin.user')->with('usdet', $usdet);
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
        $user = User::findOrFail($id);
        $usdet = UserDetail::where('user_id', $id)->first();
        if ($user->delete() && $usdet->delete()) {
            return redirect()->route('olah.show');
        }
    }

    public function terima($id)
    {
            $usdet = UserDetail::where('user_id','=',$id)->get()->first();
            $usdet->sipi_status = "Diterima";
            $usdet->save();
        return redirect()->route("olah.index");
    }

    public function tolak($id)
    {
            $usdet = UserDetail::where('user_id','=',$id)->get()->first();
            $usdet->sipi_status = "Ditolak";
            $usdet->save();
        return redirect()->route("olah.index");
    }
}
