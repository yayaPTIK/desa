<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sktm;
use App\Models\Dusun;
use App\Models\Kades;
use Illuminate\Support\Facades\Auth;

class SktmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   = Sktm::where('user_id', Auth::user()->id)->get();
        return view('user.sktm.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Dusun::all();
        return view('user.sktm.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namaortu'  => 'required',
            'rtortu'    => 'required',
            'rwortu'    => 'required',
            'dusunortu' => 'required',
            // 'nomorSurat' => 'required',
            'nama'      => 'required',
            'ttl'       => 'required',
            'jk'        => 'required',
        ]);

       
        $sktm = new Sktm();
        $sktm->user_id  = Auth::user()->id;
        // $sktm->nomor    = $request->nomorSurat;
        $count = Sktm::all()->count();
        $tahun = Date('Y');
        $bulan = Date('M');
        $sktm->nomor    = $tahun."/".$bulan."/SKTM/".$count;
        $sktm->nama     = $request->nama;
        $sktm->ttl      = $request->ttl;
        $sktm->jk       = $request->jk;
        $sktm->namaOrtu = $request->namaortu;
        $sktm->alamatOrtu = $request->dusunortu . ", " . $request->rtortu . "/" . $request->rwortu;
        $sktm->ttd      = "-";
        $sktm->status   = 0;
        $sktm->save();

        return redirect()->route('sktm.index')->with('success','Input Data Sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data   =   Sktm::find($id);
        $kades = Kades::first();
        return view('user.sktm.show', compact('data','kades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Sktm::find($id);
        return view('user.sktm.edit', compact('data'));
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
            'namaortu' => 'required',
            'alamat'    => 'required',
        ]);

        $data = Sktm::find($id);
        $data->namaOrtu = $request->namaortu;
        $data->alamatOrtu = $request->alamat;
        $data->save();
        return redirect()->route('sktm.index')->with('success','Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sktm::find($id);
        $data->delete();
        return redirect()->route('sktm.index')->with('success','Data Berhasil dihapus!');
    }
}
