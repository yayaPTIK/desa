<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domisili;
use App\Models\Kades;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Domisili::where('user_id', Auth::user()->id)->get();
        return view('user.domisili.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.domisili.create');
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
            'id' => 'required',
            'warga' => 'required',
            'keterangan' => 'required',
            'nama' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'jk' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'status' => 'required',
        ]);
        $count = Domisili::all()->count();
        $tahun = Date('Y');
        $bulan = Date('m');
        $data = new Domisili();
        $data->nomor = $tahun."/".$bulan."/DMSL/".$count+1;
        $data->nama = $request->nama;
        $data->user_id = $request->id;
        $data->tempat = $request->tempat;
        $data->tanggal = $request->tanggal;
        $data->jenis_kelamin = $request->jk;
        $data->pekerjaan = $request->pekerjaan;
        $data->agama = $request->agama;
        $data->status_kawin = $request->status;
        $data->negara = $request->warga;
        $data->keterangan = $request->keterangan;
        $data->status = 0;
        $data->save();

        return redirect()->route('domisili.index')->with('success','Data Berhasil ditambah!');
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
        $data = Domisili::find($id);
        return view('user.domisili.detail', compact('data','kades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Domisili::find($id);
        return view('user.domisili.edit', compact('data'));
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
            'id' => 'required',
            'warga' => 'required',
            'keterangan' => 'required',
            'nama' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'jk' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'status' => 'required',
        ]);

        $data = Domisili::find($id);
        // $data->nomor = $tahun."/".$bulan."/DMSL/".$count+1;
        $data->nama = $request->nama;
        $data->user_id = $request->id;
        $data->tempat = $request->tempat;
        $data->tanggal = $request->tanggal;
        $data->jenis_kelamin = $request->jk;
        $data->pekerjaan = $request->pekerjaan;
        $data->agama = $request->agama;
        $data->status_kawin = $request->status;
        $data->negara = $request->warga;
        $data->keterangan = $request->keterangan;
        $data->status = 0;
        $data->save();

        return redirect()->route('domisili.index')->with('success','Data Berhasil ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Domisili::find($id);
        $data->delete();

        return redirect()->route('domisili.index')->with('success','Data Berhasil Dihapus!');
    }

    public function ajukan()
    {
        $collection = User::where('name','asc')->get();
        return view('user.domisili.ajukan', compact('collection'));
    }

    public function ajukanStore(Request $request)
    {
        $this->validate($request,[
            'id' => 'required',
            'warga' => 'required',
            'keterangan' => 'required',
            'nama' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'jk' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'status' => 'required',
        ]);
        $count = Domisili::all()->count();
        $tahun = Date('Y');
        $bulan = Date('m');
        $data = new Domisili();
        $data->nomor = $tahun."/".$bulan."/DMSL/".$count+1;
        $data->nama = $request->nama;
        $data->user_id = $request->id;
        $data->tempat = $request->tempat;
        $data->tanggal = $request->tanggal;
        $data->jenis_kelamin = $request->jk;
        $data->pekerjaan = $request->pekerjaan;
        $data->agama = $request->agama;
        $data->status_kawin = $request->status;
        $data->negara = $request->warga;
        $data->keterangan = $request->keterangan;
        $data->status = 0;
        $data->save();

        return redirect()->route('domisili.index')->with('success','Data Berhasil ditambah!');
    }
}
