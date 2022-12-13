@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Laporan Kematian</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kematians.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Yang Meninggal</label>
                            <input type="text" class="form-control" name="namaMeninggal" placeholder="Nama Yang Meninggal" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir Pelapor" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" class="form-control" name="agamaMeninggal" placeholder="Agama" required>
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
                    <div class="col-md-12"><h5 class="text-center">Keterangan Lainnya</h5></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Alamat Sesuai KTP</label>
                            <input type="text" class="form-control" name="alamatMeninggal" placeholder="Alamat Sesuai KTP" required>
                        </div>
                        <div class="form-group">
                            <label for="">Hari</label>
                            <input type="text" class="form-control" name="hariMeninggal" placeholder="Hari Meninggal" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Meninggal</label>
                            <input type="date" class="form-control" name="tanggalMeninggal" placeholder="Tanggal Meninggal" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Meninggal</label>
                            <input type="text" class="form-control" name="tempatMeninggal" placeholder="Tempat Meninggal" required>
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
