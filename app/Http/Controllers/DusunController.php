<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dusun;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dusun::all();
        return view('admin.dusun.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dusun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'dusun' => ['required','string','min:3'],
        ]);

        $data   = new Dusun();
        $data->nama = $request->dusun;
        $data->save();
        return redirect()->route('dusun.index')->with('success','Data Dusun Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Dusun::find($id);
        return view('admin.dusun.edit', compact('data'));
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
        $this->validate($request,[
            'dusun' => ['required','string','min:3'],
        ]);

        $data   = Dusun::find($id);
        $data->nama = $request->dusun;
        $data->save();
        return redirect()->route('dusun.index')->with('success','Data Dusun Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Dusun::find($id);
        $data->delete();
        return redirect()->back()->with('success','Data Dusun Berhasil Dihapus!');
    }
}
