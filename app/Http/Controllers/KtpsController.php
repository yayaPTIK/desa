<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KTP;
use App\Models\KK;
use App\Models\User;
use App\Models\Kades;
use Illuminate\Support\Facades\Auth;

class KtpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = KTP::latest()->get();
        return view('admin.ktp.index', compact('collection'));
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
        $data = KTP::find($id);
        $kades = Kades::first();
        return view('user.ktp.show', compact('data','kades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KTP::find($id);
        $data->status = 1;
        $data->save();

        return redirect()->route('ktps.index')->with('success','Update Data Sukses');
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
        $data = KTP::find($id);

        $data->delete();
        return redirect()->route('ktp.index')->with('success','Delete Data Sukses');
    }
}
