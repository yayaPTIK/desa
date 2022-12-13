@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Buat Surat Pengantar KTP</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('ktp.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <select name="pendidikan" id="pendidikan" class="form-control" required>
                                <option value="">-- Pilih Pendidikan --</option>
                                <option value="tidak tamat sd" {{$data->pendidikan == "tidak tamat sd"?"selected":""}}>Tidak Tamat SD</option>
                                <option value="SD" {{$data->pendidikan == "SD"?"selected":""}}>SD</option>
                                <option value="SMP" {{$data->pendidikan == "SMP"?"selected":""}}>SMP</option>
                                <option value="SMA" {{$data->pendidikan == "SMA"?"selected":""}}>SMA</option>
                                <option value="S1" {{$data->pendidikan == "S1"?"selected":""}}>S1</option>
                                <option value="S2" {{$data->pendidikan == "S2"?"selected":""}}>S2</option>
                                <option value="S3" {{$data->pendidikan == "S3"?"selected":""}}>S3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah"
                                required value="{{$data->nama_ayah}}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu"
                                required value="{{$data->nama_ibu}}">
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" placeholder="Provinsi"
                                required value="{{$data->provinsi}}">
                        </div>
                        <div class="form-group">
                            <label for="">Negara</label>
                            <input type="text" class="form-control" name="negara" placeholder="Negara" readonly value="Indonesia"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Status Kawin</label>
                            <input type="text" class="form-control" name="status_kawin" value="{{$data->status_kawin}}" placeholder="Kelurahan"
                                required readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{$data->agama}}" placeholder="Kelurahan"
                                required readonly>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK" readonly
                                value="{{$data->nik}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">No KK</label>
                            <select name="noKK" id="noKK" class="form-control" required readonly>
                                @foreach ($collection->where('id', Auth::user()->kk_id) as $item)
                                    <option value="{{$item->nomor}}" {{$item->nomor == $data->noKK}}>{{$item->nomor}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Nama" readonly
                                value="{{$data->alamat}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" readonly
                                value="{{$data->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Nama" readonly
                                value="{{$data->jenis_kelamin}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Nama" readonly
                                value="{{$data->tempat_lahir}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tanggal_lahir" placeholder="Nama" readonly
                                value="{{$data->tanggal_lahir}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Nama" readonly
                                value="{{$data->pekerjaan}}" required>
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
