@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Tambah Anggota Kartu Keluarga</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('addkk.store', $data->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">ID KK</label>
                            <input type="text" class="form-control" name="id" required value="{{$data->id}}">
                        </div>
                        <div class="form-group">
                            <select name="user" id="user" class="form-control" required>
                                <option value="">-- Pilih Nama --</option>
                                @foreach ($dataUser as $item)
                                    <option value="{{$item->id}}">{{$item->nik}} - {{$item->name}}</option>
                                @endforeach
                            </select>
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
