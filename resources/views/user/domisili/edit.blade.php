@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Ajukan Surat Domisili</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('domisili.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" class="form-control" name="id" placeholder="Nama" readonly value="{{Auth::user()->id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Warga Negara</label>
                            <input type="text" class="form-control" name="warga" placeholder="Warga Negara Indonesia / Asing" required value="{{$data->negara}}">
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="Tuliskan keperluan surat domisili" required value="{{$data->keterangan}}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama"  required value="{{$data->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat" placeholder="Nama"  required value="{{$data->tempat}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal" placeholder="Nama"  required value="{{$data->tanggal}}">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control" required>
                                <option value="Laki-laki" {{$data->jenis_kelamin == "Laki-laki"?"selected":""}}>Laki-laki</option>
                                <option value="Perempuan" {{$data->jenis_kelamin == "Perempuan"?"selected":""}}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" class="form-control" name="agama" placeholder="Nama"  required value="{{$data->agama}}">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Nama"  required value="{{$data->pekerjaan}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Status Perkawinan</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">-- Pilih Status Perkawinan --</option>
                                <option value="kawin" {{$data->status_kawin == "kawin"?"selected":""}}>Kawin</option>
                                <option value="cerai" {{$data->status_kawin == "cerai"?"selected":""}}>Cerai</option>
                                <option value="cerai mati" {{$data->status_kawin == "cerai mati"?"selected":""}}>Cerai Mati</option>
                                <option value="belum kawin" {{$data->status_kawin == "belum kawin"?"selected":""}}>Belum Kawin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
