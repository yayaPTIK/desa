@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Edit Data Warga</h3>
        </div>
        <div class="card-body">
            <form action="{{route('user.update', $user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- col left -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" value="{{$user->name}}" name="nama" class="form-control @error('nama') is-invalid @enderror" required>
                            @error('nama')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" value="{{$user->nik}}" name="nik" class="form-control @error('nik') is-invalid @enderror" required>
                            @error('nik')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control @error('dusun') is-invalid @enderror" value="{{$user->dusun}}" name="dusun" placeholder="Dusun" required>
                                    @error('dusun')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control @error('rt') is-invalid @enderror" value="{{$user->rt}}" name="rt" placeholder="RT" required>
                                    @error('rt')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control @error('rw') is-invalid @enderror" value="{{$user->rw}}" name="rw" placeholder="RW" required>
                                    @error('rw')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select value="{{$user->jenis_kelamin}}" name="jk" id="jk" class="form-control @error('jk') is-invalid @enderror">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jk')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" value="{{$user->tempat_lahir}}" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                            @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" value="{{$user->tanggal_lahir}}" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
                            @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <!-- col right -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                <option value="Islam" {{$user->agama == "Islam"?"selected":""}}>Islam</option>
                                <option value="Kristen" {{$user->agama == "Kristen"?"selected":""}}>Kristen</option>
                                <option value="Hindu" {{$user->agama == "Hindu"?"selected":""}}>Hindu</option>
                                <option value="Budha" {{$user->agama == "Budha"?"selected":""}}>Budha</option>
                                <option value="Katolik" {{$user->agama == "Katolik"?"selected":""}}>Katolik</option>
                                <option value="Lainnya" {{$user->agama == "Lainnya"?"selected":""}}>Lainnya</option>
                            </select>
                            @error('agama')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                                <option value="1" {{$user->status == "1"?"selected":""}}>Aktive</option>
                                <option value="0" {{$user->status == "0"?"selected":""}}>Non-Aktive</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Status Kawin</label>
                            <select name="keadaan" id="keadaan" class="form-control @error('keadaan') is-invalid @enderror">
                                <option value="kawin" {{$user->status_kawin == "kawin"?"selected":""}}>Kawin</option>
                                <option value="cerai" {{$user->status_kawin == "cerai"?"selected":""}}>Cerai</option>
                                <option value="cerai mati" {{$user->status_kawin == "cerai mati"?"selected":""}}>Cerai Mati</option>
                                <option value="belum kawin" {{$user->status_kawin == "belum kawin"?"selected":""}}>Belum Kawin</option>
                            </select>
                            @error('keadaan')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" value="{{$user->pekerjaan}}" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" required>
                            @error('pekerjaan')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-4"><img src="{{asset('uploads/avatar/'.$user->avatar)}}" alt="default" class="img-thumbnail w-100"></div>
                            <div class="col-md-8"><input type="file" name="image" required class="form-control"></div>
                        </div>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary ml-1" style="width:100%">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection