@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Buat Surat Pengantar KTP</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('ktp.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <select name="pendidikan" id="pendidikan" class="form-control" required>
                                <option value="">-- Pilih Pendidikan --</option>
                                <option value="tidak tamat sd">Tidak Tamat SD</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" placeholder="Provinsi"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Negara</label>
                            <input type="text" class="form-control" name="negara" placeholder="Negara" readonly value="Indonesia"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Status Kawin</label>
                            <input type="text" class="form-control" name="status_kawin" value="{{Auth::user()->status_kawin}}" placeholder="Kelurahan"
                                required readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{Auth::user()->agama}}" placeholder="Kelurahan"
                                required readonly>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK" readonly
                                value="{{ Auth::user()->nik }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">No KK</label>
                            <select name="noKK" id="noKK" class="form-control" required readonly>
                                @foreach ($collection->where('id', Auth::user()->kk_id) as $item)
                                    <option value="{{$item->nomor}}">{{$item->nomor}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="inputCity" class="form-label">RT</label>
                                    <input type="text" class="form-control" name="rt" id="inputCity"
                                        placeholder="RT" value="{{Auth::user()->rt}}" required readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputCity" class="form-label">RW</label>
                                    <input type="text" class="form-control" name="rw" id="inputCity"
                                        placeholder="RW" value="{{Auth::user()->rw}}" required readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Dusun</label>
                                    <input type="text" class="form-control" name="dusun" placeholder="Dusun"  value="{{Auth::user()->dusun}}" required readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" readonly
                                value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Nama" readonly
                                value="{{ Auth::user()->jenis_kelamin }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Nama" readonly
                                value="{{ Auth::user()->tempat_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tanggal_lahir" placeholder="Nama" readonly
                                value="{{ Auth::user()->tanggal_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Nama" readonly
                                value="{{ Auth::user()->pekerjaan }}" required>
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
