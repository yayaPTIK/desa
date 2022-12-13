<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KK;
use App\Models\User;

class AddKkController extends Controller
{
    public function add($id)
    {
        $data = KK::find($id);
        $dataUser = User::where('role','0')->get();
        return view('admin.kk.add', compact('data','dataUser'));
    }

    public function store(Request $request, $id)
    {
        $this->validate($request,[
            'id' => 'required',
            'user' => 'required',
        ]);

        $data = User::find($request->user);
        $data->kk_id = $request->id;
        $data->save();
        return redirect()->route('kk.index')->with('success','Anggota Baru Berhasil Ditambahkan!');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->kk_id = null;
        $data->save();
        return redirect()->back()->with('success','Data Berhasil dihapus!');
    }
}
