<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KK;
use App\Models\User;

class KKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = KK::all();
        $dataUser = User::all();
        return view('admin.kk.index', compact('collection','dataUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collection = User::where('role','0')->orderBy('name','asc')->get();
        return view('admin.kk.create',compact('collection'));
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
            'nomor' => 'required',
            'kepala'    => 'required',
            'rt'    => 'required',
            'rw'    => 'required',
            'desa'  => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi'  => 'required',
        ]);

        $data   = new KK();
        $data->nomor = $request->nomor;
        $data->user_id = $request->kepala;
        $data->rtrw = $request->rt."/".$request->rw;
        $data->desa = $request->desa;
        $data->kecamatan = $request->kecamatan;
        $data->kabupaten = $request->kabupaten;
        $data->provinsi = $request->provinsi;
        $data->save();

        $dataUser = User::find($request->kepala);
        $dataUser->kk_id = $data->id;
        $dataUser->save();
        return redirect()->route('kk.index')->with('success','Data Kartu Keluarga Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = KK::find($id);
        $dataKepala = User::where('id', $id)->get();
        $dataUser = User::where('kk_id',$id)->get();
        return view('admin.kk.detail', compact('data','dataUser','dataKepala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data   = KK::find($id);
        $user   = User::all();
        $dataUser  = User::where('id', $data->user_id)->first();
        return view('admin.kk.edit', compact('data','dataUser','user'));
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
            'nomor' => 'required',
            'kepala'=> 'required',
            'rtrw'=> 'required',
            'desa'=> 'required',
            'kecamatan'=> 'required',
            'kabupaten'=> 'required',
            'provinsi'=> 'required',
        ]);

        $data = KK::find($id);
        $data->nomor = $request->nomor;
        $data->user_id = $request->kepala;
        $data->rtrw = $request->rtrw;
        $data->desa = $request->desa;
        $data->kecamatan = $request->kecamatan;
        $data->kabupaten = $request->kabupaten;
        $data->provinsi = $request->provinsi;
        $data->save();

        $dataUser = User::find($request->kepala);
        $dataUser->kk_id = $data->id;
        $dataUser->save();
        return redirect()->route('kk.index')->with('success','Data Kartu Keluarga Berhasil Ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KK::find($id);
        $data->delete();
        return redirect()->back()->with('succes','Data Berhasil Dihapus!');
    }
}
