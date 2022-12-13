<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelahiran;
use App\Models\Kades;
use Illuminate\Support\Facades\Auth;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Kelahiran::where('user_id', Auth::user()->id)->get();
        return view('user.kelahiran.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.kelahiran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bulan = date('m');
        $tahun = date('Y');
        $count = Kelahiran::all()->count();

        $data = new Kelahiran();
        $data->user_id = Auth::user()->id;
        $data->nomor = $tahun."/".$bulan."/KLH".$count+1;
        $data->nama = $request->nama;
        $data->tempat = $request->tempat;
        $data->tanggal = $request->tanggal;
        $data->anak = $request->anak;
        $data->nama_ayah = $request->namaAyah;
        $data->nama_ibu = $request->namaIbu;
        $data->status = 0;

        $data->save();
        return redirect()->route('kelahiran.index')->with('success','Data Berhasil Ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kades = Kades::first();
        $data = Kelahiran::find($id);
        return view('user.kelahiran.detail', compact('data','kades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
