@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Profile</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- left -->
                <div class="col-md-4">
                    <table class="table table-responsive table-active" width="100%">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Dusun {{$user->dusun}}, RT.{{$user->rt}} RW.{{$user->rw}}</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td>{{$user->nik}}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>{{$user->tempat_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$user->tanggal_lahir}}</td>
                        </tr>
                    </table>
                </div>

                <!-- mid -->
                <div class="col-md-4 m-auto">
                    <img src="{{asset('uploads/avatar/'.$user->avatar)}}" class="img-thumbnail" alt="" style="width:100%">
                    <div class="form-group">
                    </div>
                </div>

                <!-- right -->
                <div class="col-md-4">
                     <table class="table table-responsive table-active" width="100%">
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{$user->agama}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>{{$user->status}}</td>
                        </tr>
                        <tr>
                            <td>Keadaan</td>
                            <td>:</td>
                            <td>{{$user->status_kawin}}</td>
                        </tr>
                        
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$user->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>{{$user->pekerjaan}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning" style="width:100%">Edit Semua</a>
                </div>
            </div>
        </div>
    </div>
@endsection