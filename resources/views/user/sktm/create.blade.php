@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Buat Surat Keterangan Tidak Mampu</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('sktm.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK" readonly
                                value="{{ Auth::user()->nik }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Orang Tua</label>
                            <input type="text" class="form-control" name="namaortu" placeholder="Nama Orang Tua"
                                autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Orang Tua</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="inputCity" class="form-label">RT</label>
                                    <input type="text" class="form-control" name="rtortu" id="inputCity"
                                        placeholder="RT">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputCity" class="form-label">RW</label>
                                    <input type="text" class="form-control" name="rwortu" id="inputCity"
                                        placeholder="RW">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Dusun</label>
                                    <select id="inputState" class="form-control" name="dusunortu" required>
                                        <option>-- Pilih --</option>
                                        @foreach ($data as $item)
                                            <option value="{{$item->nama}}">{{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-none">
                            <label for="">Nomor Surat</label>
                            <input type="text" class="form-control" placeholder="Nomor Surat" name="nomorSurat"
                                value="" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" readonly
                                value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control" name="ttl" placeholder="Tempat, Tanggal Lahir"
                                readonly value="{{ Auth::user()->tempat_lahir }}, {{ Auth::user()->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin" readonly
                                value="{{ Auth::user()->jenis_kelamin }}">
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
