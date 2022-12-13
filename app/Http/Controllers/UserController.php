<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Dusun;

use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        $all = User::where('role', '0')->latest()->get();
        return view('admin.penduduk.index', compact('all'));
    }

    public function create()
    {
        $data   = Dusun::all();
        return view('admin.penduduk.create', compact('data'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.penduduk.detail',compact('user'));
    }

    public function store(Request $request)
    {
        // Validasi Form
        $this->validate($request,[
            'nama' => ['required'],
            'nik' => ['required','max:16'],
            'dusun' => ['required'],
            'rt' => ['required'],
            'rw' => ['required'],
            'jk' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'agama' => ['required'],
            'status' => ['required'],
            'keadaan' => ['required'],
            'pekerjaan' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);
        
        $user = new User();

        $user->name = $request->nama;
        $user->nik = $request->nik;
        $user->dusun = $request->dusun;
        $user->rt = $request->rt;
        $user->rw = $request->rw;
        $user->jenis_kelamin = $request->jk;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->agama = $request->agama;
        $user->status = $request->status;
        $user->status_kawin = $request->keadaan;
        $user->pekerjaan = $request->pekerjaan;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->route('user.index')->with('success','Input Data Sukses');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.penduduk.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => ['required'],
            'nik' => ['required','max:16'],
            'dusun' => ['required'],
            'rt' => ['required'],
            'rw' => ['required'],
            'jk' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'agama' => ['required'],
            'status' => ['required'],
            'keadaan' => ['required'],
            'pekerjaan' => ['required'],
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);

        $image  = $request->file('image');
        $user = User::find($id);
        if(isset($image)){
            $currentDate    = Carbon::now()->toDateString();
            $imageName      = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/avatar')){
                mkdir('uploads/avatar', 0077, true);
            }
            if(file_exists('uploads/avatar/'.$user->avatar)){
                unlink('uploads/avatar/'.$user->avatar);
            }
            $image->move('uploads/avatar', $imageName);
        }else{
            $image = $user->avatar;
        }

        
        $user->name = $request->nama;
        $user->nik = $request->nik;
        $user->dusun = $request->dusun;
        $user->rt = $request->rt;
        $user->rw = $request->rw;
        $user->jenis_kelamin = $request->jk;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->agama = $request->agama;
        $user->status = $request->status;
        $user->status_kawin = $request->keadaan;
        $user->pekerjaan = $request->pekerjaan;
        $user->avatar = $imageName;
        $user->save();
        return redirect()->back()->with('success','Edit Data Sukses');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','Hapus Data Sukses');
    }
}
