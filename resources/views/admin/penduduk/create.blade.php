@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Input Data Warga</h3>
        </div>
        <div class="card-body">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="row">
                    <!-- col left -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" autofocus required>
                            @error('nama')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" required>
                            @error('nik')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="dusun" id="dusun" class="form-control @error('dusun') is-invalid @enderror" required>
                                        <option value="">-- Pilih Dusun --</option>
                                        @foreach ($data as $item)
                                            <option value="{{$item->nama}}">{{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                    
                                    @error('dusun')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control @error('rt') is-invalid @enderror" name="rt" placeholder="RT" required>
                                    @error('rt')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control @error('rw') is-invalid @enderror" name="rw" placeholder="RW" required>
                                    @error('rw')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control @error('jk') is-invalid @enderror">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jk')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                            @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
                            @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            @error('agama')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <!-- col right -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                                <option value="1">Aktive</option>
                                <option value="0">Non-Aktive</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Status Kawin</label>
                            <select name="keadaan" id="keadaan" class="form-control @error('keadaan') is-invalid @enderror">
                                <option value="kawin">Kawin</option>
                                <option value="cerai">Cerai</option>
                                <option value="cerai mati">Cerai Mati</option>
                                <option value="belum kawin">Belum Kawin</option>
                            </select>
                            @error('keadaan')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" required>
                            @error('pekerjaan')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
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