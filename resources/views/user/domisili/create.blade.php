@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Cetak Surat Domisili</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('domisili.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group d-none">
                            <label for="">ID</label>
                            <input type="text" class="form-control" name="id" placeholder="Nama" readonly value="{{Auth::user()->id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Warga Negara</label>
                            <input type="text" class="form-control" name="warga" placeholder="Warga Negara Indonesia / Asing" required>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="Tuliskan keperluan surat domisili" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" readonly required value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat" placeholder="Nama" readonly required value="{{ Auth::user()->tempat_lahir }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tanggal" placeholder="Nama" readonly required value="{{ Auth::user()->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" placeholder="Nama" readonly required value="{{ Auth::user()->jenis_kelamin }}">
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" class="form-control" name="agama" placeholder="Nama" readonly required value="{{ Auth::user()->agama }}">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Nama" readonly required value="{{ Auth::user()->pekerjaan }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Status Perkawinan</label>
                            <input type="text" class="form-control" name="status" placeholder="Nama" readonly required value="{{ Auth::user()->status_kawin }}">
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
