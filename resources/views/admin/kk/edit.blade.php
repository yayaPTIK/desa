@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Edit Kartu Keluarga</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kk.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nomor KK</label>
                            <input type="text" class="form-control" name="nomor" placeholder="nomor" required value="{{$data->nomor}}">
                        </div>
                        <div class="form-group">
                            <label for="">Kepala Keluarga</label>
                            {{-- <input type="text" class="form-control" name="kepala" placeholder="Nama Kepala Keluarga" required value="{{$dataUser->name }}"> --}}
                            <select name="kepala" id="kepala" required class="form-control">
                                <option value="">-- Pilih Kepala Keluarga --</option>
                                @foreach ($user  as $item)
                                    <option value="{{$item->id}}" {{$item->id == $data->user_id?"selected":""}}>{{$item->nik}} - {{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="inputCity" class="form-label">RT/RW</label>
                                    <input type="text" class="form-control" name="rtrw" id="inputCity"
                                        placeholder="RT/RW" required value="{{$data->rtrw}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Desa</label>
                                    <input type="text" class="form-control" name="desa" id="inputCity"
                                        placeholder="Desa" value="{{$data->desa}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" required value="{{$data->kecamatan}}">
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" placeholder="Kabupaten" required value="{{$data->kabupaten}}">
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" required value="{{$data->provinsi}}">
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
