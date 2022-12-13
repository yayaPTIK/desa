<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kematian;
use App\Models\User;
use App\Models\Kades;
use Illuminate\Support\Facades\Auth;

class KematiansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Kematian::latest()->get();
        return view('admin.kematian.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collection = User::where('role','0')->where('name','asc')->get();
        return view('admin.kematian.create',compact('collection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Kematian();
        $data->user_id = Auth::user()->id;
        
        $data->nama2 = $request->namaMeninggal;
        $data->tempat = $request->tempat;
        $data->tanggal = $request->tanggal;
        $data->agama2 = $request->agamaMeninggal;
        $data->nama_ayah = $request->namaAyah;
        $data->nama_ibu = $request->namaIbu;
        $data->alamat_ktp = $request->alamatMeninggal;
        $data->hari = $request->hariMeninggal;
        $data->tanggal_meninggal = $request->tanggalMeninggal;
        $data->tempat_meninggal = $request->tempatMeninggal;
        $data->status = 0;
        $data->save();

        return redirect()->route('kematians.index')->with('success','Data Berhasil Ditambah!');
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
        $data = Kematian::find($id);
        return view('admin.kematian.detail',compact('data','kades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kematian::find($id);
        return view('admin.kematian.edit', compact('data'));
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
        $data = Kematian::find($id);
        $data->nama2 = $request->namaMeninggal;
        $data->tempat = $request->tempat;
        $data->tanggal = $request->tanggal;
        $data->agama2 = $request->agamaMeninggal;
        $data->nama_ayah = $request->namaAyah;
        $data->nama_ibu = $request->namaIbu;
        $data->alamat_ktp = $request->alamatMeninggal;
        $data->hari = $request->hariMeninggal;
        $data->tanggal_meninggal = $request->tanggalMeninggal;
        $data->tempat_meninggal = $request->tempatMeninggal;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('kematians.index')->with('success','Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kematian::find($id);
        $data->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus!');
    }
}
