@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Tambah Kartu Keluarga</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kk.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nomor KK</label>
                            <input type="text" class="form-control" name="nomor" placeholder="nomor" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kepala Keluarga</label>
                            <select name="kepala" id="kepala" class="form-control" required>
                                <option value="">-- Pilih Kepala Keluarga --</option>
                                @foreach ($collection as $item)
                                    <option value="{{$item->id}}">{{$item->nik}} - {{$item->name}}</option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="inputCity" class="form-label">RT</label>
                                    <input type="text" class="form-control" name="rt" id="inputCity"
                                        placeholder="RT">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputCity" class="form-label">RW</label>
                                    <input type="text" class="form-control" name="rw" id="inputCity"
                                        placeholder="RW">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Desa</label>
                                    <input type="text" class="form-control" name="desa" id="inputCity"
                                        placeholder="Desa">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" placeholder="Kabupaten">
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" required>
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
