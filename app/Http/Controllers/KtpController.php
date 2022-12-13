<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KTP;
use App\Models\KK;
use App\Models\User;
use App\Models\Kades;
use Illuminate\Support\Facades\Auth;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = KTP::where('user_id', Auth::user()->id)->get();
        return view('user.ktp.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collection = KK::all();
        return view('user.ktp.create', compact('collection'));
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
            'nik' => 'required',
            'noKK' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'provinsi' => 'required',
            'pendidikan' => 'required',
            'status_kawin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'negara' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'dusun' => 'required',
            'negara' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',

        ]);

        $data = new KTP();
        $data->user_id = Auth::user()->id;
        $data->nik = $request->nik;
        $data->noKK   = $request->noKK;
        $data->nama   = $request->nama;
        $data->jenis_kelamin   = $request->jenis_kelamin;
        $data->tempat_lahir   = $request->tempat_lahir;
        $data->tanggal_lahir   = $request->tanggal_lahir;
        $data->provinsi     = $request->provinsi;
        $data->pendidikan     = $request->pendidikan;
        $data->status_kawin     = $request->status_kawin;
        $data->agama     = $request->agama;
        $data->pekerjaan     = $request->pekerjaan;
        $data->alamat = "Dusun ".$request->dusun." RT.".$request->rt." RW.".$request->rw;
        $data->negara     = $request->negara;
        $data->nama_ayah     = $request->nama_ayah;
        $data->nama_ibu     = $request->nama_ibu;
        $data->status = 0;
        $data->save();

        return redirect()->route('ktp.index')->with('success','Input Data Sukses');
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
        $data = KTP::find($id);
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
        $collection = KK::all();
        $data = KTP::find($id);
        return view('user.ktp.edit', compact('data','collection'));
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
            'nik' => 'required',
            'noKK' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'provinsi' => 'required',
            'pendidikan' => 'required',
            'status_kawin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'negara' => 'required',
            'alamat' => 'required',
            'negara' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',

        ]);

        $data = KTP::find($id);
        $data->user_id = $data->user_id;
        $data->nik = $request->nik;
        $data->noKK   = $request->noKK;
        $data->nama   = $request->nama;
        $data->jenis_kelamin   = $request->jenis_kelamin;
        $data->tempat_lahir   = $request->tempat_lahir;
        $data->tanggal_lahir   = $request->tanggal_lahir;
        $data->provinsi     = $request->provinsi;
        $data->pendidikan     = $request->pendidikan;
        $data->status_kawin     = $request->status_kawin;
        $data->agama     = $request->agama;
        $data->pekerjaan     = $request->pekerjaan;
        $data->alamat = $request->alamat;
        $data->negara     = $request->negara;
        $data->nama_ayah     = $request->nama_ayah;
        $data->nama_ibu     = $request->nama_ibu;
        $data->status = 0;
        $data->save();

        return redirect()->route('ktp.index')->with('success','Input Data Sukses');
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

        return redirect()->back()->with('success','Data Berhasil Dihapus!');
    }
}
