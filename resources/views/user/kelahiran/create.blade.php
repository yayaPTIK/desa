@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Laporan Kelahiran</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kelahiran.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Anak</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Yang Meninggal" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="">Anak Ke</label>
                            <input type="number" min="1" class="form-control" name="anak" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" name="namaAyah" placeholder="Nama Ayah" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" name="namaIbu" placeholder="Nama Ibu" required>
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
