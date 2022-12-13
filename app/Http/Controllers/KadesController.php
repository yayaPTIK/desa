<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kades;
use Carbon\Carbon;

class KadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Kades::all();
        return view('admin.kades.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kades.create');
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
            'nama' => 'required',
            'nik' => 'required',
            'alamat'=> 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);

        $image  = $request->file('image');

        if(isset($image)){
            $currentDate    = Carbon::now()->toDateString();
            $imageName      = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/kades')){
                mkdir('uploads/kades', 0077, true);
            }
            $image->move('uploads/kades', $imageName);
        }else{
            $image = 'default.jpg';
        }

        $data = new Kades();
        $data->nama = $request->nama;
        $data->nik = $request->nik;
        $data->alamat= $request->alamat;
        $data->ttd = $imageName;

        $data->save();
        return redirect()->route('kades.index')->with('success','Data Berhasil Ditambah');
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
